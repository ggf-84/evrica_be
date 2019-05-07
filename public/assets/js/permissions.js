var  EventBus = new Vue();
setTimeout(function () {
    initLogin();
}, 100);

function initLogin() {
    var loggedUserVue = new Vue({
        el: '#loginDiv',
        data: {
            logged: false,
            path: "/backend/api",
            token: '',
            email: '',
            confirm: false,
            confirmMessage: '',
            loggedUser:{},
        },
        methods: {
            userLogout: function(){
                this.$http.get(this.path + '/auth/logout')
                    .then(function (response) {
                        console.log('loggedOut');
                        localStorage.removeItem('userToken');
                        this.logged = false;
                        EventBus.token = '';
                        Vue.http.headers.common['Authorization'] = '';
                        location.reload();
                    });
            },
            checkToken: function(){
                var token = localStorage.getItem('userToken');
                this.email = loginModalVue.userEmail.toString();

                if(token){
                    loggedUserVue.logged = true;
                    Vue.http.headers.common['Authorization'] = 'Bearer ' + token;
                    EventBus.$emit('user-was-logged');
                    EventBus.token = token;
                    loginModalVue.token = token;
                    loginModalVue.authSocket();
                    loginModalVue.getPermissions();
                }
            },
            created: function () {

            }
        }
    });

    var loginModalVue = new Vue({
        el: '#loginModal',
        data: {
            path: "/backend/api",
            local_path: "api",
            loggedUser: {},
            userEmail: '',
            userPassword: '',
            token: '',
            errors: false,
        },
        methods: {
            loginUser: function () {
                loggedUserVue.email = this.userEmail.toString();
                this.$http.post(this.local_path + '/auth', {email: this.userEmail, password: this.userPassword})
                    .then(function (response) {
                        this.token = (response.data.data.token);
                        loggedUserVue.logged = true;
                        $('#loginModal').modal('hide');

                        Vue.http.headers.common['Authorization'] = 'Bearer ' + this.token;
                        localStorage.setItem('userToken', this.token);

                        EventBus.$emit('user-was-logged');
                        EventBus.token = this.token;
                        this.getPermissions();

                        console.log(this.token);

                        this.authSocket();

                    }).catch(function (data) {
                    if (parseInt(data.status) > 300) this.errors = data.body.message;
                })
            },
            authSocket: function () {
                console.log('Send auth event')
                var data = {"event": "auth", "data": {"token": ""}}
                data.data.token = this.token;
                socket.json.send(data);
                console.log(JSON.stringify(data));
            },
            getPermissions: function() {
                this.$http.get(this.local_path + '/role/available')
                    .then(function (response) {
                        EventBus.permissions = Array.from(response.data.data, x => x.code);
                        console.log(EventBus.permissions);
                    })
            }
        }
    });

    loggedUserVue.checkToken();

var modal_submit_register = 'Register';
var modal_submit_password = 'Reset Password';
var modal_submit_login = 'Login';

var modal = new Vue({
    el: '#authModal',
    data: {
        active: null,
        submitted: null,
        settingsMeta: null,

        path: "/backend/api",
        // Submit button text
        registerSubmit: modal_submit_register,
        passwordSubmit: modal_submit_password,
        loginSubmit: modal_submit_login,

        // Modal text fields
        registerFirstName: '',
        registerLastName: '',
        registerEmail: '',
        registerPassword: '',
        loginEmail: '',
        loginPassword: '',
        passwordEmail: '',

        // Modal error messages
        registerForm: '',
        socialButtons: {
            social_login: []
        },

        // Modal error messages
        registerError: false,
        loginError: false,
        passwordError: false,
        errorMsg: '',
        confirm: ''
    },
    methods: {
        close: function(e) {
            e.preventDefault();
            if (e.target === this.$el) {
                this.active = null;
            }
        },
        flip: function(which, e) {
            if ( which === 'start') {
                this.active = 'login';
                return;
            }
            e.preventDefault();
            if (which !== this.active) {
                this.active = which;
            }
        },
        submit: function(which, e) {
            e.preventDefault();
            element = e.target;
            this.submitted = which

            switch (which) {
                case 'register-not-confirmed':
                    this.$http.get(this.path + '/counterparties/reg?firstname='+  this.registerFirstName +
                        '&lastname=' + this.registerLastName +
                        '&email=' + this.registerEmail
                    ).then(function (response) {
                        //console.log('token-reg-inactive', response.data);
                        loggedUserVue.confirm = true;
                        if(response.data.error === undefined){
                            $('#authModal').modal('hide');
                            loggedUserVue.confirmMessage = 'Your password will be receive to: ' + this.registerEmail + '!';
                            console.log('registered C:', response.data.data);
                        }else{
                            this.errorMsg = response.data.message;
                        }
                    });
                    break;
                case 'register-confirmed':
                    this.$http.get(this.path + '/counterparties/reg?firstname='+  this.registerFirstName +
                        '&lastname=' + this.registerLastName +
                        '&email=' + this.registerEmail +
                        '&password=' + this.registerPassword
                    ).then(function (response) {
                        //console.log('token-reg', response.data);
                        if(response.data.error === undefined){
                            this.token = response.data.token;
                            $('#authModal').modal('hide');
                            loggedUserVue.confirm = true;
                            loggedUserVue.confirmMessage = 'Successful registration! Hello ' + this.registerLastName + '!';
                            // console.log('registered C:', response.data.data);
                        }else{
                            this.errorMsg = response.data.message;
                        }
                    });
                    break;
                case 'login':
                    this.$http.post(this.path + '/auth', {email: this.loginEmail, password: this.loginPassword})
                        .then(function (response) {
                            this.token = (response.data.data.token);
                            $('#authModal').modal('hide');
                            loggedUserVue.confirm = true;
                            loggedUserVue.confirmMessage = 'Hi! ' + this.loginEmail;
                            //console.log('logged:', response.data.data);
                        });
                    break;
                case 'password':
                    this.confirm = 'Your password will be received to: ' + this.registerEmail;
                    $('#authModal').modal('hide');
                    loggedUserVue.confirm = true;
                    loggedUserVue.confirmMessage = 'Your new password will be receive to: ' + this.passwordEmail + '!';
                    //console.log('password:', this.passwordEmail);
                    break;
            }
        },
        authBySettings: function () {

            this.$http.get(this.path + '/metadata/Settings').then(function (response) {
                var multiOptions = [];
                var settingsMeta = response.data.data.settings;
                this.settingsMeta = settingsMeta;
                $.each(settingsMeta.fields, function (index, value) {
                    if(value.multiple !== undefined)
                        multiOptions[index] = settingsMeta.enum[index];
                });

                this.$http.get(this.path + '/company-settings').then(function (response) {
                    this.registerForm = response.data.data.insert_user_type;
                    //console.log('test:', this.registerForm);
                    var settingsMeta = this.settingsMeta,
                        companySettings = response.data.data,
                        multiSelectSettings = [],
                        multiValue = {},
                        socialLogin = this.socialButtons;

                    $.each(settingsMeta.fields, function (index, value) {
                        if(value.multiple !== undefined)
                            multiSelectSettings.push(index);
                    });

                    $.each(companySettings, function (index, value) {
                        if(multiSelectSettings.indexOf(index) >= 0 )
                            multiValue[index] = value;
                    });

                    $.each(multiValue, function (index, value) {
                        if(multiOptions[index] !== undefined){
                            $.each(value, function (i, val) {
                                socialLogin[index].push(getId(multiOptions[index], val));
                            });
                        }
                    });
                    this.socialButtons = socialLogin.social_login;
                });

            })
        }
    },
    created: function () {
        this.authBySettings();
        this.flip('start');
    }
});

};


setTimeout(function () {
    listCounterparts();
}, 100);

function listCounterparts() {

    var counterpartsModal = new Vue({
        el: '#counterpartsModal',
        data: {
            path: "/backend/api",
            counterparts: '',
            activateCounterpart: null
        },
        methods: {
            getCounterparts: function () {
                this.$http.post(this.path + '/auth', {email: "test@mail.com", password: "test"})
                    .then(function (response) {
                        this.token = (response.data.data.token);
                        Vue.http.headers.common['Authorization'] = 'Bearer ' + this.token;
                        this.$http.get(this.path + '/counterparties').then(function (response) {
                            // console.log('Counterparts list:', response.data.data);
                            this.counterparts = response.data.data
                        });
                    });
            },
            activate: function (id, email) {
                console.log('Counterparts list:', id, email);
                this.$http.post(this.path + '/auth', {email: "test@mail.com", password: "test"})
                    .then(function (response) {
                        this.token = (response.data.data.token);
                        Vue.http.headers.common['Authorization'] = 'Bearer ' + this.token;
                        this.$http.post(this.path + '/counterparties/activate', {id: id}).then(function (response) {
                            // console.log('activate:', response.data.data);
                            location.reload();
                        });
                    });
            }
        },
        created: function () {
            this.getCounterparts();
        }
    });
}