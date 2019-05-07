<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
  <div id="app">
    <h5>Chat at {{$company->title}} as <input type="text"  v-model="username"></input></sub></h5>
    <input type="text" v-model="token" class="form-control"></input>
    <button class="btn btn-primary" @click="sendAuth">send</button>
    <hr>
    <div class="col-md-8 col-md-offset-4">

      <div style="height:400px;overflow:scroll;overflow-x:hidden" >

        <div v-for="message in messages">
          <div><b>@{{message.username}}<span> at @{{message.time}}</span></b></div>
          <div>
            <span>@{{message.msg}}</span>
          </div>
          <hr>
        </div>
      </div>

      <div>
        <input type="text" v-model="user_message" class="form-control" style="width:30%;display:inline"></input>
        <button class="btn btn-primary" @click="addMessage">send</button>
      </div>

    </div>
    <hr>
    Users
    @foreach($users as $user)
    <div>
      {{$user->id}} -- {{$user->email}}
      <p></p>
    </div>
    @endforeach
    <hr>
    WsConnections
    @foreach($wsconn as $wsc)
    <div>
      {{$wsc->socket}} -- {{$wsc->user_id}}
    </div>
    @endforeach

    <hr><br>
    Nr.2
    <br>
    eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjQsImlzcyI6Imh0dHA6Ly9ldnJpY2EubG9jYWwvYmFja2VuZC9hcGkvYXV0aCIsImlhdCI6MTUxODAwMTU2OSwiZXhwIjoxNTE4NjA2MzY5LCJuYmYiOjE1MTgwMDE1NjksImp0aSI6IlhmNEtjSVBZZ0lNSVhvM1AiLCJodHRwX2hvc3QiOiJldnJpY2EubG9jYWwiLCJjb21wYW55Ijp7ImlkIjozLCJ0aXRsZSI6IkNvbXBhbnkifX0.WP2EN7pQpMlobwoX2_QtCp-ZBHGLvAEeHqNVkAejzaE
</div>

  <script src="http://127.0.0.1:8080/socket.io/socket.io.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.4/vue-resource.js"></script>
  <script>

    socket = io.connect('127.0.0.1:8080');
    // let's assume that the client page, once rendered, knows what room it wants to join
    var room = "abc123";

    var app = new Vue({
      el: '#app',
      data: {
        username : '',
        user_message : 'connected',
        messages:[],
        token:'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjMsImlzcyI6Imh0dHA6Ly9ldnJpY2EubG9jYWwvYmFja2VuZC9hcGkvYXV0aCIsImlhdCI6MTUxNzk5OTIwNSwiZXhwIjoxNTE4NjA0MDA1LCJuYmYiOjE1MTc5OTkyMDUsImp0aSI6Ilg3ZmU0U2ozaVlZRXNPVXkiLCJodHRwX2hvc3QiOiJldnJpY2EubG9jYWwiLCJjb21wYW55Ijp7ImlkIjozLCJ0aXRsZSI6IkNvbXBhbnkifX0.GcNkW_CnKEDIQIP8E5t927yRyetQ9WtC7Xofbjucngk'
      },
      created: function () {
       console.log('Vue JS Mounted');
       this.insertName();

       socket.on('connect', function () {


        console.log('connected');
        console.log(socket.io.engine.id);


      });

      socket.on('message', function (msg) {
       console.log(msg);
       app.addMessageM(msg.data.message);
      });

     },
     methods: {
      insertName: function () {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < 5; i++)
          text += possible.charAt(Math.floor(Math.random() * possible.length));

        this.username = text;
      },
      addMessage: function(){

          // socket.json.send({ "event": 'sendMessage', "data": {'from_user':1,'to_user':2,'message':'message'} });
          // console.log({ "event": 'sendMessage', "data": {'from_user':1,'to_user':2,'message':'message'} });
          // socket.json.send({ "event": 'chat', "data": {"messsage" : this.user_message} });
          // console.log('chat event was sent above');

          // var send = socket.json.send({ event: 'pings', data : {} });
          console.log("SENDING...");
          var send = socket.json.send({ event: 'sendMessageToGroup', data : {message:this.user_message,to:3,from:4} });
          // this.messages.push({username: this.username, msg: this.user_message , time: '2:30'});

        },
        addMessageM: function(message){

          var mess = [
          {username: 'Server', msg: message , time: '00:00'}
          ];

          this.messages.push({username: this.username, msg: message , time: '2:30'});

        },
        sendAuth:function(){

          var data = { "event": "auth", "data": { "token": this.token } };

          socket.json.send(data);

          console.log('data');
          console.log(data.data.token);

          this.addMessageM(data.data.token);

        }

      },
    })
  </script>
</body>
</html>
