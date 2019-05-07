<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>
        textarea{
            height: 300px;
        }
    </style>
</head>
<body>
<div id="app">
<h1>{{$company->title}} <sub>( {{$company->id}} )</sub></h1>
<hr>
<div class="col-md-8 col-md-offset-4">
    <div>



    <div>
    <p>Email</p>
    <input type="text" name="email" class="form-control" value="test@mail.com" v-model="email">
    <br>
    </div>
    <div>
    <p>Password</p>
    <input type="text" name="password" class="form-control" value="test" v-model="password">
    <br>
    </div>
    <div>
    <textarea class="form-control" v-model="log"></textarea>
    <br>
    <button type="button" class="btn btn-primary" v-on:click="login">Login</button>
    <button type="button" class="btn btn-primary" v-on:click="getProducts">Get products</button>
    <br>
    </div>



    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.4/vue-resource.js"></script>
<script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
<script>
     var app = new Vue({
        el: '#app',
        data: {
            email : 'test@mail.com',
            password : 'test',
            message: 'Hello Vue!',
            menu: [
                {label: "Generate", action: 'generate'},
            ],
            token: "",
            path: "/backend/api",
            log : "",

        },
        mounted: function () {
           console.log('Vue JS Mounted');
        },
        methods: {
            addLog : function(data){
                this.log = this.log + JSON.stringify(data) + '\n' + '=========' + '\n';
            },
            login : function(){
                this.$http.post(this.path + '/auth',{email: this.email, password: this.password}).then(function (response) {
                    if(response.data){
                    this.addLog(response.data);
                    this.token = response.data.data.token;
                    console.log(this.token);
                    Vue.http.headers.common['Authorization'] = 'Bearer ' + this.token;
                    }
                    else{
                    this.addLog(response.message);
                    }
                }, function (response) {
                    this.addLog(response.data);
                })
            },
            getProducts: function () {

                this.$http.get(this.path + '/products').then(function (response) {
                    if(response.data){
                    this.addLog(response.data);
                    this.token = response.data.token;
                    console.log(this.token);
                    }
                    else{
                    this.addLog(response.message);
                    }
                }, function (response) {
                    this.addLog(response.data);
                })
            },

        },

    })

</script>
</body>
</html>
