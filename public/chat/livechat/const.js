
const protocol = location.protocol
const locationPath = (protocol === 'http:' || protocol === 'about:') ? 'http://evrica.local/chat/livechat/' : 'https://dev.evrica.io/chat/livechat/'
const chatPrefix = 'evrica'
const mainContainer = '#' + chatPrefix + 'chat-container'

const wsURL = (protocol === 'http:' || protocol === 'about:') ? 'ws://localhost:8181' : 'wss://dev.evrica.io:8085'

let urlPath = (protocol === 'http:' || protocol === 'about:') ? 'http://evrica.local/' : 'https://dev.evrica.io/'

var chatFilesUploadPath = urlPath + 'backend/api/livechat/message/upload'
var getSocketID = ''
var currentRoomData = null


const chatFilesPath = urlPath + 'backend/livechat/file'
const chatFilesThumbnailPath = urlPath + 'backend/livechat/thumbnail/file'
const emojiThumbnailPath = urlPath + 'backend/livechat/emoji'

const audioNotify = locationPath + 'audio_notify.mp3'

var questionWasSent = false
var disabledClicks = false

new Vue({
    el: mainContainer,

    data: {
        emojiList: {
            ':face_with_finger_covering_closed_lips:': '<i class="em em-face_with_finger_covering_closed_lips emojiLive"></i>',
            ':earth_americas:': '<i class="em em-earth_americas emojiLive"></i>',
            ':face_with_one_eyebrow_raised:': '<i class="em em-face_with_one_eyebrow_raised emojiLive"></i>',
            ':face_with_rolling_eyes:': '<i class="em em-face_with_rolling_eyes emojiLive"></i>',
            ':face_with_monocle:': '<i class="em em-face_with_monocle emojiLive"></i>',
            ':fist:': '<i class="em em-fist emojiLive"></i>',
            ':drooling_face:': '<i class="em em-drooling_face emojiLive"></i>',
            ':copyright:': '<i class="em em-copyright emojiLive"></i>',
            ':boy:': '<i class="em em-boy emojiLive"></i>',
            ':boxing_glove:': '<i class="em em-boxing_glove emojiLive"></i>',
            ':confused:': '<i class="em em-confused emojiLive"></i>',
            ':blush:': '<i class="em em-blush emojiLive"></i>'

        },
        customEmojis: {},
        requiredTranslations: {
            'statusChatOffline': 'We are currently offline',
            'statusChatOnline': 'We are currently online',
            'inputMessagePlaceholder': 'Type a message here',
            'inputNamePlaceholder': 'Your name',
            'inputEmailPlaceholder': 'Your email',
            'inputQuestionPlaceholder': 'Your question',
            'statusOfflineEmail': 'We are currently offline , write us an email',
            'questionSent': 'Question was successfully sent',
            'initDialogQuestion': 'Hello , do you have any questions ?',
            'requiredFieldText': 'This field is required',
            'invalidEmailText': 'Email is not valid',
            'edited': 'Edited'
        },
        translations: null,
        showEmojiPicker: false,
        email: '',
        name: '',
        question: '',
        emailValidate: '',
        nameValidate: '',
        questionValidate: '',
        sentQuestion: false,
        message: 'You loaded this page on ' + new Date().toLocaleString(),
        showOffline: true,
        chatFilesUploadPath: chatFilesUploadPath,
        showOfflineText: '',
        chatFilesPath: chatFilesPath,
        chatFilesThumbnailPath: chatFilesThumbnailPath,
        emojiThumbnailPath: emojiThumbnailPath,
        messages: [],
        currentRoomsPage: 1,
        currentRoomsLimit: 5,
        rooms: [],
        currentGuestData: [],
        currentRoomData: [],
        currentAgentData: [],
        currentMessagesPage: 1,
        currentMessagesLimit: 10,
        currentRoomID: 0,
        roomStatus: false,
        messageInput: '',
        typingMessage: '',
        isTyping: false,
        typingTimer: 1000,
        lastTypingTime: null,
        inputLength: 0,
        isExpanded: false,
        unreads: 0,
        lastScrollMessages: false,
        pageHeightMessages: 0,
        messagesTop: false,
        loadingMoreMessages: false,
        lastIndex: 0,
        fileList: [],
        getSocket: '',
        isPlaying: false,
        audioNotify: audioNotify,
        playAudio: false,
        events: {
            disconnect: function (dataMessage, self) {
                let message = dataMessage.message
                disabledClicks = true
                self.requiredTranslations.statusChatOffline = message
                alert('[LIVECHAT] : ' + message)
            },
            editMessage: function (dataMessage, self) {

                if (typeof dataMessage.message !== 'undefined') {
                    // get element
                    var element = dataMessage.message
                    // find and edit message
                    self.messages.forEach(function (e, i) {
                        if (parseInt(e.id) === parseInt(element.message.id)) {
                            e.message = element.message.message
                            e.is_edited = element.message.is_edited
                        }
                    })

                }
            },
            deleteMessage: function (dataMessage, self) {

                if (typeof dataMessage.message !== 'undefined') {
                    // get element
                    var element = dataMessage.message
                    // init index
                    var index = 0
                    // find message
                    self.messages.forEach(function (e, i) {
                        if (parseInt(e.id) === parseInt(element.message.id)) {
                            index = i
                        }
                    })
                    // check if index is correct
                    if(index !== 0 && index !== -1){
                        self.$delete(self.messages, index)
                    }

                }
            },
            authGuest: function (dataMessage, self) {
                self.sendSocketMessage('getLiveChatStatus', '')
                self.sendSocketMessage('getGuestRoom', '')
                self.sendSocketMessage('socketConnected', '')
                self.translations = dataMessage.translations
                self.customEmojis = dataMessage.emojis
            },
            joinRoomChat: function (dataMessage, self) {
                self.currentAgentData = dataMessage.message.user
            },
            getGuestRoomMessages: function (dataMessage, self) {
                if (dataMessage.message.length > 0) {
                    self.displayMessages(dataMessage.message)
                    self.currentMessagesPage++
                }
            },
            sendQuestion: function (dataMessage, self) {
                if (dataMessage.message) {
                    self.sentQuestion = dataMessage.message
                    changeHeightBox(50)
                    questionWasSent = true
                } else {
                    alert("Can't send question")
                }
            },
            getLiveChatStatus: function (dataMessage, self) {
                let old = self.showOffline
                self.showOffline = dataMessage.message
                questionWasSent = false
                if(old === false && self.showOffline === true){
                    var selfS = self
                    self.$nextTick(function () {
                        var container = selfS.$refs.messagesContainer
                        container.scrollTop = container.scrollHeight
                    })
                }
            },
            sendGuestRoomMessages: function (dataMessage, self) {
                self.loadingMoreMessages = false
                self.displayMessages(dataMessage.message)
            },
            sendMessageRoom: function (dataMessage, self) {
                if(self.playAudio) {
                    self.playSoundUrl(self.audioNotify)
                }
                self.displayMessages(dataMessage.message.message)
                if (!self.isExpanded) {
                    self.unreads = parseInt(self.unreads + 1)
                    if (self.unreads > 99) {
                        self.unreads = 99
                    }
                } else {
                    self.unreads = 0
                }
            },
            userIsTyping: function (dataMessage, self) {
                let message = dataMessage.message
                let makeMessage = ''
                if (message.user.firstname != null) {
                    makeMessage = message.user.firstname
                } else {
                    makeMessage = 'Someone'
                }
                makeMessage += message.message

                self.typingMessage = makeMessage

                self.isTyping = true


                self.lastTypingTime = (new Date()).getTime();

                var thisEl = self

                setTimeout(function () {
                    var typingTimer = (new Date()).getTime();
                    var timeDiff = typingTimer - thisEl.lastTypingTime;
                    if (timeDiff >= thisEl.typingTimer && thisEl.isTyping) {
                        thisEl.isTyping = false;
                    }
                }, thisEl.typingTimer);

            },
            getGuestRoom: function (dataMessage, self) {
                self.currentRoomData = dataMessage.message
                if (typeof self.currentRoomData.id !== 'undefined') {
                    currentRoomData = self.currentRoomData
                    self.roomStatus = true
                    self.currentGuestData = self.currentRoomData.guest
                    self.currentRoomID = parseInt(self.currentRoomData.id)
                    currentRoomID = self.currentRoomID
                    self.unreads = parseInt(self.currentRoomData.unread)
                    let data = { room: self.currentRoomData, page: self.currentMessagesPage, limit: self.currentMessagesLimit }
                    self.sendSocketMessage('getGuestRoomMessages', data)
                }
            },
            socketConnected: function (dataMessage, self) {
                changeHeightBox(395)
                self.sendSocketMessage('getLiveChatStatus', '')
            },
            onDisconnect: function (dataMessage, self) {
                self.sendSocketMessage('getLiveChatStatus', '')
            }
        }
    },
    components: {

    },
    updated: function () {
        // listen scroll messages
        let windowMessages = this.$refs.messagesContainer
        if (windowMessages) {
            var self = this
            windowMessages.addEventListener('scroll', () => {
                this.messagesTop = this.bottomMessagesVisible()
                if (this.messagesTop) {

                    if (this.currentRoomID !== 0) {
                        this.loadingMoreMessages = true
                        this.loadMessages()
                    }

                    this.$nextTick(function () {

                        var container = self.$refs.messagesContainer

                        container.scrollTo(0, 0)

                    })

                }
            })
        }
    },
    watch: {
        showOffline: function (val) {
            if (val) {
                this.showOfflineText = 'online'
            } else {
                this.showOfflineText = 'offline'
            }
        },
        messageInput: function (val, old) {
            if (this.currentRoomID !== 0) {
                this.inputLength++
                if (this.inputLength > 8) {

                    let data = {
                        roomID: this.currentRoomID
                    }

                    this.sendSocketMessage('guestIsTyping', data)

                    this.inputLength = 0
                }
            }
        }
    },
    created: function () {
        let audio = getCookie(chatPrefix + 'liveChatAudio')
        if(parseInt(audio) === 1 || parseInt(audio) === 0) {
            let audioData = parseInt(audio)
            this.playAudio = (audioData === 1) ? true : false
        } else {
            this.playAudio = false
        }
    },
    mounted: function () {

        this.showOffline = false

        try {
            socket = io.connect(wsURL);
        } catch (e) {
            console.log(e)
            this.showOffline = true
        }


        if (typeof socket !== 'undefined') {

            socket.on('message', function (message) {
                this.onMessage(message);
            }.bind(this))

            socket.on('connect', function (message) {
                var connection = getCookie(chatPrefix + 'chat');
                // set cookie
                setCookie(chatPrefix + 'chat', socket.id, 14)

                // get user data

                navigator.sayswho = (function () {
                    var ua = navigator.userAgent, tem,
                        M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
                    if (/trident/i.test(M[1])) {
                        tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
                        return 'IE ' + (tem[1] || '');
                    }
                    if (M[1] === 'Chrome') {
                        tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
                        if (tem != null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
                    }
                    M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
                    if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
                    return M.join(' ');
                })();


                var OSName = "Unknown";
                if (window.navigator.userAgent.indexOf("Windows NT 10.0") != -1) OSName = "Windows 10";
                if (window.navigator.userAgent.indexOf("Windows NT 6.2") != -1) OSName = "Windows 8";
                if (window.navigator.userAgent.indexOf("Windows NT 6.1") != -1) OSName = "Windows 7";
                if (window.navigator.userAgent.indexOf("Windows NT 6.0") != -1) OSName = "Windows Vista";
                if (window.navigator.userAgent.indexOf("Windows NT 5.1") != -1) OSName = "Windows XP";
                if (window.navigator.userAgent.indexOf("Windows NT 5.0") != -1) OSName = "Windows 2000";
                if (window.navigator.userAgent.indexOf("Mac") != -1) OSName = "Mac/iOS";
                if (window.navigator.userAgent.indexOf("X11") != -1) OSName = "UNIX";
                if (window.navigator.userAgent.indexOf("Linux") != -1) OSName = "Linux";

                var guestData = {
                    location: window.location.href,
                    hostname: window.location.hostname,
                    mobile: /Mobi/.test(navigator.userAgent),
                    browser: navigator.sayswho,
                    device: OSName,
                    language: window.navigator.language
                }

                var requiredTranslations = this.requiredTranslations

                //if is new client
                if (!connection) {

                    // send request
                    socket.send({
                        event: 'authGuest',
                        data: {
                            key: getCookie(chatPrefix + 'liveChat'),
                            lang: getCookie(chatPrefix + 'liveChatLang'),
                            socket: socket.id,
                            oldSocket: null,
                            data: guestData,
                            translate: requiredTranslations
                        }
                    });

                    this.getSocket = socket.id
                    getSocketID = this.getSocket

                } else {

                    socket.send({
                        event: 'authGuest',
                        data: {
                            oldSocket: connection,
                            socket: socket.id,
                            key: getCookie(chatPrefix + 'liveChat'),
                            lang: getCookie(chatPrefix + 'liveChatLang'),
                            data: guestData,
                            translate: requiredTranslations
                        }
                    });

                    this.getSocket = socket.id
                    getSocketID = this.getSocket
                }

            }.bind(this))
        }
    },
    methods: {
        playSoundUrl: function (audioSrc) {
            var self = this
            var audio = new Audio(audioSrc)
        
            // check if audio finished playing and play sound again
            if (!audio.duration > 0 && audio.paused) {
                audio.play()
                this.isPlaying = true
                audio.addEventListener('ended', function () {
                audio.currentTime = 0
                self.isPlaying = false
                })
            }
        },
        getCustomEmoji: function (key) {
            let path = this.emojiThumbnailPath
            let socketPath = path + '/' + getSocketID
            let filepath = socketPath + '/' + this.customEmojis[key]

            return filepath
        },
        getTranslationByKey: function (key) {
            let original = this.requiredTranslations
            let translated = this.translations

            if (typeof translated !== null && typeof translated !== 'undefined') {
                if (translated !== null) {
                    if (typeof translated[key] !== null) {
                        return translated[key]
                    }
                }
            }

            return original[key]
        },
        linkify: function (inputText) {
            if(this.is_url(inputText)) {
                var replacedText, replacePattern1, replacePattern2, replacePattern3;

                //URLs starting with http://, https://, or ftp://
                replacePattern1 = /(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/gim;
                replacedText = inputText.replace(replacePattern1, '<a href="$1" target="_blank">$1</a>');

                //URLs starting with "www." (without // before it, or it'd re-link the ones done above).
                replacePattern2 = /(^|[^\/])(www\.[\S]+(\b|$))/gim;
                replacedText = replacedText.replace(replacePattern2, '$1<a href="http://$2" target="_blank">$2</a>');

                //Change email addresses to mailto:: links.
                replacePattern3 = /(([a-zA-Z0-9\-\_\.])+@[a-zA-Z\_]+?(\.[a-zA-Z]{2,6})+)/gim;
                replacedText = replacedText.replace(replacePattern3, '<a href="mailto:$1">$1</a>');

                return replacedText;
            } else {
                return inputText
            }
        },
        is_url: function (str) {
            let regexp = /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/
            if (regexp.test(str)) {
              return true
            } else {
              return false
            }
        },
        parseMessage: function (message) {
            let string = message

            // let converter = new showdown.Converter()
            // let text      = string
            // let html      = converter.makeHtml(text);

            // string = html

            string = this.linkify(string)

            let emojiListed = [];
            let colonsRegex = new RegExp('(^|\\s)(\:[a-zA-Z0-9-_+]+\:?)', 'g')

            let match
            while (match = colonsRegex.exec(string)) {
                let colons = match[2]
                emojiListed.push(colons)
            }

            var parsedMessage = string


            var self = this

            if (emojiListed.length >= 1) {

                emojiListed.forEach(function (emojiEl) {

                    var x = new RegExp(emojiEl, 'g')

                    let getIconTag = self.getEmojiTag(emojiEl)

                    parsedMessage = parsedMessage.replace(x, getIconTag)

                })

                return parsedMessage

            }

            return parsedMessage
        },
        getEmojiTag: function (key) {
            let regDot = new RegExp(':', 'g');
            var emojiName = key.replace(regDot, '')

            var obj = emojiJSON.find(function (obj) { return obj.name === emojiName })

            if (typeof obj !== 'undefined') {

                let stringTag = '<i class="em em-' + emojiName + ' emojiText"></i>'

                return stringTag
            } else {
                let replaceKey = this.replaceAll(key, ':', '')
                let customEmoji = this.customEmojis[replaceKey]

                let makeTag = '<i class="em emojiText" style="background-image: url(' + this.getCustomEmoji(replaceKey) + ');"></i>'

                if (typeof customEmoji !== 'undefined') {

                    return makeTag

                } else {
                    return key
                }
            }
        },
        replaceAll: function (str, find, replace) {
            return str.replace(new RegExp(this.escapeRegExp(find), 'g'), replace);
        },
        escapeRegExp: function (str) {
            return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
        },
        selectEmoji: function (key, custom = false) {

            let messageInput = this.$refs.messageInput
            let cursorPosition = messageInput.selectionStart
            let inputValue = this.messageInput
            var newValue
            if (custom) {
                newValue = inputValue.substring(0, cursorPosition) + ' :' + key + ': ' + inputValue.substring(cursorPosition)
            } else {
                newValue = inputValue.substring(0, cursorPosition) + ' ' + key + ' ' + inputValue.substring(cursorPosition)
            }
            this.messageInput = newValue

            this.showEmojiPicker = false

        },
        showHideEmojiPicker: function () {
            if (this.showEmojiPicker === false) {
                this.showEmojiPicker = true
            } else {
                this.showEmojiPicker = false
            }
        },
        sendQuestion: function () {

            if (this.currentGuestData.name !== null) {
                this.name = this.currentGuestData.name
            }

            if (this.currentGuestData.email !== null) {
                this.email = this.currentGuestData.email
            }

            let emailValidate = this.validateEmail(this.email)

            if (this.name.length === 0) {
                this.nameValidate = this.getTranslationByKey('requiredFieldText')
            } else {
                this.nameValidate = ''
            }

            if (this.email.length === 0) {
                this.emailValidate = this.getTranslationByKey('requiredFieldText')
            } else if (emailValidate === false) {
                this.emailValidate = this.getTranslationByKey('invalidEmailText')
            } else {
                this.emailValidate = ''
            }

            if (this.question.length === 0) {
                this.questionValidate = this.getTranslationByKey('requiredFieldText')
            } else {
                this.questionValidate = ''
            }

            if (this.name.length >= 1 && this.email.length >= 1 && emailValidate === true && this.question.length >= 1) {
                this.nameValidate = ''
                this.emailValidate = ''
                this.questionValidate = ''

                let data = { name: this.name, email: this.email, question: this.question }
                this.sendSocketMessage('sendQuestion', data)

            }

        },
        validateEmail: function (email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        },
        uploadFile: function () {
            let inputEl = this.$refs.inputFile
            inputEl.click()
        },
        submitUploadForm: function (e) {
            var form = this.$refs.formUpload
            // e.preventDefault()
            form.submit()
            onSubmit(e)
        },
        fileSelected: function (event) {
            var form = this.$refs.formUpload
            onSubmit(event)
        },
        loadMessages: function () {
            let data = { room: this.currentRoomData, page: this.currentMessagesPage, limit: this.currentMessagesLimit }
            this.sendSocketMessage('getGuestRoomMessages', data)
        },
        displayMessages: function (messagesList, mode = 1) {

            let old = this.messages
            this.lastIndex = this.currentMessagesLimit
            if (old.length > 0 && this.loadingMoreMessages === true) {
                this.messages = messagesList
                this.messages = messagesList.concat(old)
                this.loadingMoreMessages = false
                this.scrollLastMessage()
            } else {
                this.messages = this.messages.concat(messagesList)
                this.loadingMoreMessages = false
                var self = this
                Vue.nextTick(function () {
                    var container = self.$refs.messagesContainer
                    container.scrollTop = container.scrollHeight
                })
            }

        },
        onMessage: function (msg) {
            console.log(msg)
            if (!this.events[msg.event]) {
                return false
            }
            if (msg.event === 'disconnect') {
                this.events[msg.event](msg, this)
            } else {
                this.events[msg.event](msg.data, this)
            }
        },
        sendMessage: function () {
            this.messageInput = this.messageInput.trim()
            if (this.messageInput.length && this.currentRoomID !== 0) {
                let data = { room: this.currentRoomData, message: this.messageInput }
                this.sendSocketMessage('sendGuestRoomMessages', data)
                this.messageInput = ''
            }
        },
        scrollLastMessage: function () {
            var self = this
            Vue.nextTick(function () {
                var container = self.$refs.messagesContainer
                var lastMessageContainer = document.getElementById('lastMessageScroll')

                if (lastMessageContainer !== null) {
                    lastMessageContainer.scrollIntoView({ duration: 'slow', direction: 'y', complete: function () { alert('Done') } })
                    container.scrollBy(0, 0)
                    this.lastIndex = 0
                }
            })
        },
        headerClicked: function () {
            if (this.isExpanded) {
                this.isExpanded = false
            } else {
                this.isExpanded = true
                this.unreads = 0
            }
        },
        downloadFile: function (name, url) {

            var a = document.createElement('a');
            a.download = name
            a.href = url


            document.body.appendChild(a)
            a.click()
            document.body.removeChild(a)

            console.log(url)

        },
        formatDate: function (timestamp) {
            // Split timestamp into [ Y, M, D, h, m, s ]
            var t = timestamp.split(/[- :]/);

            // Apply each element to the Date function
            var d = new Date(Date.UTC(t[0], t[1] - 1, t[2], t[3], t[4], t[5]));

            var dString = d

            dString = ('0' + d.getDate()).slice(-2) + '/'
                + ('0' + (d.getMonth() + 1)).slice(-2) + '/'
                + d.getFullYear();

            let makeDate = dString + ' ' + d.getHours() + ':' + d.getMinutes();

            return makeDate;
        },
        sendSocketMessage: function (eventName, dataMessage) {
            socket.send({
                event: eventName,
                data: dataMessage
            });
        },
        getFileUrl: function (filename) {
            let filePath = chatFilesPath
            let pathRoom = filePath + '/' + this.getSocket + '/'
            let pathFile = pathRoom + filename
            let fullPath = pathFile

            return fullPath
        },
        getFileDownloadUrl: function (filename, downloadName) {
            let filePath = chatFilesPath
            let pathRoom = filePath + '/' + this.getSocket + '/'
            let pathFile = pathRoom + filename + '/download/' + downloadName
            let fullPath = pathFile

            return fullPath
        },
        getThumbnailUrl: function (filename) {
            let thumbPath = chatFilesThumbnailPath
            let pathRoom = thumbPath + '/' + this.getSocket + '/'
            let pathFile = pathRoom + filename
            let fullPath = pathFile

            return fullPath
        },
        bottomMessagesVisible() {
            let windowMessages = this.$refs.messagesContainer
            if (windowMessages) {
                let scrollY = windowMessages.scrollTop
                let visible = windowMessages.clientHeight
                let pageHeight = windowMessages.scrollHeight
                let bottomOfPage = visible + (scrollY + 10) >= pageHeight
                let offsetTop = (scrollY + 10)
                let topOfPage = (offsetTop <= 10)

                if (!this.lastScrollMessages && topOfPage) {
                    this.lastScrollMessages = true
                    this.pageHeightMessages = pageHeight
                    this.loadMoreMessages = true
                    return true
                } else if (this.lastScrollMessages && topOfPage) {
                    this.lastScrollMessages = true
                    return false
                } else if (!topOfPage) {
                    this.lastScrollMessages = false
                    return false
                }

                return bottomOfPage || pageHeight < visible
            }
        }
    }
})

// on DOM ready...
var form = document.getElementById('upload');

function onSubmit(event) {

    if (event) { event.preventDefault(); }

    // set connection path 

    let path = chatFilesUploadPath + '?socket=' + getSocketID

    // do AJAX stuff...

    var form = document.getElementById('upload')

    var formData = new FormData();

    var multipleFiles = form.querySelector('input[type=file]');

    // only if there is something to do ...
    if (multipleFiles.files.length) {
        var submit = form.querySelector('[type=submit]');
        var request = new XMLHttpRequest();
        var formData = Array.prototype.reduce.call(
            multipleFiles.files,
            function (formData, file, i) {
                formData.append(multipleFiles.name, file);
                return formData;
            },
            new FormData()
        );

        submit.disabled = true;

        request.open('post', path);
        request.addEventListener("load", transferComplete);
        request.send(formData);

        console.log(request)

        request.onload = function (e) {
            let response = request.responseText
            let jsonResponse = JSON.parse(response)

            if (request.status != 200) {
                alert(jsonResponse.data.message)
            }

            if (jsonResponse.data) {

                let uploadedFiles = jsonResponse.data.length

                if (uploadedFiles >= 1) {
                    var data = { data: { room: currentRoomData, message: jsonResponse.data } }
                    sendSocketData('sendGuestRoomMessages', data)
                }

            }

            // clean up the form eventually
            // make this form usable again
            submit.disabled = false;
            // enable the submit on abort/error too
            // to make the user able to retry
        };
    }

}


function urlEncodeFormData(form) {
    var i, e, data = [];
    for (i = 0; i < form.elements.length; i++) {
        e = form.elements[i];
        if (e.type !== 'button' && e.type !== 'submit') {
            data.push(encodeURIComponent(e.id) + '=' + encodeURIComponent(e.value));
        }
    };
    return data.join('&');
}

function transferComplete(data) {
    response = JSON.parse(data.currentTarget.response);
    if (response.success) {
        alert("Successfully Uploaded Files!");
    }
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 365);
        }
    }
}

function sendSocketData(eventName, message) {
    socket.send({
        event: eventName,
        data: message
    });
}

function changeHeightBox(height) {
    var element = document.getElementsByClassName('chat')

    var header = document.getElementById('chat-header')

    if (element) {

        element[0].style.height = height + "px"

    }
}


(function () {

    var element = document.getElementsByClassName('chat')

    var header = document.getElementById('chat-header')

    if (element) {

        header.addEventListener('click', function () {
            let currentHeight = element[0].offsetHeight

            if (disabledClicks) {
            } else {
                if (questionWasSent) {
                    if (currentHeight === 0) {

                        element[0].style.height = "50px"

                    } else {

                        element[0].style.height = "0px"

                    }

                } else {
                    if (currentHeight === 0) {

                        element[0].style.height = "395px"

                    } else {

                        element[0].style.height = "0px"

                    }
                }
            }


        })

    }

})();