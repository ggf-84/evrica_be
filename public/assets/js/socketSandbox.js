// // if (window.location.hostname == 'dev.evrica.io') {
// //     socket = io.connect('http://dev.evrica.io:8085');
// // } else {
// //     // local websocket
// //     socket = io.connect('http://192.168.88.247:8085');
// // }
//
//
// socket.on('connect', function () {
//
//     //on connect event
//     console.log('Connected to local server')
//
//     socket.on('message', function (msg) {
//         console.log(JSON.stringify(msg));
//     });
//
//     socket.on('disconnect', function () {
//         console.log('Disconnected from server!');
//     });
// });