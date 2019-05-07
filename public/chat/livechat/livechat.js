/** 
 * Older version of livechat
 * v.01
 * 
 */

const protocol = location.protocol
const locationPath = (protocol === 'http:') ? 'http://evrica.local/chat/livechat/' : 'https://dev.evrica.io/chat/livechat/'
const chatPrefix = 'evrica'
const chatWidth = '420px'
const chatHeight = '600px'
const cssPath = locationPath + 'style.css'
const jsPath = locationPath + 'chatFrame.js'
const cdnVueJS = 'https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js'
const cdnSocketIO = 'https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.0/socket.io.js'
const cdnFA = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
const scriptName = 'livechat.js'
const chatJS = locationPath + 'chat.js'

var socket
    socket = io.connect('ws://localhost:8181');



var vm = new Vue({
    el: '#app',
    mounted: function () {
        this.initChat()
    },

    methods: {
        initChat: function () {
            let parameters = getParams(scriptName)
            if (typeof parameters.key !== 'undefined') {
                // set chat key
                setCookie(chatPrefix + 'liveChat', parameters.key, 14)
                if (typeof parameters.lang !== 'undefined') {
                    setCookie(chatPrefix + 'liveChatLang', parameters.lang, 14)
                }
                // create iframe
                createChatIFrame()
                // create main container
                let chatContainer = document.createElement('div')
                chatContainer.setAttribute('class', chatPrefix + 'chat-container')
                chatContainer.setAttribute('id', chatPrefix + 'chat-container')
                chatContainer.setAttribute('ref', chatPrefix + 'chatcontainer')
                // page html

                chatContainer.innerHTML = `
                
                            <div id="live-chat">

                <header class="clearfix" @click="headerClicked" id="chat-header">


                <h4>We are currently {{showOfflineText}}</h4>

                <span class="chat-message-counter">{{unreads}}</span>

                </header>

                <div class="chat">

                <div class="chat-history" ref="messagesContainer">

                <div v-if="showOffline === false">
                <div>We are currently offline , write us an email</div>
                <input type="text" placeholder="Your name">
                <input type="email" placeholder="Your email">
                <input type="text" placeholder="Your question">
                <br><button>OK</button>
                </div>
                <div v-else>
                <div v-if="roomStatus">You are connected</div>
                <div v-if="messages.length === 0">Do you have a question ?</div>
                    </div>

                    <div v-for="(message,index) in messages" :key="index" class="box">


                
                    <!-- agent box -->
                    <div v-if="message.user !== null">
                    <div class="chat-message clearfix">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpzD-cx0s1md7QU92v0ZDJWCiIKfQ8HWxIiI76o5APPy11ilZ6bA" alt="" width="32" height="32">
                    <div class="chat-message-content clearfix">
                        <span class="chat-time">{{formatDate(message.created_at)}}</span>
                        <h5>{{message.user.firstname}} {{message.user.lastname}}</h5>
                        <p v-html="message.message" class="message-data"></p>



                        <!-- img or file display -->
                        <span v-if="message.files.length >= 1" class="data-files">
                            <span v-for="(file,index) in message.files" :key="index">
                                <div v-if="file.thumbnail !== 'default.png' || file.extension === 'gif'">
                        
                                    <a :href="getFileUrl(file.name)" class="ref-link" target="_blank">
                                        <div class="thumb-message" :style="{ 'background-image': 'url(' + getFileUrl(file.name) + ')' }" v-if="file.extension === 'gif'"></div>
                                        <div class="thumb-message" :style="{ 'background-image': 'url(' + getThumbnailUrl(file.thumbnail) + ')' }" v-else></div>
                                    </a>
                        
                                    <span class="name-size">
                                    
                                            <a :href="getFileDownloadUrl(file.name,file.original_name)" :download="file.original_name" >
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

                    <!-- guest box -->
                    <div v-else>
                    <div class="chat-message clearfix">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpzD-cx0s1md7QU92v0ZDJWCiIKfQ8HWxIiI76o5APPy11ilZ6bA" alt="" width="32" height="32">
                    <div class="chat-message-content clearfix">
                        <span class="chat-time">{{formatDate(message.created_at)}}</span>
                        <h5 v-if="message.guest !== null && message.guest.name !== null">{{message.guest.name}}</h5>
                        <h5 v-else>Guest #{{message.guest.id}}</h5>
                        <p v-html="message.message" class="message-data"></p>


                        <!-- img or file display -->
                        <span v-if="message.files.length >= 1" class="data-files">
                            <span v-for="(file,index) in message.files" :key="index">
                                <div v-if="file.thumbnail !== 'default.png' || file.extension === 'gif'">
                        
                                    <a :href="getFileUrl(file.name)" class="ref-link" target="_blank">
                                        <div class="thumb-message" :style="{ 'background-image': 'url(' + getFileUrl(file.name) + ')' }" v-if="file.extension === 'gif'"></div>
                                        <div class="thumb-message" :style="{ 'background-image': 'url(' + getThumbnailUrl(file.thumbnail) + ')' }" v-else></div>
                                    </a>
                        
                                    <span class="name-size">
                                    
                                            <a :href="getFileDownloadUrl(file.name,file.original_name)" :download="file.original_name" >
                                                <span class="shorten-filename">{{file.original_name}}</span>
                                            </a> 

                        
                                        {{file.size}}
                                    </span>
                        
                                </div>
                                <div v-else>
                                    <a :href="getFileDownloadUrl(file.name,file.original_name)" :download="file.original_name" >
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


                    <fieldset>
                    <input type="text" placeholder="Type your message…" autofocus v-model="messageInput" @keyup.enter="sendMessage" class="msgInput">
                    
                    <span>

                    <form id="upload" enctype="multipart/form-data" ref="formUpload">
                        <input type="file" name="files[]" class="input-file" ref="inputFile" @change="fileSelected($event)" multiple>
                        <input type="submit">
                    </form>

                    <button type="button" class="btn-send" @click.prevent="uploadFile()" alt="unavailable"><i class="fa fa-file"></i></button>
                  </span>


                    </fieldset>

                </div>
                <!-- end chat -->

            </div>
            <!-- end live-chat -->
                `;


                addChildIFrame(chatContainer)
                // add css to iframe
                let cssElementFA = getCssElement(cdnFA)
                addChildIFrame(cssElementFA)
                // add css to iframe
                let cssElement = getCssElement(cssPath)
                addChildIFrame(cssElement)
                // vue js cdn
                let jsElementVue = getJsElement(cdnVueJS)
                addChildIFrame(jsElementVue)
        
                // socket io js cdn
                let jsElementSocket = getJsElement(cdnSocketIO)
                addChildIFrame(jsElementSocket)
                // add js to iframe
                let jsElement = getJsElement(jsPath)
                addChildIFrame(jsElement)
        
            } else {
                console.log(" - KEY NOT FOUND - ")
            }


        }
    }
})


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
