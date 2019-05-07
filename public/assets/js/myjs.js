var editor_d;
var windowName;
var enableWindows = [];
var navListWindows = [];
var windowGlobalObject = window;
var allWindows = [];

function gotowindow(wnd, back) {
    var currentW = wnd;
    var loc = location.href.replace(/[/#/?]+$/, '');
    if (wnd.indexOf("?") !== -1) {
        arr = wnd.split("?");
        wnd = arr[0];
        params = arr[1];
    }
    else params = '';
    loc += '/' + wnd + '/' + params;
    loc = loc.replace(/\/+$/, '');

    var window = wnd.split('/');
    if (!checkEnableWindow(window[0]))
        return false;

    $data = {
        'languageId': windowGlobalObject['langSelector'].selectedLanguage.id,
        'languageHeader': windowGlobalObject['langSelector'].selectedLanguage.header,
        'token': EventBus.token,
    };

    if (!EventBus.token) {
        alert('Please login first!');
    } else {
        $.ajax({
            type: 'POST',
            url: loc,
            contentType: 'application/json',
            data: JSON.stringify($data),
            success: function (result) {
                if (result.error !== undefined) {
                    alert(result.wdata);
                    return false;
                }

                var selectedWindowJson = allWindows.filter(function(e) { return e.hasOwnProperty(result.window); })[0][result.window];
                if (checkWindowPermissions(selectedWindowJson)) {
                    $('#mainwindow').html(result.wdata);
                    editor_d.setValue(result.debug, -1);
                    windowName = result.window;
                    readMetadata();
                    accordionClose();

                    if (back !== undefined) {
                        navListWindows.pop();

                        if (navListWindows.length === 0)
                            $('#backToWindow').html('');
                        else
                            $('#backToWindow').html('<< Back');
                    } else {
                        console.log(currentW, navListWindows.slice(-1)[0], navListWindows);
                        if (currentW !== navListWindows.slice(-1)[0])
                            navListWindows.push(currentW);

                        if (navListWindows.length > 0)
                            $('#backToWindow').html('<< Back');
                    }
                } else {
                    alert("You don't have all required permissions to load this window!");
                }
            },
            error: function () {

            }
        });
    }
}

/**
 * Evaluate response status code
 * @param data
 * @param successcode
 * @param failcode
 */
function processresult(data, successcode, failcode) {
    if (data === null || data.result != 200) {
        if (failcode !== "") eval(failcode);
    }
    else {
        if (successcode !== "") eval(successcode);
    }
}

function checkEnableWindow(window) {
    if (enableWindows.length && $.inArray(window, enableWindows) === -1) {
        alert('Disable window link!');
        return false;
    }
    return true;
}

function dosubmit(token, url, method, successcode, failcode, window) {
    var loc = getUrl() + '/backend/sandbox/ajax-submit-form';
    var data = {token: token, url: url, method: method};

    if (window.length > 0) {
        var wnd = window.split('?');
        if (!checkEnableWindow(wnd[0]))
            return false;
    }

    $.extend(data, getformdata());
    $.extend(data, getManyToManyData());

    $.ajax({
        type: 'POST',
        url: loc,
        headers : {
          'webHeader' : true,
        },
        contentType: 'application/json',
        data: JSON.stringify(data)
    })
        .fail(function () {
            processcode(null, successcode, failcode);
        })
        .done(function (data) {
            if (data.error !== undefined) {
                alert(data.wdata);
                return false;
            }
            successcode = replaceparem(data.data, successcode);
            editor_d.setValue(data.debug);
            processresult(data, successcode, failcode);
        });
}

function dorequest(token, url, method, successcode, failcode, window) {
    var loc = getUrl() + '/backend/sandbox/ajax-submit-form';
    var data = {token: token, url: url, method: method};

    if (window.length > 0) {
        var wnd = window.split('?');
        if (!checkEnableWindow(wnd[0]))
            return false;
    }

    $.ajax({
        type: 'POST',
        url: loc,
        headers : {
          'webHeader' : true,
        },
        contentType: 'application/json',
        data: JSON.stringify(data)
    })
        .fail(function () {
            processcode(null, successcode, failcode);
        })
        .done(function (data) {
            if (data.error !== undefined) {
                alert(data.wdata);
                return false;
            }
            successcode = replaceparem(data.data, successcode);
            editor_d.setValue(data.debug);
            processresult(data, successcode, failcode);
        });
}

function replaceparem(data, scode) {
    var result = JSON.parse(data).data;
    var params = scode + "&";
    var matches = params.match(/\$(.*?)\&/g);
    if (matches !== null) {
        $.each(matches, function (index, value) {
            var param = value.replace(/[/#/?/=/'/)/;/&/]+?/g, '');
            var pval = param.split('.');
            scode = scode.replace(param, result[pval[1]]);
        });
    }
    return scode;
}


function getformdata() {

    var ret = {};
    $('[id^=inp_]').each(function () {
        datatype = $(this).attr('data-type');
        v = $(this).val();
        n = $(this).attr('name');
        switch (datatype) {
            case 'relation':
                ret[n] = {'id': parseInt(v)};
                break;
            case 'boolean':
                if (v == 'on') ret[n] = 1;
                else ret[n] = 0;
                break;
            default:
                ret[n] = v;
        }
    });
    return ret;
}

function getUrl() {
    var host = location.host;
    if (host.charAt(host.length - 1) == '/')
        host = host.substr(0, host.length - 1);

    var loc = location.protocol + '//' + host;
    return loc;
}

function accordionOpen() {
    $('#debug .ui-accordion-content, .code-editor').show();
}

function accordionClose() {
    $('#debug').accordion({
        collapsible: true,
        active: null
    });
}

//============================================================

$(document).ready(function () {
    var $selectGroup = $('#selectGroup'),
        $selectToEdit = $('#selectToEdit'),
        $selectToDelete = $('#selectToDelete'),
        $mainwindow = $('#mainwindow'),
        $wDelete = $('#wDelete'),
        $saveform = $('#saveform'),
        $savedata = $('#savedata'),
        $saveGroup = $('#saveGroup'),
        $saveEditWindow = $('#saveEditWindow'),
        $createGroup = $('#createGroup'),
        $createWindowName = $('#createWindowName'),
        $createWindowMinW = $('#createWindowMinWidth'),
        $createWindowMaxW = $('#createWindowMaxWidth'),
        $createWindowMinH = $('#createWindowMinHeight'),
        $createWindowMaxH = $('#createWindowMaxHeight'),
        $editWindowName = $('#editWindowName'),
        $editWindowMinW = $('#editWindowMinWidth'),
        $editWindowMaxW = $('#editWindowMaxWidth'),
        $editWindowMinH = $('#editWindowMinHeight'),
        $editWindowMaxH = $('#editWindowMaxHeight'),
        $publishedWindow = $('#publishedWindow'),
        $deleteWindowBtn = $('#deleteWindowBtn'),
        $aceEditorEdit = $('.ace-editor-edit'),
        $showErr = $('.show_err'),
        $closeModal = $('.modal-body button.close'),
        clearErrInf = '#createWindowName,#createWindowMaxHeight,#createWindowMinHeight,#createWindowMaxWidth,' +
            '#createWindowMinWidth,#createGroup,#editWindowMaxHeight,#createWindowName' +
            '#editWindowMinHeight,#editWindowMaxWidth,#editWindowMinWidth,#editWindowName',
        showTree = '#showTree',
        openWindows = '#openWindows',
        wLoad = '#wLoad',
        addEditW = '#wEdit, #addGroup',
        checkToDelete = '#checkToDelete',
        newGroupButton = '#newGroupButton',
        toEditButton = '#toEditButton',
        $showTree = $(showTree),
        $openWindows = $(openWindows),
        $wLoad = $(wLoad),
        $newGroupButton = $(newGroupButton),
        $toEditButton = $(toEditButton),
        editor = ace.edit("editor");

    editor.setTheme("ace/theme/eclipse");
    editor.getSession().setMode("ace/mode/json");
    editor_d = ace.edit("editor_d");

    $openWindows.jqxTree({height: 0, hasThreeStates: true, checkboxes: true, width: '344px'}).css({
        visibility: 'hidden',
        height: 0
    });
    //$openWindows.jqxTree('expandAll');

    //============================================================================================================
    $newGroupButton.jqxDropDownButton({width: 344, height: 25});
    $selectGroup.on('select', function (event) {
        var args = event.args;
        var selectedItemId = null;
        var item = $selectGroup.jqxTree('getItem', args.element);
        var dropDownContent = '<div style="position: relative; margin-left: 3px; margin-top: 5px;">' + item.label + '</div>';
        $newGroupButton.jqxDropDownButton('setContent', dropDownContent);

        if (item !== null)
            selectedItemId = item.element.attributes['data-id'].value;

        $createGroup.attr('data-id', selectedItemId);
        $newGroupButton.jqxDropDownButton('close');

        if ($createGroup.hasClass('show_err'))
            $createGroup.val('').removeClass('show_err');
    });
    $selectGroup.jqxTree({width: 344, height: 200});
    //=============================================================================================================
    $toEditButton.jqxDropDownButton({width: 344, height: 25});

    $selectToEdit.on('select', function (event) {
        var args = event.args;
        var selectedItemId = null;
        var selectedItemType = false;
        var item = $selectToEdit.jqxTree('getItem', args.element);
        var dropDownContent = '<div style="position: relative; margin-left: 3px; margin-top: 5px;">' + item.label + '</div>';
        $toEditButton.jqxDropDownButton('setContent', dropDownContent);

        if (item !== null) {
            selectedItemId = item.element.attributes['data-id'].value;
            selectedItemType = item.element.attributes['data-type'].value;
        }

        $aceEditorEdit.attr('data-id', selectedItemId);
        $aceEditorEdit.attr('data-type', selectedItemType);


        if (selectedItemType != 'window') {
            $showErr.html('Please select a window!');
        }
        else {
            $showErr.html('');

            var data = {id: selectedItemId, type: selectedItemType},
                loc = getUrl() + '/backend/sandbox/load-to-edit';

            $.ajax({
                type: 'POST',
                url: loc,
                contentType: 'application/json',
                data: JSON.stringify(data)
            })
                .done(function (result) {
                    var neweditor = ace.edit("newEditor");
                    neweditor.getSession().setMode("ace/mode/json");
                    neweditor.setValue(result.editorData);

                    if (result.publish === 1)
                        $publishedWindow.prop('checked', true).val(1);
                    else
                        $publishedWindow.prop('checked', false).val(0);

                    $editWindowName.val(result.wName);
                    $editWindowMinW.val(result.minW);
                    $editWindowMaxW.val(result.maxW);
                    $editWindowMinH.val(result.minH);
                    $editWindowMaxH.val(result.maxH);
                    $publishedWindow.val(result.publish);
                });
        }

        $toEditButton.jqxDropDownButton('close');
    });
    $selectToEdit.jqxTree({width: 344, height: 300});
//====================================================================================================

    $('[data-toggle=confirmation]').confirmation();

    accordionClose();

    // $('#showEditor').click(function () {
    //     $(".code-editor").toggle("slide");
    // });

    $(clearErrInf).on('click', function () {
        if ($(this).hasClass('show_err'))
            $(this).val('').removeClass('show_err');
    });

    $saveform.on('submit', function () {
        $savedata.val(editor.getValue());
    });

    $(addEditW).on("click", function () {
        var type = $(this).attr('data-type');
        var opositType = false;

        if (type === 'edit')
            opositType = 'add';
        else
            opositType = 'edit';

        var $opositClass = $('.ace-editor-' + opositType);
        var $thisClass = $('.ace-editor-' + type);

        $opositClass.attr('id', '');
        $thisClass.attr('id', 'newEditor');

        var neweditor = ace.edit("newEditor");
        neweditor.setTheme("ace/theme/eclipse");
        neweditor.getSession().setMode("ace/mode/json");

    });

    $showTree.on("click", function () {
        $openWindows.css({visibility: 'visible', height: '600px'});
    });

    $(document).on('click', function (event) {
        if ($(event.target).closest(openWindows).length !== 0)
            return false;
        if ($(event.target).closest(showTree, openWindows).length === 0)
            $openWindows.css({visibility: 'hidden', height: 0});
    });

    $wLoad.on("click", function () {
        accordionOpen();
        var checkedItemsId = [],
            selectedItem = $openWindows.jqxTree('getSelectedItem'),
            checkedItems = $openWindows.jqxTree('getCheckedItems');

        if (selectedItem !== null)
            var selectedItemId = selectedItem.element.attributes['data-id'].value;

        for (var i = 0; i < checkedItems.length; i++) {
            if (checkedItems[i].hasItems === false)
                checkedItemsId.push(checkedItems[i].element.attributes['data-id'].value);
        }

        var data = {
                id: checkedItemsId,
                selected: selectedItemId,
                'languageId': window['langSelector'].selectedLanguage.id,
                'languageHeader': window['langSelector'].selectedLanguage.header,
                'token': EventBus.token
            },
            loc = getUrl() + '/backend/sandbox/load';
        if (!EventBus.token) {
            alert('Please login first!');
        } else {
            $.ajax({
                type: 'POST',
                url: loc,
                contentType: 'application/json',
                data: JSON.stringify(data)
            })
                .done(function (result) {
                    allWindows = JSON.parse(result.jsondata);
                    var selectedWindowJson = allWindows.filter(function(e) { return e.hasOwnProperty(result.window); })[0][result.window];
                    if (checkWindowPermissions(selectedWindowJson)) {
                        $mainwindow.html(result.wdata);
                        editor.getSession().setMode("ace/mode/json");
                        editor.setValue(result.jsondata);
                        editor_d.setValue(result.debug);
                        enableWindows = result.enableW;
                        // console.log(result.window);
                        windowName = result.window;
                        navListWindows.push(result.window)
                    } else {
                        alert("You don't have all required permissions to load this window!");
                    }

                });
        }
    });

    $saveGroup.on("click", function () {
        var groupId = $createGroup.attr('data-id'),
            newGroup = $createGroup.val(),
            name = $createWindowName.val(),
            minWidth = $createWindowMinW.val(),
            maxWidth = $createWindowMaxW.val(),
            minHeight = $createWindowMinH.val(),
            maxHeight = $createWindowMaxH.val(),
            neweditor = ace.edit("newEditor"),
            jsonCode = neweditor.getValue(),
            data = {
                data: {
                    group_id: groupId,
                    newGroup: newGroup,
                    edited_metadata: jsonCode,
                    name: name,
                    min_width: minWidth,
                    max_width: maxWidth,
                    min_height: minHeight,
                    max_height: maxHeight
                }
            },
            loc = getUrl() + '/backend/sandbox/save';

        $.ajax({
            type: 'POST',
            url: loc,
            contentType: 'application/json',
            data: JSON.stringify(data)
        })
            .done(function (result) {
                if (result.error === true) {
                    if (result.group_id !== undefined) $createGroup.addClass('show_err').val(result.group_id);
                    if (result.name !== undefined) $createWindowName.addClass('show_err').val(result.name);
                    if (result.min_width !== undefined) $createWindowMinW.addClass('show_err').val(result.min_width);
                    if (result.max_width !== undefined) $createWindowMaxW.addClass('show_err').val(result.max_width);
                    if (result.min_height !== undefined) $createWindowMinH.addClass('show_err').val(result.min_height);
                    if (result.max_height !== undefined) $createWindowMaxH.addClass('show_err').val(result.max_height);
                }
                else if (result.jsonError === true) {
                    neweditor.getSession().setMode("ace/mode/json");
                    neweditor.setValue(result.wdata);
                }
                else {
                    $closeModal.trigger('click');
                    location.reload();
                }
            });
    });

    $saveEditWindow.on("click", function () {
        var windowId = $aceEditorEdit.attr('data-id'),
            windowtype = $aceEditorEdit.attr('data-type'),

            nameW = $editWindowName.val(),
            minWidth = $editWindowMinW.val(),
            maxWidth = $editWindowMaxW.val(),
            minHeight = $editWindowMinH.val(),
            maxHeight = $editWindowMaxH.val(),
            publish = $publishedWindow.val(),

            neweditor = ace.edit("newEditor"),
            jsonCode = neweditor.getValue(),
            data = {
                data: {
                    id: windowId,
                    type: windowtype,
                    metadata: jsonCode,
                    name: nameW,
                    min_width: minWidth,
                    max_width: maxWidth,
                    min_height: minHeight,
                    max_height: maxHeight,
                    publish: publish
                }
            },
            loc = getUrl() + '/backend/sandbox/edit';

        if (windowtype !== 'window') {
            $showErr.html('Please select a window!');
            return false;
        }

        $.ajax({
            type: 'POST',
            url: loc,
            contentType: 'application/json',
            data: JSON.stringify(data)
        })
            .done(function (result) {
                if (result.error === true) {
                    $showErr.html(result.wdata);
                    if (result.name !== undefined) $editWindowName.addClass('show_err').val(result.name);
                    if (result.min_width !== undefined) $editWindowMinW.addClass('show_err').val(result.min_width);
                    if (result.max_width !== undefined) $editWindowMaxW.addClass('show_err').val(result.max_width);
                    if (result.min_height !== undefined) $editWindowMinH.addClass('show_err').val(result.min_height);
                    if (result.max_height !== undefined) $editWindowMaxH.addClass('show_err').val(result.max_height);
                }
                else {
                    $closeModal.trigger('click');
                    location.reload();
                }
            });
    });

    $wDelete.on('click', function () {
        setTimeout(function () {
            $selectToDelete.jqxTree({
                height: 400,
                hasThreeStates: true,
                checkboxes: true,
                width: '100%'
            }).css({margin: '5px 0'});
            $selectToDelete.jqxTree('expandAll');
        }, 200);

    });

    $(checkToDelete).on('click', function () {
        $showErr.html('');
        if (!$(this).is(':checked')) {
            $selectToDelete.jqxTree('uncheckAll');
        } else {
            $selectToDelete.jqxTree('checkAll');
        }
    });

    $selectToDelete.on('click', function () {
        $showErr.html('');
    });

    $deleteWindowBtn.on("click", function () {
        var checkedItemsId = [],
            checkedItems = $selectToDelete.jqxTree('getCheckedItems');


        for (var i = 0; i < checkedItems.length; i++) {
            if (checkedItems[i].hasItems === false)
                checkedItemsId.push(checkedItems[i].element.attributes['data-id'].value);
        }

        var data = {ids: checkedItemsId},
            loc = getUrl() + '/backend/sandbox/delete';

        $.ajax({
            type: 'POST',
            url: loc,
            contentType: 'application/json',
            data: JSON.stringify(data)
        })
            .done(function (result) {
                if (result.error === true) {
                    $showErr.html(result.wdata);
                }
                else {
                    $closeModal.trigger('click');
                    location.reload();
                }
            });
    });


    $('#testParams').on("click", function () {
        var params = $('#addParams').val();
        gotowindow(windowName + '/' + params);
    });

    $publishedWindow.on("click", function () {
        if ($(this).is(':checked'))
            $(this).val(1);
        else
            $(this).val(0);
    });

    $('#backToWindow').on("click", function () {
        gotowindow(navListWindows.slice(-1)[0], true);
    });

});

function checkWindowPermissions(window){
    if(!window.permissions) return true;

    var diff = $(window.permissions).not(EventBus.permissions).get();
    return diff.length <= 0;
}
