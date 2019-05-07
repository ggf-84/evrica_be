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
<h1>System Admin</h1>
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
    <button type="button" class="btn btn-primary" v-on:click="logout">Logout (back to system admin)</button>
    <button type="button" class="btn btn-primary" v-on:click="getProducts">Get products</button>
    <br>
    </div>

    <hr>
    Companies : <br><br>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">View users</th>
      <th scope="col">Sign in</th>
    </tr>
  </thead>
  <tbody>
  @foreach($companies as $company)
    <tr>
      <th scope="row">{{$company->id}}</th>
      <td>{{$company->title}}</td>
      <td><button type="button" class="btn btn-dark" v-on:click="viewUsers({{$company->id}})">{{count($company->users)}}</button></td>
       <td><button type="button" class="btn btn-dark" v-on:click="loginAsCompany({{$company->id}})">Sign In {{$company->title}}</button></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$companies->links()}}

<hr>

    Company Users : <br><br>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Sign in</th>
    </tr>
  </thead>
  <tbody v-for="user in users">
    <tr>
      <th scope="row">@{{user.id}}</th>
      <td>@{{user.firstname}}</td>
      <td>@{{user.email}}</td>
       <td><button type="button" class="btn btn-dark" v-on:click="loginAsCompanyUser(user.id)">Sign In with @{{user.email}}</button></td>
    </tr>
  </tbody>
</table>

<br><br>
<br><br>
<br><br>
<br><br>

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
            email : 'admin@mail.com',
            password : 'test',
            message: 'Hello Vue!',
            menu: [
                {label: "Generate", action: 'generate'},
            ],
            token: "",
            company_token : "",
            company_user_token : "",
            path: "/backend/api",
            log : "",
            users : [
            {id:"id",firstname: "User",email:"email"},
            ],
            company_id : "",

        },
        mounted: function () {
           console.log('Vue JS Mounted');

        },
        methods: {
            addLog : function(data){
                this.log = this.log + JSON.stringify(data) + '\n' + '=========' + '\n';
            },
            login : function(){
                this.$http.post(this.path + '/auth/admin',{email: this.email, password: this.password}).then(function (response) {
                    if(response.data){
                    this.addLog(response.data);
                    this.token = response.data.data.token;
                    console.log(this.token);
                    Vue.http.headers.common['Authorization'] = 'Bearer ' + this.token;
                    console.log(Vue.http.headers.common['Authorization']);
                    }
                    else{
                    this.addLog(response.message);
                    }
                }, function (response) {
                    this.addLog(response.data);
                })
            },
            logout : function(){
                this.$http.get(this.path + '/auth/admin/logoutAs').then(function (response) {
                    if(response.data){
                    this.addLog(response.data);
                    this.token = response.data.data.token;
                    console.log(this.token);
                    Vue.http.headers.common['Authorization'] = '';
                    Vue.http.headers.common['Authorization'] = 'Bearer ' + this.token;
                    console.log(Vue.http.headers.common['Authorization']);
                    }
                    else{
                    this.addLog(response.message);
                    }
                }, function (response) {
                    this.addLog(response.data);
                })
            },
            loginAsCompany : function(company){
                this.$http.post(this.path + '/auth/admin/loginAs',{company_id:company}).then(function (response) {

                    if(response.data.data.token){
                    this.addLog(response.data);
                    this.company_token = response.data.data.token;
                    Vue.http.headers.common['Authorization'] = '';
                    Vue.http.headers.common['Authorization'] = 'Bearer ' + this.company_token;
                    console.log("Company user token "+this.company_token);
                    console.log(Vue.http.headers.common['Authorization']);
                    }
                    else{
                    this.addLog(response.message);
                    }
                }, function (response) {
                    this.addLog(response.data);
                })
            },
            loginAsCompanyUser : function(user){
                console.log(user);
                this.$http.post(this.path + '/auth/admin/loginAs',{company_id:this.company_id,user_id:user}).then(function (response) {

                    if(response.data.data.token){
                    this.addLog(response.data);
                    this.company_user_token = response.data.data.token;
                    Vue.http.headers.common['Authorization'] = '';
                    Vue.http.headers.common['Authorization'] = 'Bearer ' + this.company_user_token;
                    console.log("User company token "+this.company_user_token);
                    console.log(Vue.http.headers.common['Authorization']);
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
            viewUsers: function (company) {
                this.company_id = company;
                console.log(this.company_id);
                this.$http.get(this.path + '/company?_filters[]=id='+company+'&_with=users').then(function (response) {
                    if(response.data){
                    this.addLog(response.data);
                    this.$set(this,'users', response.data.data[0].users);
                    console.log(response.data.data[0].users);
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
