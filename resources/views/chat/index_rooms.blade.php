<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <style>
  .fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
  }
  .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
  }
  </style>
</head>
<body>
  <div id="app" class="container">
    <br>
    <transition name="fade">
      <div v-if="showAlert">
    <div class="alert alert-warning fade show" role="alert">
      <strong>Holy guacamole!</strong> <span>@{{alertMessage}}</span>
    </div>
  </div>
  </transition>
    <hr>

<div class="row">
    <div class="col-md-3">
    @foreach($rooms as $room)

    <button @click="joinRoom({{$room->id}})" class="btn btn-info">Join {{$room->title}}</button><br>
    <button @click="leaveRoom({{$room->id}})" class="btn btn-danger">Leave {{$room->title}}</button>
    <br><br>
    @endforeach
    <hr>
    <input type="text" v-model="userEmail"></input><br>
    <input type="text" v-model="userPassword"></input>
    <br>
    <button class="btn btn-primary" @click="loginUser()">Login</button>
    <hr>
    <button class="btn btn-warning" @click="loadMessages(15,null)">Load last messages (15)</button>
    <!-- <hr>
    <button class="btn btn-warning" @click="loadMessages(15,1)">Load messages (1 day ago)</button>
    <hr>
    <button class="btn btn-warning" @click="loadMessages(15,7)">Load messages (7 days ago)</button>
    <hr>
    <button class="btn btn-warning" @click="loadMessages(15,30)">Load messages (30 days ago)</button>
    <hr>
    <button class="btn btn-warning" @click="loadMessages(15,365)">Load messages (1 year ago)</button> -->
    <!-- <hr> -->
    </div>

    <div class="col-md-9">
      <div style="height:400px;overflow:scroll;overflow-x:hidden">


      <div v-for="messageGroup in groupedMessages">
        @{{messageGroup.date}}
        <div v-for="message in messageGroup.messages">
          <div> <b>@{{message.username}}<span> at @{{message.time}}</span></b></div>
          <div>
            <span>@{{message.msg}}</span>
          </div>
          <hr>
        </div>
        <hr>
      </div>

<!--
      <div v-for="message in messages">
      <div> <b>@{{message.username}}<span> at @{{message.time}}</span></b></div>
        <div>
          <span>@{{message.msg}}</span>
        </div>
        <hr>
      </div> -->


    </div>

      <div>
        <input type="text" v-model="user_message" class="form-control" style="width:30%;display:inline"></input>
        <button class="btn btn-primary" @click="addMessage()">send</button>
      </div>


    </div>

  </div>

</div>

  <script src="http://127.0.0.1:8181/socket.io/socket.io.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/vue/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.4/vue-resource.js"></script>
  <script>

    socket = io.connect('127.0.0.1:8181');
    // let's assume that the client page, once rendered, knows what room it wants to join
    // var currentRoom = 0;

    var app = new Vue({
      el: '#app',
      data: {
        path: "/backend/api",
        username : '',
        user_message : 'connected',
        messages:[],
        userEmail:'test@mail.com',
        userPassword:'test',
        token:'',
        currentRoom:0,
        alertMessage:'',
         showAlert: false,
         messagesGroups:[],
         groupedMessages:[],
         page:1,
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
       if(typeof msg.data.message.room !== 'undefined'){
         var message = msg.data.message;
         if(app.currentRoom==message.room){
           app.addMessageM(msg.data.message);
         }
         else{
           app.notifyMessage(msg.data.message);
         }
       }
       else{
         app.addMessageM(msg.data.message);
       }
      });
      // this.loginUser();
      // this.sendAuth();
      setInterval(function(){ app.showAlert=false; }, 5000);

     },
     methods: {
       loginUser:function(){
         this.$http.post(this.path + '/auth', {email: this.userEmail, password: this.userPassword})
                 .then(function (response) {
                     this.token = (response.data.data.token)
                     Vue.http.headers.common['Authorization'] = 'Bearer ' + this.token;
                     this.token=response.data.data.token;
                     this.sendAuth();
                 })
       },
      insertName: function () {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < 5; i++)
          text += possible.charAt(Math.floor(Math.random() * possible.length));

        this.username = text;
      },
        addMessage: function(){
          console.log("SENDING... aM"+this.currentRoom);
          if(this.currentRoom!=0){
            socket.json.send({ event: 'sendMessageGroup', data : {message:this.user_message,room:this.currentRoom} });
          }
            console.log('current room '+this.currentRoom);
          // var send = socket.json.send({ event: 'sendMessageToGroup', data : {message:this.user_message,to:3,from:4} });
          // this.messages.push({username: this.username, msg: this.user_message , time: '2:30'});
        },
        addMessageM: function(message){

          if(typeof message.from !== 'undefined'){
            this.messages.push({username: message.from.username, msg: message.message , time: message.time});
          }
          else{
            this.messages.push({username: this.username, msg: message , time: '2:30'});
          }

        },
        sendAuth:function(){
          var data = { "event": "auth", "data": { "token": this.token } };
          socket.json.send(data);
          console.log(data.data.token);
          // this.addMessageM(data.data.token);
        },
        joinRoom : function(roomID){
          this.messages=[];
          console.log("SENDING...");
          socket.json.send({ event: 'userJoined', data : {room:roomID} });
          this.currentRoom = roomID;
        },
        leaveRoom : function(roomID){
          console.log("SENDING...");
          socket.json.send({ event: 'userLeft', data : {room:roomID} });
          this.currentRoom = 0;
        },
        notifyMessage:function(message){
          this.alertMessage = message.from.username+' sent a message in '+message.roomData.title;
          this.showAlert = true;
        },
        loadMessages:function(limit,period){
          this.$http.get(this.path + '/room/messages?_with=user&_sort=-id&_filters[]=room_id-eq='+this.currentRoom+'&_limit='+limit+'&_page='+this.page)
                  .then(function (response) {
                      this.page++;
                      console.log(response.data.data);
                      var rData = response.data.data;

                      // rData.reverse();

                      for (i = 0; i < rData.length; i++) {
                      var dataTime = this.JSdate(rData[i].created_at).msgDate;
                      var format = dataTime.getFullYear()+"-"+this.str_pad(dataTime.getMonth());
                      format+='-'+this.str_pad(dataTime.getDate());
                      console.log("FORMAT "+format);
                      this.messagesGroups.push({time:format,username: rData[i].user.firstname+' '+rData[i].user.lastname, msg: rData[i].message});
                      }

                      // console.log(JSON.stringify(this.messagesGroups));

                      // this.messagesGroups.reverse();

                      const grouped = _.groupBy(this.messagesGroups,'time');
                      const listOftimes = Object.keys(grouped);

                      // console.log("grouped "+JS2ON.stringify(grouped));

                      listOftimes.forEach(key => {

                        // console.log(key);

                        var weekdays = new Array(7);
                        weekdays[0] = "Sunday";
                        weekdays[1] = "Monday";
                        weekdays[2] = "Tuesday";
                        weekdays[3] = "Wednesday";
                        weekdays[4] = "Thursday";
                        weekdays[5] = "Friday";
                        weekdays[6] = "Saturday";

                        var dateParts = key.split("-");
                        var jsDate = new Date(dateParts[0], dateParts[1] - 1, dateParts[2].substr(0,2));

                        var format = weekdays[jsDate.getDay()];
                        format+=' , '+this.str_pad(jsDate.getDate());
                        var monthNames = ["January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"
                        ];
                        format+=' '+monthNames[jsDate.getMonth()];
                        format+=' '+jsDate.getFullYear();

                        console.log(' ===========  ' + format + ' =========== ');

                        const messagesIngroup = grouped[key];

                        var messagesList = [];

                        messagesIngroup.forEach(msg => {


                        console.log(JSON.stringify(msg.msg));

                          // console.log(msg.username);

                          messagesList.push(msg);

                        });

                        this.groupedMessages.push({date:format,messages:messagesList});

                        console.log("-----------------------");
                        console.log(JSON.stringify(this.groupedMessages));

                      })



                      rData.reverse();
                      for (i = 0; i < rData.length; i++) {
                        // var messageTime = this.JSdate(rData[i].created_at);
                        // var logTime = this.JSdate(rData[i].created_at);
                        // var currentDate = new Date();
                        // console.log('current '+currentDate.getDate());
                        // console.log("logTime "+logTime.msgDate.getDate());
                        // this.messagesGroups.push({timeGroup:logTime.msgDate.getDate();});
                        // console.log(rData[i].user.firstname);
                        this.messages.push({username: rData[i].user.firstname+' '+rData[i].user.lastname, msg: rData[i].message , time: this.JSdate(rData[i].created_at).timestamp});
                      }

                  })



            },

      JSdate:  function (inDate){
        // Split timestamp into [ Y, M, D, h, m, s ]
        var timestamp = inDate;
        var t = timestamp.split(/[- :]/);
        var date = new Date(Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]));
        return {timestamp:date.getHours()+':'+(date.getMinutes()<10?'0':'') + date.getMinutes(),msgDate:date};
  },
  str_pad: function(n) {
      return String("00" + n).slice(-2);
  }

      },
    })
  </script>
</body>
</html>
