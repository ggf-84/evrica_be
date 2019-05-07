<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

// Route::get('reset_password/{token}', ['as' => 'password.reset', function($token)
// {
//      return view('emails.reset.password');
// }]);
//
//Route::get('site', 'CompanyController@site');
//
//Route::get('tests/settings', function() {
//    return view('tests.test_settings');
//});
//
//Route::get('tests/metadata', function() {
//    return view('tests.test_metadata');
//});

Route::get('sandbox', 'SandboxController@welcome');

Route::post('sandbox/load', 'SandboxController@load');

Route::post('sandbox/ajax-submit-form', 'SandboxController@ajaxSubmitForm');

Route::post('sandbox/save', 'SandboxController@save');

Route::post('sandbox/load-to-edit', 'SandboxController@loadToedit');

Route::post('sandbox/edit', 'SandboxController@edit');

Route::post('sandbox/delete', 'SandboxController@delete');

Route::post('sandbox/{window?}/{params?}', 'SandboxController@index');

// domains company

Route::get('home/company', 'TestController@site');

Route::get('admin', 'AdminController@admin');

// chat

Route::get('chat', 'ChatController@index');

Route::get('chat/rooms', 'ChatController@indexRooms');

Route::group(['middleware' => 'evrica.auth'], function () {

    /**
     * Edit DataExchange file
     */
    Route::get('file/edit/{hash}', 'DataExchangeController@editFile');

    /**
     * View all chat files
     */

    Route::get('chat/file/{roomID}/{filename}/{type?}/{downloadName?}', 'FileController@getChatFile');

    /**
     * View emoji thumbnail
     */

    Route::get('chat/emoji/thumbnail/{filename}', 'FileController@getChatEmojiThumbnail');

    /**
     * View sound
     */

    Route::get('chat/sound/{filename}', 'FileController@getChatSound');

    /**
     * View chat file thumbnail
     */

    Route::get('chat/thumbnail/file/{roomID}/{filename}/{type?}/{downloadName?}', 'FileController@getChatFileThumbnail');

});


/**
 * View all livechat files
 */

Route::get('livechat/file/{socket}/{filename}/{type?}/{downloadName?}', 'FileController@getLiveChatFile');

/**
 * View livechat file thumbnail
 */

Route::get('livechat/thumbnail/file/{socket}/{filename}/{type?}/{downloadName?}', 'FileController@getLiveChatFileThumbnail');

/**
 * View livechat file thumbnail
 */

Route::get('livechat/emoji/{socket}/{filename}', 'FileController@getLiveChatEmoji');

/**
 * Manifest file (optional if VAPID is used)
 * /
Route::get('manifest.json', 'PushNotificationController@getManifest');

/**
 * View DataExchange file thumbnail
 */

Route::get('file/{hash}/{fileType?}', 'DataExchangeController@showThumbnail');
