var env = require('dotenv').config()
var fs = require('fs')
var protocol = 'http'

protocol = process.env.PROTOCOL || 'http'
var options,
    server = {}

if (protocol == 'https') {
    options = {
        key: fs.readFileSync('dev.evrica.io.key'),
        cert: fs.readFileSync('dev.evrica.io.crt'),
        requestCert: true
    }
    server = require(protocol).createServer(options)
} else {
    protocol = 'http'
    server = require(protocol).createServer()
}

var io = require('socket.io').listen(server)
server.listen(process.env.WS_PORT)

var _conn
var rabbitmq = require('amqplib/callback_api').connect(
    'amqp://' +
    process.env.RabbitMQ_USER +
    ':' +
    process.env.RabbitMQ_PASS +
    '@' +
    process.env.RabbitMQ_HOST,
    function (err, conn) {
        if (err != null) bail(err)
        consumer(conn)
        _conn = conn
        //publisher(conn);
    }
)

//Get settings variables
var _ex = process.env.RabbitMQ_Exchange
var _outputQueue = process.env.RabbitMQ_OutputQueue
var _outputRoute = process.env.RabbitMQ_OutputRoute
var _inputQueue = process.env.RabbitMQ_InputQueue
var _inputRoute = process.env.RabbitMQ_InputRoute

//Create WS server
io.sockets.on('connection', function (socket) {
    //On message receive
    socket.on('message', function (msg) {
        var data = {}
        if (msg) {
            //assign socket.id to message
            data = msg
        }

        data.connection = {id: socket.id}
        //send  messages to backend Server
        sendServer(data)
    })

    //On disconnect
    socket.on('disconnect', function () {
        //console.log({event:'onDisconnect',data:{},connection:{id:socket.id}})
        //Send onDisconnect event to backend
        sendServer({
            event: 'onDisconnect',
            data: {},
            connection: {id: socket.id}
        })
    })
})

//Display exceptions
function bail(err) {
    console.error(err)
    process.exit(1)
}

//Send data to backend system using RabbitMQ
function sendServer(data) {
    //console.log(data)
    //convert object to json
    var msg = JSON.stringify(data)
    publisher(_conn, msg)
}

//RabbitMQ Publisher
function publisher(conn, data = '') {
    conn.createChannel(function (err, ch) {
        var args = process.argv.slice(2)
        ch.assertExchange(_ex, 'direct', {durable: true})
        ch.publish(_ex, _inputRoute, new Buffer(data))
    })
}

// RabbitMQ Consumer
function consumer(conn) {
    var ok = conn.createChannel(on_open)

    function on_open(err, ch) {
        ch.assertExchange(_ex, 'direct', {durable: true})
        //check if queue is defined
        ch.assertQueue(_outputQueue, {exclusive: false, durable: true}, function (err,
                                                                                  q) {
            console.log(' [*] To exit press CTRL+C')
            //bind queue to exchange
            ch.bindQueue(_outputQueue, _ex, _outputRoute)
            //consume queue
            ch.consume(
                q.queue,
                function (msg) {
                    onOutput(msg)
                },
                {noAck: true}
            )
        })
    }
}

// When server send response to client
function onOutput(msg) {
    var data = JSON.parse(msg.content.toString())
    //TO DO: Add system functions as libraries
    if (data.event == 'disconnect') {
        disconnect(data)
        return true
    }

    //system functions
    outputToWs(data)
}

/**
 *
 * Send data to ws clients
 */

function outputToWs(data) {
    var clients = data.to || []

    if (data.event) {
        // console.log(clients)
        //Send message to client
        clients.forEach(function (connection) {
            sendWs({data: data.data, event: data.event}, connection)
        }, this)
    }
}

//Disconnect provided connections
function disconnect(data) {
    //disconnect multiple users
    var clients = data.to || []

    clients.forEach(function (connection) {
        //If message is provided
        if (data.data.message && data.data.message.length != 0) {
            //Send message to WS Client
            sendWs({event: 'disconnect', message: data.data.message}, connection)
        }

        if (checkConnection(connection)) {
            //Send disconnect
            io.sockets.connected[connection].disconnect()
        }
    }, this)
}

//Check if connection with provided id exist
function checkConnection(connection) {
    if (io.sockets.connected[connection]) {
        return true
    }
    return false
}

//Send data to WebSocket Client
function sendWs(data, to = '') {
    //Check if is not empty, connection id provided in parameters
    if (to) {
        //Check if provided connection exist
        if (checkConnection(to)) {
            //Send data to connected websocket client
            io.sockets.connected[to].json.send(data)
            return true
        }
    }
    return false
}
