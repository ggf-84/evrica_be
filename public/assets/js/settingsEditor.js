//Settings ------------------------------------------
var settingsContent = $('#settingsContent');

function editSettings() {
    window['settingsEditor'] = new Vue({
        el: '#editSettingsModal',
        components: {
            Multiselect: window.VueMultiselect.default
        },
        data: {
            path: "/backend/api",
            companySettings: {},
            settingsMeta: {},
            textColor: 'black',
            token: '',
            multiSelectOptions: {
                social_login: []
            },
            enableFields: [
                'language',
                'insert_user_type',
                'social_login',
                // 'facebook_client_id',
                // 'facebook_secret_key',
                // 'google_client_id',
                // 'google_secret_key',
                // 'twitter_client_id',
                // 'twitter_secret_key'
            ]
        },
        methods: {
            setLabel (option) {
                return `${option.value}`
            },
            getSettings: function () {
                this.$http.get(this.path + '/company-settings').then(function (response) {
                    var companySettings = response.data.data;
                    var multiOptions = this.multiSelectOptions;
                    var settingsMeta = this.settingsMeta;
                    var multiValue = {};
                    var multiSelectSettings = [];

                    $.each(settingsMeta.fields, function (index, value) {
                        if(value.multiple !== undefined){
                            multiSelectSettings.push(index);
                        }
                    });

                    $.each(response.data.data, function (index, value) {
                        if(multiSelectSettings.indexOf(index) >= 0) {
                            multiValue[index]  = value;
                        }
                    });

                    $.each(multiValue, function (index, value) {
                        if(multiOptions[index] !== undefined){
                            companySettings[index] = [];
                            $.each(value, function (i, val) {
                                companySettings[index].push(getId(multiOptions[index], val));
                            });
                        }
                    });

                    this.companySettings = companySettings;
                    this.textColor = response.data.data.text_color;
                });
            },
            saveSettings: function () {
                cSettings = this.companySettings;
                $.each(cSettings, function (index, value) {
                    if(Array.isArray(value)) cSettings[index] = arrayColumn(value, 'id');
                });
                if(this.token.length === 0) {
                    this.$http.post(this.path + '/auth', {email: "test@mail.com", password: "test"})
                        .then(function (response) {
                            this.token = (response.data.data.token);
                            Vue.http.headers.common['Authorization'] = 'Bearer ' + this.token;
                            this.$http.post(this.path + '/company/settings', cSettings).then(function (response) {
                                location.reload();
                            });
                        });
                } else {
                    this.$http.post(this.path + '/company/settings', cSettings).then(function (response) {
                        location.reload();
                    });
                }
            },
            drawSettings: function () {
                this.$http.get(this.path + '/metadata/Settings').then(function (response) {
                    var multiOptions = {};
                    this.settingsMeta = response.data.data.settings;
                    $.each(response.data.data.settings.fields, function (index, value) {
                        if(value.multiple !== undefined)
                            multiOptions[index] = response.data.data.settings.enum[index];
                    });
                    this.multiSelectOptions = multiOptions;
                    this.getSettings();
                })
            }
        },
        mounted() {
            EventBus.$on('user-was-logged', this.getSettings);
        },
        created: function () {
            this.drawSettings();
        }
    });
};

function getId(array, id) {
    var obj = array.filter(function (val) {
        return val.id === id;
    });
    return obj[0];
}

function arrayColumn(array, columnName) {
    return array.map(function(value,index) {
        return value[columnName];
    })
}

setTimeout(function () {
    editSettings();
}, 200);
