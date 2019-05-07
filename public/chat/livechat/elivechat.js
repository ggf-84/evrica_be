
const protocol = location.protocol
const locationPath = (protocol === 'http:' || protocol === 'about:') ? 'http://evrica.local/chat/livechat/' : 'https://dev.evrica.io/backend/public/chat/livechat/'
const chatPrefix = 'evrica'
const chatWidth = '420px'
const chatHeight = '600px'
const cssPath = locationPath + 'style.css'
const jsPath = locationPath + 'const.js'
const VueJsPath = locationPath + 'vue.js'
const emojiJsPath = locationPath + 'emoji.js'

const cdnVueJS = 'https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js'
const cdnSocketIO = 'https://dev.evrica.io:8085/socket.io/socket.io.js'
const scriptName = 'elivechat.js'


initChat()

function initChat (){
            let parameters = getParams(scriptName)
            if (typeof parameters.key !== 'undefined') {
                // set chat key
                setCookie(chatPrefix + 'liveChat', parameters.key, 14)
                // check if chat lang cookie is set
                if (typeof parameters.lang !== 'undefined') {
                    setCookie(chatPrefix + 'liveChatLang', parameters.lang, 14)
                }
                // check if chat audio will be played
                if (typeof parameters.audio !== 'undefined') {
                    setCookie(chatPrefix + 'liveChatAudio', parameters.audio, 14)
                }
                // create iframe
                createChatIFrame()


                addHTMLIFrame(`
                <div id="evricachat-container" class="evricachat-container" ref="evricachat-container">
                <template>
                    <div id="live-chat">
            
                        <header class="clearfix" @click="headerClicked" id="chat-header">
            
                            <h4 ><span v-bind:class="{'dot-offline':(showOffline === false), 'dot-online':(showOffline === true )}"></span>
                            <span v-if="showOffline === false">
                                {{getTranslationByKey('statusChatOffline')}}
                            </span>
                            <span v-else>
                            {{getTranslationByKey('statusChatOnline')}}
                            </span>
                            </h4>
            
                            <span class="chat-message-counter">{{unreads}}</span>
            
                        </header>
            
                        <div class="chat">

                            <div class="chat-history" ref="messagesContainer">
                                <div v-if="showOffline === false">

                                    <div v-if="sentQuestion === false">
                                    <div>{{getTranslationByKey('statusOfflineEmail')}}</div>

                                    <div v-if="currentGuestData.name === null">
                                    <span class="label-input">{{getTranslationByKey('inputNamePlaceholder')}}</span>
                                    <input type="text" :placeholder="getTranslationByKey('inputNamePlaceholder')" required v-model="name">
                                    <div class="validate-msg">{{nameValidate}}</div>
                                    </div>

                                    <div v-if="currentGuestData.email === null">
                                    <span class="label-input">{{getTranslationByKey('inputEmailPlaceholder')}}</span>
                                    <input type="email" :placeholder="getTranslationByKey('inputEmailPlaceholder')" required v-model="email">
                                    <div class="validate-msg">{{emailValidate}}</div>
                                    </div>
                                    
                                    <span class="label-input">{{getTranslationByKey('inputQuestionPlaceholder')}}</span>
                                    <input type="text" :placeholder="getTranslationByKey('inputQuestionPlaceholder')" required v-model="question" @keyup.enter="sendQuestion">
                                    <div class="validate-msg">{{questionValidate}}</div>
                                    
                                    <button class="btn-form-offline" @click="sendQuestion"><i class="fa fa-check-circle"></i></button>
                                    </div>
                                    <div v-else>
                                    {{getTranslationByKey('questionSent')}}
                                    </div>
                                
                                
                                
                                </div>
                                
                                <div v-else>
                                    <div v-if="messages.length === 0" class="initDialogBox">{{getTranslationByKey('initDialogQuestion')}}</div>
                                </div>
            
                                <div v-for="(message,index) in messages" :key="index" class="box" v-if="showOffline">

                                
                                    <!-- agent box -->
                                    <div v-if="message.user !== null">
                                        <div class="chat-message clearfix">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpzD-cx0s1md7QU92v0ZDJWCiIKfQ8HWxIiI76o5APPy11ilZ6bA" alt=""
                                                width="32" height="32">
                                            <div class="chat-message-content clearfix">
                                                <span class="chat-time">{{formatDate(message.created_at)}}</span>
                                                <h5>{{message.user.firstname}} {{message.user.lastname}}
                                                <span v-if="parseInt(message.is_edited) === 1">* {{getTranslationByKey('edited')}}</span>
                                                </h5>
                                                <p v-html="parseMessage(message.message)" class="message-data"></p>
            
            
            
                                                <!-- img or file display -->
                                                <span v-if="message.files.length >= 1" class="data-files">
                                                    <span v-for="(file,index) in message.files" :key="index">
                                                        <div v-if="file.thumbnail !== 'default.png' || file.extension === 'gif'">
            
                                                            <a :href="getFileUrl(file.name)" class="ref-link" target="_blank">
                                                                <div class="thumb-message" :style="{ 'background-image': 'url(' + getFileUrl(file.name) + ')' }" v-if="file.extension === 'gif'"></div>
                                                                <div class="thumb-message" :style="{ 'background-image': 'url(' + getThumbnailUrl(file.thumbnail) + ')' }" v-else></div>
                                                            </a>
            
                                                            <span class="name-size">
            
                                                                <a :href="getFileDownloadUrl(file.name,file.original_name)" :download="file.original_name">
                                                                    <span class="shorten-filename">{{file.original_name}}</span>
                                                                </a>
            
            
                                                                {{file.size}}
                                                            </span>
            
                                                        </div>
                                                        <div v-else>
                                                            <a :href="getFileUrl(file.name)" :download="file.original_name" target="_blank">
                                                                <span class="shorten-filename">{{file.original_name}}</span>
                                                            </a>
                                                            {{file.size}}
                                                        </div>
            
                                                    </span>
                                                </span>
            
            
            
                                            </div>
                                            <!-- end chat-message-content -->
                                        </div>
                                        <!-- end chat-message -->
                                        <hr>
                                    </div>

                                    </transition>
            
                                    <!-- guest box -->
                                    <div v-else>
                                        <div class="chat-message clearfix">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpzD-cx0s1md7QU92v0ZDJWCiIKfQ8HWxIiI76o5APPy11ilZ6bA" alt=""
                                                width="32" height="32">
                                            <div class="chat-message-content clearfix">
                                                <span class="chat-time">{{formatDate(message.created_at)}}</span>
                                                <h5 v-if="message.guest !== null && message.guest.name !== null">{{message.guest.name}}</h5>
                                                <h5 v-else>Guest #{{message.guest.id}}</h5>
                                                <p v-html="parseMessage(message.message)" class="message-data"></p>
            
            
                                                <!-- img or file display -->
                                                <span v-if="message.files.length >= 1" class="data-files">
                                                    <span v-for="(file,index) in message.files" :key="index">
                                                        <div v-if="file.thumbnail !== 'default.png' || file.extension === 'gif'">
            
                                                            <a :href="getFileUrl(file.name)" class="ref-link" target="_blank">
                                                                <div class="thumb-message" :style="{ 'background-image': 'url(' + getFileUrl(file.name) + ')' }" v-if="file.extension === 'gif'"></div>
                                                                <div class="thumb-message" :style="{ 'background-image': 'url(' + getThumbnailUrl(file.thumbnail) + ')' }" v-else></div>
                                                            </a>
            
                                                            <span class="name-size">
            
                                                                <a :href="getFileDownloadUrl(file.name,file.original_name)" :download="file.original_name">
                                                                    <span class="shorten-filename">{{file.original_name}}</span>
                                                                </a>
            
            
                                                                {{file.size}}
                                                            </span>
            
                                                        </div>
                                                        <div v-else>
                                                            <a :href="getFileDownloadUrl(file.name,file.original_name)" :download="file.original_name">
                                                                <span class="shorten-filename">{{file.original_name}}</span>
                                                            </a>
                                                            {{file.size}}
                                                        </div>
            
                                                    </span>
                                                </span>
            
            
                                            </div>
                                            <!-- end chat-message-content -->
                                        </div>
                                        <!-- end chat-message -->
                                        <hr>
                                    </div>
            
                                    <span v-if="index === lastIndex" ref="lastMessageScroll" id="lastMessageScroll"></span>
            
            
                                </div>
            
                            </div>
                            <!-- end chat-history -->
            
                            <span class="chat-feedback">
                                <transition name="fade">
                                    dsads
                                    <span v-if="isTyping">
                                        {{typingMessage}}
                                    </span>
                                </transition>
                            </span>
            
                            <fieldset v-if="showOffline">
                <input type="text" :placeholder="getTranslationByKey('inputMessagePlaceholder')" autofocus v-model="messageInput" @keyup.enter="sendMessage" class="msgInput" ref="messageInput">
            
                                <span>
                
                        <form id="upload" enctype="multipart/form-data" ref="formUpload">
                            <input type="file" name="files[]" class="input-file" ref="inputFile" multiple @change="fileSelected($event)">
                            <input type="submit">
                        </form>

                          <!--  <form
                            id="testForm"
                            action="//localhost:3000/upload"
                            method="post"
                            enctype="multipart/form-data"
                            >
                            <input type="file" name="file" multiple><br>
                            <input type="submit">
                            </form> -->
            
                                    <button type="button" class="btn-send" @click.prevent="uploadFile()" alt="unavailable">
                                        <i class="fa fa-file"></i>
                                    </button>

                                    <transition name="fade">
                                        <div class="emojiPicker" v-if="showEmojiPicker">
                                            <span v-for="(emoji,index) in emojiList" :key="index">
                                                <span v-html="emoji" @click="selectEmoji(index)"></span>
                                            </span>
                                            <span v-for="(emojiCustom,index) in customEmojis" :key="index">
                                                <span @click="selectEmoji(index,true)">
                                                    <i class="em emojiLive" :style="{ 'background-image': 'url(' + getCustomEmoji(index) + ')' }"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </transition>
                                    
                                    <button type="button" class="btn-send" alt="unavailable" @click="showHideEmojiPicker">
                                        :)
                                    </button>
                                </span>
            
            
                            </fieldset>
            
                        </div>
                        <!-- end chat -->
            
                    </div>
                    <!-- end live-chat -->
                </template>
            </div>
            

            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="`+cssPath+`">

            <!-- <script src="https://cdn.rawgit.com/showdownjs/showdown/1.8.6/dist/showdown.min.js"></script> -->
            <scr`+`ipt type="text/javascript" src="`+emojiJsPath+`"></scr`+`ipt>
            <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
            
            <scr`+`ipt type="text/javascript" src="https://dev.evrica.io:8085/socket.io/socket.io.js"></scr`+`ipt>                
            <scr`+`ipt type="text/javascript" src="`+VueJsPath+`"></scr`+`ipt>
            <scr`+`ipt type="text/javascript" src="`+jsPath+`"></scr`+`ipt>
    

                `);

            } else {
                console.log(" - KEY NOT FOUND - ")
            }


        }


/** 
 * Apped to iframe html
 */
function addHTMLIFrame(element) {
 /*   let iframe = document.getElementById(chatPrefix + 'iframe')
    let iframeDocument = iframe.contentDocument || iframe.contentWindow.document
    iframeDocument.body.innerHTML = element
*/

    var e = document.getElementById(chatPrefix + 'iframe'),
    s = e.document;
    e.contentDocument ? s = e.contentDocument : e.contentWindow && (s = e.contentWindow.document), s && (s.open(),
    s.writeln(element),
    s.close())

}

/** 
 * Apped to iframe html
 */
function addChildIFrame(element) {
    let iframe = document.getElementById(chatPrefix + 'iframe')
    let iframeDocument = iframe.contentDocument || iframe.contentWindow.document
    iframeDocument.body.appendChild(element);
}

/** 
 * Apped to iframe html
 */
function addChildIFrameElement(to, element) {
    let iframe = document.getElementById(chatPrefix + 'iframe')
    let iframeDocument = iframe.contentDocument || iframe.contentWindow.document
    let el = iframeDocument.getElementById(to)
}

/** 
 * Create chat iframe where everything will display
 */
function createChatIFrame() {
    var ifrm = document.createElement("iframe");
    ifrm.id = chatPrefix + 'iframe'
    ifrm.style.width = chatWidth
    ifrm.style.height = chatHeight
    ifrm.style.position = 'absolute'
    ifrm.style.left = '30px'
    ifrm.style.bottom = 0
    ifrm.setAttribute('frameborder', 0)
    ifrm.setAttribute('scrolling', 'no')
    // ifrm.setAttribute('onload','resizeIframe(this)')
    document.body.appendChild(ifrm);
}

/**
 * 
 * @param {*} jsFilePath 
 */
function includeJs(jsFilePath) {
    var js = document.createElement("script");

    js.type = "text/javascript";
    js.src = jsFilePath;

    document.body.appendChild(js);
}

/**
 * 
 * @param {*} cssFilePath 
 */
function includeCss(cssFilePath) {
    var css = document.createElement("link");

    css.type = "text/css";
    css.href = cssFilePath;

    document.body.appendChild(css);
}

function getCssElement(path) {
    var css = document.createElement("link");

    css.rel = "stylesheet"
    css.type = "text/css"
    css.href = path

    return css
}

function getJsElement(path) {
    var js = document.createElement("script");

    js.type = "text/javascript";
    js.src = path

    return js
}

// Extract "GET" parameters from a JS include querystring
function getParams(script_name) {
    // Find all script tags
    var scripts = document.getElementsByTagName("script");

    // Look through them trying to find ourselves
    for (var i = 0; i < scripts.length; i++) {
        if (scripts[i].src.indexOf("/" + script_name) > -1) {
            // Get an array of key=value strings of params
            var pa = scripts[i].src.split("?").pop().split("&");

            // Split each key=value into array, the construct js object
            var p = {};
            for (var j = 0; j < pa.length; j++) {
                var kv = pa[j].split("=");
                p[kv[0]] = kv[1];
            }
            return p;
        }
    }

    // No scripts match
    return {};
}


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function resizeIframe(obj) {
    obj.style.height = 0;
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
}

function resizeIFrameToFitContent(iFrame) {

    iFrame.width = iFrame.contentWindow.document.body.scrollWidth;
    iFrame.height = iFrame.contentWindow.document.body.scrollHeight;
}
