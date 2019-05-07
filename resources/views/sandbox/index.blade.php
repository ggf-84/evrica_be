<?php
$subFolder = !empty($backend = config('app.public_sub_folder')) ? $backend . '/' : '';
?>

        <!DOCTYPE html>
<html lang="{{ config('app.locale') }}" xmlns:v-on="http://www.w3.org/1999/xhtml"
      xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <title>Sandbox</title>
    <link rel="stylesheet" href="{{ URL::asset($subFolder.'assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset($subFolder.'assets/css/jqx.base.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <link rel="stylesheet" href="{{ URL::asset('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://unpkg.com/vue-multiselect@2.0.0-beta.15/dist/vue-multiselect.min.css') }}">
    <link rel="stylesheet"
          href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
          href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet"
          href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css') }}">

    <link rel="stylesheet"
          href="{{ URL::asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons') }}">
    {{--<link rel="stylesheet" href="{{ URL::asset('https://unpkg.com/vuetify/dist/vuetify.min.css') }}">--}}
    <link rel="stylesheet"
          href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('https://lipis.github.io/bootstrap-social/bootstrap-social.css') }}">

    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('https://code.jquery.com/jquery-2.1.3.js') }}"></script>
    <script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js') }}"></script>

    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.3.4/vue-resource.js"></script>
    <script src="https://unpkg.com/vuetify/dist/vuetify.js"></script>
    <script src="https://dev.evrica.io:8085/socket.io/socket.io.js"></script>
    <script src="https://unpkg.com/vue-multiselect@2.0.0-beta.15/dist/vue-multiselect.min.js"></script>

    <script src="{{ URL::asset($subFolder.'assets/js/jqxcore.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/jqxbuttons.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/jqxscrollbar.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/jqxpanel.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/jqxtree.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/jqxdropdownbutton.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/jqxcheckbox.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/mydiag.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/myjs.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/bootstrap-confirmation.min.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/permissions.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/processManyToMany.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/settingsEditor.js') }}"></script>
    <script src="{{ URL::asset($subFolder.'assets/js/socketSandbox.js') }}"></script>
</head>
<body>
<div class="main-container">
    <div class="container-fluid">
        <div class="dropdown">
            {{--<button class="btn btn-default" id="showEditor">Editor</button>--}}

            <button type="button" id="showTree" class="btn btn-success">Open Windows</button>

            <button type="button" id="wLoad" class="btn btn-primary">Load</button>

            <button type="button" class="btn btn-info" id="addGroup" data-type="add"
                    data-toggle="modal" data-target="#addNewWindow">Add new
            </button>

            <button type="button" id="wEdit" class="btn btn-info" data-type="edit"
                    data-toggle="modal" data-target="#editWindow">Edit
            </button>

            <button type="button" class="btn btn-danger" id="wDelete"
                    data-toggle="modal" data-target="#deleteWindow">Delete
            </button>

            <div class="test-params">
                <input type="text" class="form-control input-param" id="addParams"
                       placeholder="params for test: ex(id=3&lang=en&type=window)">
                <button type="button" class="btn btn-warning" id="testParams">Test</button>
            </div>

            <div id="language_selector" style="display: inline-block;">
            </div>

            <div class="edit-settings-div" style="display: inline-block;">
                <button type="button" id="editSettings" class="btn btn-info" data-type="edit"
                        data-toggle="modal" data-target="#editSettingsModal"><span class="material-icons"
                                                                                   style="font-size: 16px;">settings</span>
                    Edit Settings
                </button>
            </div>

            <div id="loginDiv" class="login-div" style="display: inline-block;">
                <button type="button" id="loginBtn" class="btn btn-info " v-show="!logged" data-type="edit"
                        data-toggle="modal" data-target="#loginModal"> <span class="glyphicon glyphicon-log-in"></span>
                    User Login
                </button>
                <button type="button" id="openAuthModal" class="btn btn-info " data-toggle="modal" data-target="#authModal" v-show="!confirm">
                    <span class="glyphicon glyphicon-log-in"></span>
                    Soc Auth
                </button>
                <div v-show="confirm" style="position:absolute;top:8px;right:0;">@{{ confirmMessage }}</div>
                <a v-show="confirm" href="/backend/sandbox" class="btn btn-danger" >
                    <span class="glyphicon glyphicon-log-out"></span>
                    Soc LogOut
                </a>

                <div v-show="logged" style="position: absolute;top: -25px;right: 0;text-align: right;">
                    <h3 style="font-size: 19px"> Hello @{{ email }}</h3>
                    <button type="button" id="logOut" class="btn btn-danger" data-type="edit" @click="userLogout">
                        <span class="glyphicon glyphicon-log-out"></span>
                        User LogOut
                    </button>
                </div>

                <button type="button" id="openCounterpartsModal" class="btn btn-info " data-toggle="modal" data-target="#counterpartsModal">
                    <span class="glyphicon glyphicon-log-in"></span>
                    Counterparts
                </button>
            </div>

            <div>
                <div id='openWindows'>{!! $openWindows !!}</div>
            </div>

            <div class='window-back'>
                <span id="backToWindow"></span>
            </div>
        </div>

        <section class="section">
            <div class="code-editor">
                <div>
                    <div id="editor" class="main-ace-editor"></div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container-fluid section-main-w" style="margin:0 0 0 10px">
                <div id="mainmenu" style="width:300px"></div>
                <div id="mainwindow" class="main-window"><h3>Welcome to sandbox!!!</h3>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <div id="debug">
            <h3>Debug: (click me)</h3>
            <div>
                <div id="editor_d" class="debug-editor"></div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="editSettingsModal" tabindex="-1" role="dialog" aria-labelledby="addNewWindow"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <div id="settingsContent">
                        <h2 v-bind:style="{color: textColor}">Test setting text_color</h2>
                        <div v-for="(settingsGroup, settingsGroupName) in settingsMeta.groups">
                            <h3>Settings Group @{{settingsGroupName}}</h3>
                            <div v-for="settingName in settingsGroup">
                                <div >
                                    <label v-if="enableFields.includes(settingName)">@{{settingsMeta.fields[settingName].label}}:</label>
                                    <select v-if="(settingsMeta.fields[settingName].type === 'enum' &&
                                    settingsMeta.fields[settingName].multiple !== true) && enableFields.includes(settingName)"
                                            class="form-control" v-model="companySettings[settingName]">
                                        <option v-for="option in settingsMeta.enum[settingName]"
                                                :value="option.id">
                                            @{{option.value}}
                                        </option>
                                    </select>

                                    <multiselect
                                            v-if="settingsMeta.fields[settingName].multiple === true && enableFields.includes(settingName)"
                                            v-model="companySettings[settingName]"
                                            :options="multiSelectOptions[settingName]"
                                            :multiple="true"
                                            track-by="value"
                                            :custom-label="setLabel">
                                    </multiselect>

                                    <input type='text' v-if="settingsMeta.fields[settingName].type === 'text' && enableFields.includes(settingName)"
                                           class="form-control" v-model="companySettings[settingName]">
                                    <input type='checkbox'
                                           v-if="settingsMeta.fields[settingName].type === 'boolean' && enableFields.includes(settingName)"
                                           v-bind:true-value="1" v-bind:false-value="0"
                                           v-model="companySettings[settingName]">
                                </div>
                            </div>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div style="text-align: right">
                        <button class="btn btn-info" data-toggle="confirmation" data-title="Confirm settings!" v-on:click="saveSettings"
                                data-placement="top" id="saveSettings">Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header" style="padding:15px 20px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:20px 30px;">
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter email" v-model="userEmail">
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" class="form-control" id="psw" placeholder="Enter password" v-model="userPassword">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="" checked>Remember me</label>
                        </div>
                        <button class="btn btn-success btn-block" v-on:click="loginUser"><span class="glyphicon glyphicon-off"></span> Login</button>
                    <p style="color: red" v-show="errors"> @{{ errors }}</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="addNewWindow" tabindex="-1" role="dialog" aria-labelledby="addNewWindow" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <section>
                        <label for="">Select group</label>
                        <div id="newGroupButton" settings="dropDownButton">
                            <div style="border: none;" id='selectGroup'>{!! $newGroup !!}</div>
                        </div>
                    </section>
                    <section>
                        <div class="new-window-form">
                            <div class="col-xs-5 input-title" data->
                                <input type="text" class="form-control" id="createGroup" data-id
                                       placeholder="New group/subgroup name">
                            </div>

                            <div class="col-xs-5 input-title" data-title="Window name">
                                <input type="text" class="form-control" id="createWindowName" placeholder="Window name">
                            </div>

                            <div class="col-xs-5 input-title" data-title="Window min width">
                                <input type="text" class="form-control" id="createWindowMinWidth"
                                       placeholder="Window min width">
                            </div>

                            <div class="col-xs-5 input-title" data-title="Window max width">
                                <input type="text" class="form-control" id="createWindowMaxWidth"
                                       placeholder="Window max width">
                            </div>

                            <div class="col-xs-5 input-title" data-title="Window min height">
                                <input type="text" class="form-control" id="createWindowMinHeight"
                                       placeholder="Window min height">
                            </div>

                            <div class="col-xs-5 input-title" data-title="Window max height">
                                <input type="text" class="form-control" id="createWindowMaxHeight"
                                       placeholder="Window max height">
                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                    <section>
                        <div class="add-modal-ace-editor">
                            <div id class="ace-editor-add"></div>
                        </div>
                    </section>
                    <div style="text-align: right">
                        <button class="btn btn-info" data-toggle="confirmation"
                                data-title="Confirm to create new window!"
                                data-placement="top" id="saveGroup">Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editWindow" tabindex="-1" role="dialog" aria-labelledby="editWindow" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <section>
                        <label for="">Select window</label>
                        <div id="toEditButton">
                            <div style="border: none;" id='selectToEdit'>{!! $editGroup !!}</div>
                        </div>
                        <span class="show_err"></span>
                    </section>
                    <section>
                        <div class="new-window-form">
                            <div class="col-xs-5 input-title" data-title="Window name">
                                <input type="text" class="form-control" id="editWindowName" placeholder="Window name">
                            </div>

                            <div class="col-xs-5 ">
                                <input type="checkbox" id="publishedWindow" value="0" style="display: inline-block">
                                <label for="" class="publish-label">Publish Window</label>
                            </div>

                            <div class="col-xs-5 input-title" data-title="Window min width">
                                <input type="text" class="form-control" id="editWindowMinWidth"
                                       placeholder="Window min width">
                            </div>

                            <div class="col-xs-5 input-title" data-title="Window max width">
                                <input type="text" class="form-control" id="editWindowMaxWidth"
                                       placeholder="Window max width">
                            </div>

                            <div class="col-xs-5 input-title" data-title="Window min height">
                                <input type="text" class="form-control" id="editWindowMinHeight"
                                       placeholder="Window min height">
                            </div>

                            <div class="col-xs-5 input-title" data-title="Window max height">
                                <input type="text" class="form-control" id="editWindowMaxHeight"
                                       placeholder="Window max height">
                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                    <section>
                        <div class="edit-modal-ace-editor">
                            <div id class="ace-editor-edit"></div>
                        </div>
                    </section>
                    <div style="text-align: right">
                        <button class="btn btn-info" data-toggle="confirmation"
                                data-title="Confirm to edit this window!"
                                data-placement="top" id="saveEditWindow">Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteWindow" tabindex="-1" role="dialog" aria-labelledby="deleteWindow" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <label for="">Select window to delete &nbsp;&nbsp;&nbsp;<span class="show_err"></span></label>
                    <div>
                    </div>
                    <label class="checkbox-inline" style="cursor: pointer">
                        <input style="cursor: pointer" type="checkbox" id="checkToDelete" value="">Check/uncheck all
                    </label>
                    <div id='selectToDelete'>{!! $openWindows !!}</div>
                    <div style="text-align: right">
                        <button class="btn btn-info" data-toggle="confirmation"
                                data-title="Confirm to delete selected windows!"
                                data-placement="top" id="deleteWindowBtn">Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="user-modal-container modal fade" id="authModal" tabindex="-1"
                        role="dialog" aria-labelledby="authModal" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body auth-modal-container">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <div class="user-modal">
                    <ul class="form-switcher">
                        <li @click="flip('login', $event)" v-bind:style="[3, ''].includes(registerForm) ? 'width:100%' : ''">
                            <a href="" id="login-form">Login</a>
                        </li>
                        <li @click="flip('register-confirmed', $event)" v-if="[1].includes(registerForm)"><a href="" id="register-form">Register</a></li>
                        <li @click="flip('register-not-confirmed', $event)" v-if="[2].includes(registerForm)"><a href="" id="register-form">Register</a></li>
                    </ul>

                    <div class="form-register" :class="{ 'active': active == 'register-confirmed' }" id="form-register-confirmed">
                        <div class="error-message" v-show="confirm">@{{ errorMsg }}</div>
                        <input type="text" name="firstname" placeholder="First Name" v-model="registerFirstName" @keyup.enter="submit('register-confirmed', $event)">
                        <input type="text" name="lastname" placeholder="Last Name" v-model="registerLastName" @keyup.enter="submit('register-confirmed', $event)">
                        <input type="email" name="email" placeholder="Email" v-model="registerEmail" @keyup.enter="submit('register-confirmed', $event)">
                        <input type="password" name="password" placeholder="Password" v-model="registerPassword" @keyup.enter="submit('register-confirmed', $event)">
                        <input type="submit" @click="submit('register-confirmed', $event)" v-model="registerSubmit" id="registerSubmit">
                        <div class="text-center social-login">
                            <a v-bind:href="'{{ url('/backend/api/login') }}/' + socialButton.value"
                               v-for="socialButton in socialButtons" class="btn" v-bind:class="'btn-' + socialButton.value">
                                Sign in with @{{ socialButton.value }}
                            </a>
                        </div>
                        <div class="links"> <a href="" @click="flip('login', $event)">Already have an account?</a></div>
                    </div>

                    <div class="form-register" :class="{ 'active': active == 'register-not-confirmed' }" id="form-register-not-confirmed">
                        <div class="error-message" v-show="confirm">@{{ errorMsg }}</div>
                        <input type="text" name="firstname" placeholder="First Name" v-model="registerFirstName" @keyup.enter="submit('register-not-confirmed', $event)">
                        <input type="text" name="lastname" placeholder="Last Name" v-model="registerLastName" @keyup.enter="submit('register-not-confirmed', $event)">
                        <input type="email" name="email" placeholder="Email" v-model="registerEmail" @keyup.enter="submit('register-not-confirmed', $event)">
                        <input type="submit"  @click="submit('register-not-confirmed', $event)" v-model="registerSubmit" id="registerSubmit">
                        <div class="text-center social-login">
                            <a v-bind:href="'{{ url('/backend/api/login') }}/' + socialButton.value"
                               v-for="socialButton in socialButtons" class="btn" v-bind:class="'btn-' + socialButton.value">
                                Sign in with @{{ socialButton.value }}
                            </a>
                        </div>
                        <div class="links"> <a href="" @click="flip('login', $event)">Already have an account?</a></div>
                    </div>

                    <div class="form-login" :class="{ 'active': active == 'login' }" id="form-login">
                        <div class="error-message" v-show="confirm">@{{ errorMsg }}</div>
                        <input type="text" name="email" placeholder="Email" v-model="loginEmail" @keyup.enter="submit('login', $event)">
                        <input type="password" name="password" placeholder="Password" v-model="loginPassword" @keyup.enter="submit('login', $event)">
                        <input type="submit"  @click="submit('login', $event)" v-model="loginSubmit" id="loginSubmit">
                        <div class="text-center social-login">
                            <a v-bind:href="'{{ url('/backend/api/login') }}/' + socialButton.value" v-for="socialButton in socialButtons" class="btn" v-bind:class="'btn-' + socialButton.value">
                                Sign in with @{{ socialButton.value }}
                            </a>
                        </div>
                        <div class="links"> <a href="" @click="flip('password', $event)">Forgot your password?</a></div>
                    </div>

                    <div class="form-password" :class="{ 'active': active == 'password' }" id="form-password">
                        <div class="error-message" v-show="confirm">@{{ errorMsg }}</div>
                        <input type="text" name="email" placeholder="Email" v-model="passwordEmail" @keyup.enter="submit('password', $event)">
                        <input type="submit" @click="submit('password', $event)" v-model="passwordSubmit" id="passwordSubmit">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="counterpartsModal" tabindex="-1" role="dialog" aria-labelledby="counterpartsModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <label for="">Counterparts</label>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Activation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <tr v-for="counterpart in counterparts" style="width: 100%" v-if="counterpart.auth_id === 0">
                        <td>@{{ counterpart.firstname }}</td>
                        <td>@{{ counterpart.lastname }}</td>
                        <td>@{{ counterpart.email }}</td>
                        <td>
                            <input type="submit" @click="activate(counterpart.id,counterpart.email)"
                                   v-model="activateCounterpart" class="counterparts-list activate-counterpart">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
