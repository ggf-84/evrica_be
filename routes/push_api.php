<?php

use Illuminate\Http\Request;

Route::group(['middleware' => 'evrica.auth'], function () {

    /**
     * @api {get} /push/subscription Get push subscription status of user
     * @apiName Get push subscription of user
     * @apiDescription This endpoint get push subscription status of user
     * @apiGroup PushNotification
     * @apiSampleRequest /backend/api/push/subscription
     */

    Route::get('push/subscription', 'PushNotificationController@index');

    /**
     * @api {post} /save-subscription Save subscription
     * @apiName Save subscription to user
     * @apiDescription This endpoint saves user's push subscription
     * @apiGroup PushNotification
     * @apiSampleRequest /backend/api/save-subscription
     */
    Route::post('/save-subscription', 'PushNotificationController@saveSubscription');

    /**
     * @api {post} /send-notification Send a new push notification
     * @apiName Send notification to user
     * @apiDescription This endpoint send notification to ser
     * @apiGroup PushNotification
     * @apiSampleRequest /backend/api/send-notification
     */
    Route::post('/send-notification', 'PushNotificationController@sendNotification');

    /**
     * Sample requests
     */
    Route::post('subscriptions', 'PushNotificationController@update');
    Route::post('subscriptions/delete', 'PushNotificationController@destroy');
    Route::post('notification', 'PushNotificationController@store');

});
