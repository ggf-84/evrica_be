<?php

use Illuminate\Http\Request;

/**
 * @api {get} /test/items Get list of models
 * @apiName Get list of models/entities
 * @apiDescription This enpoint return list of entities/models of system
 * @apiGroup Test
 * @apiSampleRequest /backend/api/test/items
 */
Route::get('test/items', 'TestController@items');



/**
 * @api {get} /test/factory/:model/:count Insert random data to entities
 * @apiName Insert random data to models
 * @apiDescription This enpoint add random data to model
 * @apiParam model entity
 * @apiParam count number of items to add
 * @apiGroup Test
 * @apiSampleRequest /backend/api/test/factory/:model/:count
 */
Route::get('test/factory/{model}/{count?}', 'TestController@generate');


Route::post('event/fire/operatorTakeGuest', 'NotificationController@sendOperatorTakeGuestNotification');

Route::get('test/job', 'TestController@job');

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */

/**
 * @api {post} /auth/recovery try to send reset link to email
 * @apiName Send reset link
 * @apiDescription This endpoint sends reset link to email
 * @apiGroup Auths
 * @apiParam email
 * @apiSampleRequest /backend/api/auth/recovery
 */

Route::post('auth/recovery', 'Auth\\Api\\Controllers\\ForgotPasswordController@sendResetEmail');

/**
 * @api {post} /auth Auth the users
 * @apiName Authentificate User
 * @apiDescription This endpoint return the token
 *
 * @apiParam email Email of user
 * @apiParam password Password of user
 * @apiGroup Auths
 * @apiSampleRequest /backend/api/auth
 */
Route::post('auth', 'AuthenticateController@authenticate');

/**
 * @api {post} /auth/admin Auth the admins
 * @apiName Authentificate Admin
 * @apiDescription This endpoint return the token
 *
 * @apiParam email Email of admin
 * @apiParam password Password of admin
 * @apiGroup Auths
 * @apiSampleRequest /backend/api/auth/admin
 */

Route::post('auth/admin', 'AuthenticateController@authenticateAdmin');


/**
 * @api {post} /auth/reset try to reset new password
 * @apiName Reset password
 * @apiDescription This endpoint resets password
 * @apiGroup Auths
 * @apiParam password
 * @apiParam password_confirmation
 * @apiParam token
 * @apiParam email
 * @apiSampleRequest /backend/api/auth/reset
 */

Route::post('auth/reset', 'Auth\\Api\\Controllers\\ResetPasswordController@resetPassword');

Route::post('register', 'UserController@register');

Route::post('register/invite', 'UserController@registerByInvitation');

Route::get('confirm/{data}', 'UserController@confirm');

Route::get('invite/{token}', 'UserController@invite');

/**
 * @api {post} /resend/confirmation Resend confirmation email for registered users
 * @apiName Resend confirmation email for registered users
 * @apiDescription This endpoint send confirmation email for registered users by credentials
 * @apiParam email of user
 * @apiParam password of user
 * @apiGroup Auths
 * @apiSampleRequest /backend/api/resend/confirmation
 */
Route::post('resend/confirmation', 'UserController@resendMailConfirmation');

/**
 * @api {get} /demo/send/:id Send demo email to user by id
 * @apiName Send demo email to user by id
 * @apiDescription This endpoint sends demo mail to user email
 * @apiParam id id of user
 * @apiGroup Demo Mail
 * @apiSampleRequest /backend/api/demo/send/:id
 */
Route::get('demo/send/{id?}', 'MailDemo@sendUserMail');


/**
 * @api {post} /demo/send Send demo email to email
 * @apiName Send demo email to specified email address
 * @apiDescription This endpoint sends demo email to specified email
 * @apiParam email email of recipient
 * @apiGroup Demo Mail
 * @apiSampleRequest /backend/api/demo/send
 */
Route::post('demo/send', 'MailDemo@sendDemoMail');


/**
 * @api {post} /demo/send/data Send costum demo email
 * @apiName Send costum demo email
 * @apiDescription This endpoint sends demo email with costum data
 * @apiParam to[email] email of recipient
 * @apiParam to[name] name of recipient
 * @apiParam subject subject for message
 * @apiParam templates[html] html template for mail
 * @apiParam templates[text] raw template for mail
 * @apiParam html[header] content of html header
 * @apiParam html[content] content of html template
 * @apiParam html[footer] content of html footer
 * @apiParam text[header] header content for raw template
 * @apiParam text[content] content for raw template
 * @apiParam text[footer] footer for raw template
 * @apiParam from[email] email for sender
 * @apiParam from[name] name for sender
 * @apiParam attach[0] file attachement
 * @apiGroup Demo Mail
 * @apiSampleRequest /backend/api/demo/send/data
 */
Route::post('demo/send/data', 'MailDemo@sendRequestMail');


/**
 * @api {post} /chat/message Save message of guest
 * @apiName Save message from chat
 * @apiDescription This endpoint save message for guests
 * @apiGroup Chat Messages
 * @apiParam room_id
 * @apiParam sender
 * @apiParam message
 * @apiSampleRequest /backend/api/chat/message
 */
Route::post('chat/message', 'RoomMessagesController@saveGuestMessage');


/**
 * @api {get} /guest/messages/:token/:page/:limit Get conversations history for guests
 * @apiName Get messages for specific guest with pagination
 * @apiDescription This endpoint return messages for specific guest with pagination function
 * @apiParam token token stored in coockie (Example: bd7782358c96df79aaa0c4af5a38b40c)
 * @apiParam page=1 page number
 * @apiParam limit=15 limit of entries for history
 * @apiGroup Chat Messages
 * @apiSampleRequest /backend/api/guest/messages/:token/:page/:limit
 */
Route::get('guest/messages/{token}/{page?}/{limit?}', 'RoomMessagesController@getGuestMessage');


Route::post('chat/guest/upload', 'RoomMessagesController@saveGuestChatFile');


//Route::post('chat/register','RoomGuestController@register');

/*
 * Token is required
 */


Route::group(['middleware' => 'evrica.auth'], function () {

    /**
     * @api {post} /auth/admin/loginAs Login admin as company and/or user
     * @apiName Login admin as company and/or user
     * @apiDescription This endpoint Logins admin as company and/or user
     * @apiHeader Authorization Authorization token
     * @apiGroup Admin
     * @apiSampleRequest /backend/api/auth/admin/loginAs
     */
    Route::post('auth/admin/loginAs', 'AuthenticateController@loginAs');

    /**
     * @api {get} /auth/admin/logoutAs retrieve back admin token , (from loginas)
     * @apiName Retrieve back admin token , (from loginas)
     * @apiDescription This endpoint retrieves back admin token , (from loginas)
     * @apiHeader Authorization Authorization token
     * @apiGroup Admin
     * @apiSampleRequest /backend/api/auth/admin/logoutAs
     */
    Route::get('auth/admin/logoutAs', 'AuthenticateController@logoutAs');

    /**
     * @api {get} /auth/user Get user info
     * @apiName Get user information
     * @apiDescription This endpoint returns the informations about user
     * @apiHeader Authorization Authorization token
     * @apiGroup Users
     * @apiSampleRequest /backend/api/auth/user
     */
    Route::get('auth/user', 'AuthenticateController@getLogedUser');

    /**
     * @api {get} /auth/logout Logout user
     * @apiName Logout user by token
     * @apiDescription Logout user by token
     * @apiHeader Authorization Authorization token
     * @apiGroup Auths
     * @apiSampleRequest /backend/api/auth/logout
     */
    Route::get('auth/logout', 'AuthenticateController@logout');


    /**
     * @api {post} /user/change/password Change user password
     * @apiName Change user password
     * @apiDescription This endpoint change user password
     * @apiHeader Authorization Authorization token
     * @apiGroup Users
     * @apiParam user_id
     * @apiParam password
     * @apiParam new_password
     * @apiSampleRequest /backend/api/user/change/password
     */
    Route::post('/user/change/password', 'UserController@changePassword');

    /**
     * @api {get} /users Get all users
     * @apiName Get all users
     * @apiDescription This endpoint return users
     * @apiHeader Authorization Authorization token
     * @apiGroup Users
     * @apiSampleRequest /backend/api/users
     */
    Route::get('users', 'UserController@index');


    /**
     * @api {get} /user/profile Get user profile
     * @apiName Get user profile
     * @apiDescription This endpoint return users
     * @apiHeader Authorization Authorization token
     * @apiGroup Users
     * @apiSampleRequest /backend/api/user/profilec
     */
    Route::get('user/profile', 'UserController@getProfile');

    /**
     * @api {get} /users/{id} Get user by id
     * @apiName Get user by id
     * @apiDescription This endpoint return user
     * @apiHeader Authorization Authorization token
     * @apiGroup Users
     * @apiParam id user_id
     * @apiSampleRequest /backend/api/users/:id
     */
    Route::get('users/{id}', 'UserController@index')->where('id', '[0-9]+');

    /**
     * @api {post} /users Insert user into db
     * @apiName Insert user into db
     * @apiDescription This endpoint create new user
     * @apiHeader Authorization Authorization token
     * @apiGroup Users
     * @apiParam email
     * @apiParam password
     * @apiParam firstname
     * @apiParam lastname
     * @apiSampleRequest /backend/api/users
     */
    Route::post('users', 'UserController@create');

    /**
     * @api {put} /users/{id} Update user by id
     * @apiName Update user by id
     * @apiDescription This endpoint update user model
     * @apiHeader Authorization Authorization token
     * @apiGroup Users
     * @apiParam id
     * @apiParam firstname
     * @apiParam lastname
     * @apiParam email
     * @apiSampleRequest /backend/api/users/:id
     */
    /**
     * @api {delete} /users/{id} Delete user by id
     * @apiName Delete user by id
     * @apiDescription This endpoint remove user from db
     * @apiHeader Authorization Authorization token
     * @apiGroup Users
     * @apiSampleRequest /backend/api/users/{id}
     */
    Route::resource('users', 'UserDepartments', ['only' => ['update', 'destroy']]);


    /**
     * @api {get} /users/company Get users by company
     * @apiName Get user by company
     * @apiDescription This endpoint return users by company
     * @apiHeader Authorization Authorization token
     * @apiGroup Users
     * @apiSampleRequest /backend/api/users/company
     */
    Route::get('users/company', 'UserController@getUsersByCompany');

    /**
     * @api {get} /users/register/link/:department Generate register link
     * @apiName Generate register link
     * @apiDescription This endpoint return user register link
     * @apiHeader Authorization Authorization token
     * @apiParam department_id
     * @apiGroup Users
     * @apiSampleRequest /backend/api/users/register/link/:departmen
     */
    Route::get('users/register/link/{department}', 'UserController@getRegisterLink');

    /**
     * @api {get} /department/user Get list of departments by user
     * @apiName  Get list of departments for logged in user (Administrator).
     * @apiDescription This endpoint returns list of departments for logged in user (Administrator)
     * @apiHeader Authorization Authorization token
     * @apiGroup Department
     * @apiSampleRequest /backend/api/department/user
     */
    Route::get('department/user', 'DepartmentController@getByUser');



    /**
     * @api {get} /department/:id/users Get list of users from department
     * @apiName   Get users by department
     * @apiDescription This endpoint returns list of users from department
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of department (Required)
     * @apiGroup Department
     * @apiSampleRequest /backend/api/department/:id/users
     */
    Route::get('department/{id}/users', 'UserDepartments@getUsersByDepartment');

    /**
     * @api {delete} /department/:department/user/:user Delete user from department
     * @apiName  Delete user from department
     * @apiDescription This endpoint delete the given user from given department
     * @apiHeader Authorization Authorization token
     * @apiParam department ID of department (Required)
     * @apiParam user ID of user (Required)
     * @apiGroup Department
     * @apiSampleRequest /backend/api/department/:department/user/:user
     */
    Route::delete('department/{department}/user/{user}', 'UserDepartments@deleteUserFromDepartment');

    /**
     * @api {post} /users/departments Assign user to department
     * @apiName  Assign user to department
     * @apiDescription This endpoint assign the given user to given department
     * @apiHeader Authorization Authorization token
     * @apiParam department_id ID of department (Required)
     * @apiParam user_id ID of user (Required)
     * @apiGroup User Department
     * @apiSampleRequest /backend/api/users/departments
     */
    /**
     * @api {put} /users/departments/:id Update user from department
     * @apiName  Update user from department
     * @apiDescription This endpoint update the information about user assigment
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of user-department table row
     * @apiParam department_id ID of department (Required)
     * @apiParam user_id ID of user (Required)
     * @apiGroup User Department
     * @apiSampleRequest /backend/api/users/departments/:id
     */
    /**
     * @api {delete} /users/departments/:id Delete user from department
     * @apiName  Delete user from department
     * @apiDescription This endpoint delete the information about user assigment to department
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of user-department table row
     * @apiGroup User Department
     * @apiSampleRequest /backend/api/users/departments/:id
     */
    Route::resource('users/departments', 'UserDepartments', ['only' => ['store', 'update', 'destroy']]);

    /**
     * @api {get} /products/category Get list with all categories
     * @apiName  Get list of product categories
     * @apiDescription This endpoint return list of product categories
     * @apiHeader Authorization Authorization token
     * @apiGroup Products Category
     * @apiSampleRequest /backend/api/products/category
     */

    /**
     * @api {post} /product Add new product
     * @apiName  Add new product
     * @apiDescription This endpoint create the new product
     * @apiHeader Authorization Authorization token
     * @apiParam price of product (Required)
     * @apiGroup Products
     * @apiSampleRequest backend/api/product
     */

    /**
     * @api {put} /product/:id Update product
     * @apiName  Update product
     * @apiDescription This endpoint update the information about product
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of product (Required)
     * @apiParam price of product
     * @apiSampleRequest /backend/api/product/:id
     */

    /**
     * @api {delete} /product/:id Delete product
     * @apiName  Delete product
     * @apiDescription This endpoint delete the products
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of product
     * @apiGroup Products
     * @apiSampleRequest /backend/api/product/:id
     */

    Route::resource('products', 'ProductController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /departments Get list of all departments by company
     * @apiName  Get list of all departments for logged in user (Administrator).
     * @apiDescription This endpoint returns list of departments for logged in user (Administrator)
     * @apiHeader Authorization Authorization token
     * @apiGroup Department
     * @apiSampleRequest /backend/api/departments
     */

    /**
     * @api {post} /department Add new department
     * @apiName  Insert new department
     * @apiDescription This endpoint insert new department
     * @apiHeader Authorization Authorization token
     * @apiParam title Title of department
     * @apiGroup Department
     * @apiSampleRequest /backend/api/department
     */

    /**
     * @api {put} /department/:id Update department
     * @apiName  Update  department
     * @apiDescription This endpoint updates information department
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of department (Required)
     * @apiParam title Title of department
     * @apiGroup Department
     * @apiSampleRequest /backend/api/department
     */

    /**
     * @api {delete} /department/{id} Delete department
     * @apiName  Delete  department
     * @apiDescription This endpoint delete the information about department
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of department (Required)
     * @apiGroup Department
     * @apiSampleRequest /backend/api/department/:id
     */
    Route::resource('departments', 'DepartmentController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {post} /module Add new module
     * @apiName  Add new product
     * @apiDescription This endpoint create the new module
     * @apiHeader Authorization Authorization token
     * @apiParam title Title of product (Required)
     * @apiParam code Code for module
     * @apiGroup Modules
     * @apiSampleRequest backend/api/module
     */
    /**
     * @api {put} /module/:id Update module
     * @apiName  Update module
     * @apiDescription This endpoint update the information about module
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of module (Required)
     * @apiParam title Title of module
     * @apiParam code Code of module
     * @apiGroup Modules
     * @apiSampleRequest /backend/api/module/:id
     */
    /**
     * @api {delete} /module/:id Delete module
     * @apiName  Delete module
     * @apiDescription This endpoint delete the module
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of module
     * @apiGroup Modules
     * @apiSampleRequest /backend/api/module/:id
     */
    Route::resource('module', 'ModulesController', ['only' => ['store', 'update', 'destroy', 'index']]);



    /**
     * @api {get} /quotes Get quotes
     * @apiName Get list of quotes
     * @apiDescription This endpoint get list of quotes
     * @apiGroup Quote
     * @apiSampleRequest /backend/api/quotes
     */

    /**
     * @api {post} /quotes Add new quote
     * @apiName  Add new quote
     * @apiDescription This endpoint adds new quote
     * @apiHeader Authorization Authorization token
     * @apiParam title of quote
     * @apiGroup Quote
     * @apiSampleRequest /backend/api/quotes/:id
     */

    /**
     * @api {put} /quotes/:id Update quote
     * @apiName  Update quote data
     * @apiDescription This endpoint update quote information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of quote
     * @apiParam title of quote
     * @apiGroup Quote
     * @apiSampleRequest /backend/api/quotes/:id
     */

    /**
     * @api {delete} /quotes/:id Delete quote
     * @apiName  Delete quote data
     * @apiDescription This endpoint delete quote information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of quote
     * @apiGroup Quote
     * @apiSampleRequest /backend/api/quotes/{id}/:id
     */

    Route::resource('quotes', 'QuoteController', ['only' => ['store', 'update', 'destroy', 'index']]);


    /**
     * @api {post} /currency Add new currency
     * @apiName  Add new currency
     * @apiDescription This endpoint create the new currency
     * @apiHeader Authorization Authorization token
     * @apiParam sign of currency (Required)
     * @apiGroup Currency
     * @apiSampleRequest /backend/api/currency
     */
    /**
     * @api {put} /currency/:id Update currency
     * @apiName  Update currency
     * @apiDescription This endpoint update the information about currency
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of currency (Required)
     * @apiParam sign of currency
     * @apiGroup Currency
     * @apiSampleRequest /backend/api/currency/:id
     */
    /**
     * @api {delete} /currency/:id Delete currency
     * @apiName  Delete currency
     * @apiDescription This endpoint delete the currency
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of currency
     * @apiGroup Currency
     * @apiSampleRequest /backend/api/currency/:id
     */
    /** @api {get} /currency Get currencies
     * @apiName  Get list of currencies
     * @apiDescription This endpoint return the list of currencies
     * @apiHeader Authorization Authorization token
     * @apiGroup Currency
     * @apiSampleRequest /backend/api/currency
     */
    Route::resource('currency', 'CurrencyController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {post} /products/category Add new product category
     * @apiName  Add new product category
     * @apiDescription This endpoint create the new product category
     * @apiHeader Authorization Authorization token
     * @apiParam company_id Company id (Required)
     * @apiGroup Products Category
     * @apiSampleRequest /backend/api/products/category
     */
    /**
     * @api {put} /products/category/:id Update product category
     * @apiName  Update product category
     * @apiDescription This endpoint update the information about product category
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of product category (Required)
     * @apiGroup Products Category
     * @apiSampleRequest /backend/api/products/category/:id
     */
    /**
     * @api {delete} /products/category/:id Delete product category
     * @apiName  Delete product category
     * @apiDescription This endpoint delete product category
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of product category
     * @apiGroup Products Category
     * @apiSampleRequest /backend/api/products/category/:id
     */
    /**
     * @api {get} /products/category Get list with all categories
     * @apiName  Get list of product categories
     * @apiDescription This endpoint return list of product categories
     * @apiHeader Authorization Authorization token
     * @apiGroup Products Category
     * @apiSampleRequest /backend/api/products/category
     */
    Route::resource('product/category', 'ProductCategoryController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {post} /product/status Add new product status
     * @apiName  Add new product status
     * @apiDescription This endpoint create the new product status
     * @apiHeader Authorization Authorization token
     * @apiParam company_id
     * @apiGroup Products Status
     * @apiSampleRequest /backend/api/product/status
     */

    /**
     * @api {put} /product/status/:id Update product status
     * @apiName  Update product status
     * @apiDescription This endpoint update the information about product status
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of product status (Required)
     * @apiParam company_id
     * @apiGroup Products Status
     * @apiSampleRequest /backend/api/product/status/:id
     */

    /**
     * @api {delete} /product/status/:id Delete product status
     * @apiName  Delete product status
     * @apiDescription This endpoint delete product status
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of product status
     * @apiGroup Products Status
     * @apiSampleRequest /backend/api/product/status/:id
     */

    /**
     * @api {get} /product/status Get list with all statuses
     * @apiName  Get list of product statuses
     * @apiDescription This endpoint return list of product statuses
     * @apiHeader Authorization Authorization token
     * @apiGroup Products Status
     * @apiSampleRequest /backend/api/product/status
     */
    Route::resource('product/status', 'ProductStatusController', ['only' => ['store', 'update', 'destroy', 'index']]);


    /**
     * @api {get} /measure Get list with all measurements
     * @apiName  Get list of measurements
     * @apiDescription This endpoint return list of measurements
     * @apiHeader Authorization Authorization token
     * @apiGroup Measure Unit
     * @apiSampleRequest /backend/api/measure
     */
    /**
     * @api {post} /measure Add new measurement unit
     * @apiName  Add new measurement unit
     * @apiDescription This endpoint create the new measurement unit
     * @apiHeader Authorization Authorization token
     * @apiGroup Measure Unit
     * @apiSampleRequest /backend/api/measure
     */
    /**
     * @api {put} /measure/:id Update measurement unit
     * @apiName  Update measurement unit
     * @apiDescription This endpoint update the information about measurement unit
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of measure unit (Required)
     * @apiGroup Measure Unit
     * @apiSampleRequest /backend/api/measure
     */
    /**
     * @api {delete} /measure/:id Delete measurement unit
     * @apiName  Delete measurement unit
     * @apiDescription This endpoint delete measurement unit
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of measure unit
     * @apiGroup Measure Unit
     * @apiSampleRequest /backend/api/measure/:id
     */
    Route::resource('measurements', 'MeasureUnitController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {post} /orders Add new order
     * @apiName  Add new order
     * @apiDescription This endpoint create the new order
     * @apiHeader Authorization Authorization token
     * @apiParam title of order
     * @apiParam amount of order
     * @apiGroup Orders
     * @apiSampleRequest /backend/api/orders
     */
    /**
     * @api {put} /orders/:id Update order
     * @apiName  Update order
     * @apiDescription This endpoint update the vat value
     * @apiHeader Authorization Authorization token
     * @apiParam title of order
     * @apiParam amount of order
     * @apiGroup Orders
     * @apiSampleRequest /backend/api/orders
     */

    /**
     * @api {delete} /orders/:id Delete order
     * @apiName  Delete order
     * @apiDescription This endpoint delete order
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of order
     * @apiGroup Orders
     * @apiSampleRequest /backend/api/orders/:id
     */

    /**
     * @api {get} /orders Get all orders
     * @apiName   Get all orders
     * @apiDescription This endpoint return list of orders
     * @apiHeader Authorization Authorization token
     * @apiGroup Orders
     * @apiSampleRequest /backend/api/orders
     */

    Route::resource('orders', 'OrderController', ['only' => ['store', 'update', 'destroy', 'index', 'show']]);

    /**
     * @api {post} /order/products Add new product to assigned order
     * @apiName  Add new product to order
     * @apiDescription This endpoint add product to order
     * @apiHeader Authorization Authorization token
     * @apiParam order_id id for order (Required)
     * @apiParam product_id id of product for order (Required)
     * @apiGroup Order Products
     * @apiSampleRequest /backend/api/order/products
     */
    /**
     * @api {put} /order/products/:id Update products of order
     * @apiName  Update products of order
     * @apiDescription This endpoint update the information of products for order
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of order product
     * @apiParam order_id id for order (Required)
     * @apiParam product_id id of product for order (Required)
     * @apiGroup Order Products
     * @apiSampleRequest /backend/api/order/products/:id
     */
    /**
     * @api {delete} /order/products/:id Delete product from order
     * @apiName  Delete product from order
     * @apiDescription This endpoint delete product from order
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of order product
     * @apiGroup Order Products
     * @apiSampleRequest /backend/api/order/products/:id
     */
    /**
     * @api {get} /order/products Get all orders
     * @apiName   Get all orders
     * @apiDescription This endpoint return list of orders
     * @apiHeader Authorization Authorization token
     * @apiGroup Orders
     * @apiSampleRequest /backend/api/order/products
     */
    Route::resource('order/products', 'OrderProductsController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {post} /order/types Add new order type
     * @apiName  Add new order type
     * @apiDescription This endpoint add new order type
     * @apiHeader Authorization Authorization token
     * @apiParam company_id of order type
     * @apiGroup Order Types
     * @apiSampleRequest /backend/api/order/types
     */

    /**
     * @api {put} /order/types/:id Update order type
     * @apiName  Update order type
     * @apiDescription This endpoint update the order type
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of order type
     * @apiParam company_id of order type
     * @apiGroup Order Types
     * @apiSampleRequest /backend/api/order/types/:id
     */

    /**
     * @api {delete} /order/types/:id Delete order type
     * @apiName  Delete order type
     * @apiDescription This endpoint delete order type
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of order type
     * @apiGroup Order Types
     * @apiSampleRequest /backend/api/order/types/:id
     */

    /**
     * @api {get} /order/types Get all order types
     * @apiName   Get all order types
     * @apiDescription This endpoint return list of order types
     * @apiHeader Authorization Authorization token
     * @apiGroup Order Types
     * @apiSampleRequest /backend/api/order/types
     */

    Route::resource('order/types', 'OrderTypeController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {post} /order/status Add new order status
     * @apiName  Add new order status
     * @apiDescription This endpoint add new order status
     * @apiHeader Authorization Authorization token
     * @apiParam company_id of order status
     * @apiGroup Order Status
     * @apiSampleRequest /backend/api/order/status
     */
    /**
     * @api {put} /order/status/:id Update order status
     * @apiName  Update order status
     * @apiDescription This endpoint update the order status
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of order status
     * @apiParam company_id of order status
     * @apiGroup Order Status
     * @apiSampleRequest /backend/api/order/status/:id
     */
    /**
     * @api {delete} /order/status/:id Delete order status
     * @apiName  Delete order status
     * @apiDescription This endpoint delete order status
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of order status
     * @apiGroup Order Status
     * @apiSampleRequest /backend/api/order/status/:id
     */
    /**
     * @api {get} /order/status Get all order status
     * @apiName   Get all order status
     * @apiDescription This endpoint return list of order status
     * @apiHeader Authorization Authorization token
     * @apiGroup Order Status
     * @apiSampleRequest /backend/api/order/status
     */
    Route::resource('order/status', 'OrderStatusController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /company Get list
     * @apiName Get list of companies
     * @apiDescription This endpoint
     * @apiGroup Company
     * @apiSampleRequest /backend/api/company
     */

    /**
     * @api {post} /company Add new company
     * @apiName  Add new company
     * @apiDescription This endpoint add new company
     * @apiHeader Authorization Authorization token
     * @apiParam title company title
     * @apiGroup Company
     * @apiSampleRequest /backend/api/company
     */

    /**
     * @api {put} /company/:id Update company
     * @apiName  Update company data
     * @apiDescription This endpoint update company information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company
     * @apiParam title company title
     * @apiGroup Company
     * @apiSampleRequest /backend/api/company
     */

    /**
     * @api {delete} /company/:id Delete company
     * @apiName  Delete company
     * @apiDescription This endpoint delete company
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company
     * @apiGroup Company
     * @apiSampleRequest /backend/api/company/:id
     */

    Route::resource('company', 'CompanyController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /contact Get list
     * @apiName Get list of contact
     * @apiDescription This endpoint
     * @apiGroup Contact
     * @apiSampleRequest /backend/api/contact
     */

    /**
     * @api {post} /contact Add new contact
     * @apiName  Add new contact
     * @apiDescription This endpoint add new contact
     * @apiHeader Authorization Authorization token
     * @apiParam firstname of contact
     * @apiGroup Contact
     * @apiSampleRequest /backend/api/contact
     */

    /**
     * @api {put} /contact/:id Update contact
     * @apiName  Update contact data
     * @apiDescription This endpoint update contact information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of contact
     * @apiParam firstname of contact
     * @apiGroup Contact
     * @apiSampleRequest /backend/api/contact/:id
     */

    /**
     * @api {delete} /contact/:id Delete contact
     * @apiName  Delete contact
     * @apiDescription This endpoint delete contact
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of contact
     * @apiGroup Contact
     * @apiSampleRequest /backend/api/contact/:id
     */

    Route::resource('contacts', 'ContactController', ['only' => ['index', 'store', 'update', 'destroy']]);

    /**
     * @api {delete} /issue/{id} Remove issue by id
     * @apiName Remove issue by id
     * @apiDescription This endpoint remove issue
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue
     * @apiParam {Number} issue_id id of contact
     * @apiSampleRequest /backend/api/issue/:issue_id
     */
    /**
     * @api {get} /issue/{id} Get issue by id
     * @apiName Get issue by id
     * @apiDescription This endpoint return issue by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue
     * @apiParam {Number} issue id of issue
     * @apiSampleRequest /backend/api/issue/:issue_id
     */
    /**
     * @api {put} /issue/{id} Update issue by id
     * @apiName Update issue by id
     * @apiDescription This endpoint update issue by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue
     * @apiParam {String} title title for issue
     * @apiParam {String} description description for issue
     * @apiParam {String} start start Date Time for issue, format(YYYY-MM-DD HH:MM:SS)
     * @apiParam {String} end limit Date Time for issue, format (YYYY-MM-DD HH:MM:SS)
     * @apiParam {Number} project_id Id of project
     * @apiParam {Number} is_important Numerical boolean value (1 = true, 0 = false)
     * @apiParam {Number} type_id type of issue
     * @apiParam {Number} status_id status of issue
     * @apiParam {Number} responsible id of user who is responsible for issue
     * @apiParam {Number} created_by id of user who created issue
     * @apiSampleRequest /backend/api/issue/:issue_id
     */
    /**
     * @api {post} /issue Insert issue
     * @apiName Insert new issue
     * @apiDescription This endpoint insert new issue
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue
     * @apiParam {String} title title for issue
     * @apiParam {String} description description for issue
     * @apiParam {String} start start Date Time for issue, format(YYYY-MM-DD HH:MM:SS)
     * @apiParam {String} end limit Date Time for issue, format (YYYY-MM-DD HH:MM:SS)
     * @apiParam {Number} is_important Numerical boolean value (1 = true, 0 = false)
     * @apiParam {Number} project_id Id of project
     * @apiParam {Number} type_id type of issue
     * @apiParam {Number} status_id status of issue
     * @apiParam {Number} responsible id of user who is responsible for issue
     * @apiParam {Number} created_by id of user who created issue
     * @apiSampleRequest /backend/api/issue
     */
    Route::resource('issue', 'IssueController');

    /**
     * @api {delete} /issue/status/{id} Remove issue status by id
     * @apiName Remove issue status by id
     * @apiDescription This endpoint remove issue status
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue Status
     * @apiParam {Number} issue_status id of issue status
     * @apiSampleRequest /backend/api/issue/status/:issue_status
     */
    /**
     * @api {get} /issue/status/{id} Get issue status by id
     * @apiName Get issue status by id
     * @apiDescription This endpoint return issue status by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue Status
     * @apiParam {Number} issue_status id of issue stratus
     * @apiSampleRequest /backend/api/issue/status/:issue_status
     */
    /**
     * @api {put} /issue/{id} Update issue status by id
     * @apiName Update issue status by id
     * @apiDescription This endpoint update issue status by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue Status
     * @apiParam {String} title title for issue status
     * @apiSampleRequest /backend/api/issue/status/:issue_status
     */
    /**
     * @api {post} /issue/status Insert issue
     * @apiName Insert new issue status
     * @apiDescription This endpoint insert new issue status
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue Status
     * @apiParam {String} title title for issue status
     * @apiSampleRequest /backend/api/issue
     */
    Route::resource('issue/status', 'IssueStatusController');

    /**
     * @api {delete} /issue/type/{id} Remove issue type by id
     * @apiName Remove issue type by id
     * @apiDescription This endpoint remove issue type
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue Type
     * @apiParam {Number} issue_type id of issue type
     * @apiSampleRequest /backend/api/issue/:issue_type
     */
    /**
     * @api {get} /issue/type/{id} Get issue type by id
     * @apiName Get issue type by id
     * @apiDescription This endpoint return issue type by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue Type
     * @apiParam {Number} issue_type id of issue type
     * @apiSampleRequest /backend/api/issue/type/:issue_type
     */
    /**
     * @api {put} /issue/type/{id} Update issue type by id
     * @apiName Update issue type by id
     * @apiDescription This endpoint update issue type by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue Type
     * @apiParam {String} title title for issue type
     * @apiSampleRequest /backend/api/issue/type/:issue_type
     */
    /**
     * @api {post} /issue/type Insert issue type
     * @apiName Insert new issue type
     * @apiDescription This endpoint insert new issue type
     * @apiHeader Authorization Authorization token
     * @apiGroup Issue Type
     * @apiParam {String} title title for issue type
     * @apiSampleRequest /backend/api/issue/type
     */
    Route::resource('issue/type', 'IssueTypeController');

    /**
     * @api {delete} /leads/statuses/{id} Delete lead status by id
     * @apiName Delete lead status by id
     * @apiDescription This endpoint remove lead status from db
     * @apiHeader Authorization Authorization token
     * @apiGroup Lead Status
     * @apiParam id Lead status id
     * @apiSampleRequest /backend/api/leads/statuses/:id
     */
    Route::delete('leads/statuses/{id}', 'LeadStatusController@destroy');

    Route::get('files', 'FileEntryController@index');
    Route::get('files/{id}', 'FileEntryController@index');
    Route::post('files', 'FileEntryController@storeFile');
    Route::delete('files/{id}', 'FileEntryController@destroy');

    Route::get('files/download/{id}', 'FileEntryController@download');



    /**
     * @api {delete} /projects Remove project by id
     * @apiName Remove project by id
     * @apiDescription This endpoint remove project by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Project
     * @apiParam project_id
     * @apiSampleRequest /backend/api/projects/:project_id
     */
    /**
     * @api {get} /projects/{id} Get project by id
     * @apiName Get project by id
     * @apiDescription This endpoint return project by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Project
     * @apiParam project_id
     * @apiSampleRequest /backend/api/projects/:project_id
     */
    /**
     * @api {get} /projects Get all projects
     * @apiName Get all projects
     * @apiDescription This endpoint return all projects
     * @apiHeader Authorization Authorization token
     * @apiGroup Project
     * @apiSampleRequest /backend/api/projects
     */
    /**
     * @api {put} /projects/{id} Update project by id
     * @apiName Update project by id
     * @apiDescription This endpoint update project id
     * @apiHeader Authorization Authorization project
     * @apiGroup Project
     * @apiParam name
     * @apiParam description
     * @apiParam start_time DateTime
     * @apiParam deadline DateTime
     * @apiParam project_manager_id Id of user who is project manager
     * @apiParam estimation
     * @apiParam estimation_unit One of values: minutes, hours, days
     * @apiParam is_important
     * @apiParam is_finished
     * @apiParam creator_id
     * @apiSampleRequest /backend/api/projects/:project_id
     */
    /**
     * @api {post} /projects Insert new project
     * @apiName Insert new project
     * @apiDescription This endpoint create new project
     * @apiHeader Authorization Authorization token
     * @apiGroup Project
     * @apiParam name
     * @apiParam description
     * @apiParam start_time DateTime
     * @apiParam deadline DateTime
     * @apiParam estimation
     * @apiParam estimation_unit One of values: minutes, hours, days
     * @apiParam is_important
     * @apiParam is_finished
     * @apiParam responsible_user_id
     * @apiParam creator_id
     * @apiSampleRequest /backend/api/projects
     */
    Route::resource('projects', 'ProjectController', ['only' => ['store', 'update', 'destroy', 'index', 'show']]);
    /**
     * @api {get} /projects/company/{company_id} Get projects company
     * @apiName Get projects by company
     * @apiDescription This endpoint return projects by company
     * @apiHeader Authorization Authorization token
     * @apiGroup Project
     * @apiParam company_id
     * @apiSampleRequest /backend/api/projects/company/:company_id
     */
    Route::get('projects/company/{company_id}/{page?}/{limit?}', 'ProjectController@getProjectsByCompany');
    Route::get('projects/{id}', 'ProjectController@index');


    /**
     * @api {post} /lead/products Add new lead product
     * @apiName  Add new lead product
     * @apiDescription This endpoint add new lead product
     * @apiHeader Authorization Authorization token
     * @apiParam lead_id id of lead
     * @apiParam product_id id of product
     * @apiGroup Lead Products
     * @apiSampleRequest /backend/api/lead/products
     */

    /**
     * @api {put} /lead/products/:id Update lead products
     * @apiName  Update leads products
     * @apiDescription This endpoint update lead products
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of lead product
     * @apiParam lead_id id of lead
     * @apiParam product_id id of product
     * @apiGroup Lead Products
     * @apiSampleRequest /backend/api/lead/products/:id
     */

    /**
     * @api {delete} /lead/products/:id Delete lead product
     * @apiName  Delete lead product
     * @apiDescription This endpoint delete lead product
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of lead product
     * @apiGroup Lead Products
     * @apiSampleRequest /backend/api/lead/products/:id
     */

    /**
     * @api {get} /lead/products Get lead products
     * @apiName Get lead products
     * @apiDescription This endpoint return lead products
     * @apiHeader Authorization Authorization token
     * @apiGroup Lead Products
     * @apiSampleRequest /backend/api/lead/products
     */

    Route::resource('lead/products', 'LeadProductsController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {post} room Add new user to room
     * @apiName  Add new user to room
     * @apiDescription This endpoint add new user to room
     * @apiHeader Authorization Authorization token
     * @apiParam room_id id of room
     * @apiParam user_id id of user
     * @apiGroup Chat Room Users
     * @apiSampleRequest /backend/api/room/users
     */
    /**
     * @api {put} room/users/:id Update chat room
     * @apiName  Update chat room
     * @apiDescription This endpoint update lead products
     * @apiHeader Authorization Authorization token
     * @apiParam title title for room
     * @apiParam status 1 = active, 0 = disabled
     * @apiParam administrator id of user administrator of room
     * @apiParam company_id id of company
     * @apiGroup Chat Room Users
     * @apiSampleRequest /backend/api/room/users/:id
     */
    /**
     * @api {delete} /room/users/:id Remove user from room
     * @apiName Remove chat room
     * @apiDescription This endpoint remove chat room
     * @apiHeader Authorization Authorization token
     * @apiParam id of chat room
     * @apiGroup Chat Room Users
     * @apiSampleRequest /backend/api/room/users/:id
     */
    Route::resource('room/users', 'RoomUsersController', ['only' => ['store', 'update', 'destroy']]);

    /**
     * @api {post} /message/ Add new message
     * @apiName  Add new message
     * @apiDescription This endpoint saves the message from chat
     * @apiHeader Authorization Authorization token
     * @apiParam room_id id of room
     * @apiParam sender id of user
     * @apiParam message message content
     * @apiGroup Chat Messages
     * @apiSampleRequest /backend/api/message
     */
    /**
     * @api {put} /message/:id Update chat message
     * @apiName  Update chat message
     * @apiDescription This endpoint updates chat messages
     * @apiHeader Authorization Authorization token
     * @apiParam id id of chat message
     * @apiParam room_id id of room
     * @apiParam sender id of sender
     * @apiParam message content of message
     * @apiGroup Chat Messages
     * @apiSampleRequest /backend/api/message/:id
     */
    /**
     * @api {delete} /message/:id Remove chat message
     * @apiName Remove chat message
     * @apiDescription This endpoint remove chat message
     * @apiHeader Authorization Authorization token
     * @apiParam id of chat message
     * @apiGroup Chat Messages
     * @apiSampleRequest /backend/api/message/:id
     */
    Route::resource('message', 'RoomMessagesController', ['only' => ['store', 'update', 'destroy']]);


    /**
     * @api {get} /message/get/:room_id/:page/:limit Get conversations of company
     * @apiName Get messages for specific room with pagination
     * @apiDescription This endpoint return messages for specific room with pagination function
     * @apiHeader Authorization Authorization token
     * @apiParam room_id id of room
     * @apiParam page=1 page number
     * @apiParam limit=15 limit of entries for history
     * @apiGroup Chat Messages
     * @apiSampleRequest /backend/api/message/get/:room_id/:page/:limit
     */
    Route::get('message/get/{room}/{page?}/{offset?}', 'RoomMessagesController@getMessages');


    /**
     * @api {get} /message/period/:date_start/:room_id/:page/:limit Get conversations by start time
     * @apiName Get messages for specific room with pagination by start time
     * @apiDescription This endpoint return messages for specific room with pagination function
     * @apiHeader Authorization Authorization token
     * @apiParam date_start timestamp format start date
     * @apiParam room_id id of room
     * @apiParam page=1 page number
     * @apiParam limit=15 limit of entries for history
     * @apiGroup Chat Messages
     * @apiSampleRequest /backend/api/message/period/:date_start/:room_id/:page/:limit
     */
    Route::get('message/period/{from}/{room_id}/{page?}/{offset?}', 'RoomMessagesController@getHistoryByPeriods');


    /**
     * @api {post} /message/upload Upload file for conversation
     * @apiName Upload file message
     * @apiDescription This endpoint upload file to server and create thumbnail for images (used for attachements)
     * @apiHeader Authorization Authorization token
     * @apiParam file file to upload (Required)
     * @apiParam room_id id of room (Required)
     * @apiGroup Chat Messages
     * @apiSampleRequest /message/upload
     */
    Route::post('message/upload', 'RoomMessagesController@saveChatFile');

    /**
     * @api {post} /upload/emoji Upload file for chat
     * @apiName Upload emoji
     * @apiDescription This endpoint upload file to server and create emoji
     * @apiHeader Authorization Authorization token
     * @apiParam file file to upload (Required)
     * @apiGroup Chat Messages
     * @apiSampleRequest /upload/emoji
     */
    Route::post('upload/emoji', 'ChatSmileysController@uploadEmoji');

    /**
     * @api {post} /upload/sound Upload file for chat
     * @apiName Upload sound
     * @apiDescription This endpoint upload file to server and create sound
     * @apiHeader Authorization Authorization token
     * @apiParam file file to upload (Required)
     * @apiGroup Chat Settings
     * @apiSampleRequest /upload/sound
     */
    Route::post('upload/sound', 'ChatSoundController@uploadSound');

    /**
     * @api {get} /onlinevisitors Get all online visitors
     * @apiName Get all online visitors
     * @apiDescription This endpoint return all online visitors
     * @apiHeader Authorization Authorization token
     * @apiGroup Visitors
     * @apiSampleRequest /onlinevisitors
     */
    Route::get('onlinevisitors/{page?}/{limit?}', 'VisitorController@onlineVisitors');

    /**
     * @api {get} /visitors Get all visitors
     * @apiName Get all visitors
     * @apiDescription This endpoint return all visitors
     * @apiHeader Authorization Authorization token
     * @apiGroup Visitors
     * @apiSampleRequest /visitors
     */
    Route::get('visitors', 'VisitorController@index');

    /**
     * @api {post} telegram/bot Configure telegram bot to company
     * @apiName  Add company telegram Bot
     * @apiDescription Add company telegram Bot
     * @apiHeader Authorization Authorization token
     * @apiParam company_id company id
     * @apiParam token Telegram bot token
     * @apiGroup Telegram
     * @apiSampleRequest /backend/api/telegram/bot
     */
    Route::post('telegram/bot', 'TelegramController@store');

    /**
     * @api {delete} telegram/bot/{id} Remove telegram bot
     * @apiName Remove telegram bot
     * @apiDescription Remove telegram bot
     * @apiHeader Authorization Authorization token
     * @apiParam id Telegram Bot id
     * @apiGroup Telegram
     * @apiSampleRequest /backend/api/telegram/bot/:id
     */
    Route::delete('telegram/bot/{id}', 'TelegramController@destroy');

    Route::post('room/users/online', 'RoomUsersController@viewMsg');


    /**
     * @api {post} /notification/refresh/ Add or Update last viewed notification
     * @apiName  Update last viewed notification
     * @apiDescription This endpoint save information about last viewed notification
     * @apiHeader Authorization Authorization token
     * @apiGroup Notification
     * @apiSampleRequest /backend/api/notification/refresh
     */
    Route::post('notification/refresh', 'NotificationController@refresh');

    /**
     * @api {get} /notification/user/:user Get all unreaded notifications
     * @apiName Get all unreaded notifications
     * @apiDescription This endpoint return all unreaded notifications
     * @apiHeader Authorization Authorization token
     * @apiParam user id of user
     * @apiGroup Notification
     * @apiSampleRequest /backend/api/notification/user/:user
     */
    Route::get('notification/user', 'NotificationController@getUnreaded');

    /**
     * @api {get} /domains Get list
     * @apiName Get list of domains
     * @apiDescription This endpoint
     * @apiGroup Domain
     * @apiSampleRequest /backend/api/domains
     */

    /**
     * @api {post} /domains Add new domains
     * @apiName  Add new domains
     * @apiDescription This endpoint add new domains
     * @apiHeader Authorization Authorization token
     * @apiParam name of domain
     * @apiParam type of domain
     * @apiGroup Domain
     * @apiSampleRequest /backend/api/domains
     */

    /**
     * @api {put} /domains/:id Update domains
     * @apiName  Update domains data
     * @apiDescription This endpoint update domains information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of domains
     * @apiParam name
     * @apiGroup Domain
     * @apiSampleRequest /backend/api/domains/:id
     */

    /**
     * @api {delete} /domains/:id Delete domains
     * @apiName  Delete domains
     * @apiDescription This endpoint delete domains
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of domains
     * @apiGroup Domain
     * @apiSampleRequest /backend/api/domains/:id
     */
    Route::resource('domains', 'DomainController', ['only' => ['show', 'store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /domain/records Get list
     * @apiName Get list of domain/records
     * @apiDescription This endpoint
     * @apiGroup DomainRecord
     * @apiSampleRequest /backend/api/domain/records
     */

    /**
     * @api {post} /domain/records Add new domain/records
     * @apiName  Add new domain/records
     * @apiDescription This endpoint add new domain/records
     * @apiHeader Authorization Authorization token
     * @apiParam name of domain record
     * @apiParam domain_id of domain record
     * @apiGroup DomainRecord
     * @apiSampleRequest /backend/api/domain/records
     */

    /**
     * @api {put} /domain/records/:id Update domain/records
     * @apiName  Update domain/records data
     * @apiDescription This endpoint update domain/records information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of domain/records
     * @apiParam name of domain record
     * @apiGroup DomainRecord
     * @apiSampleRequest /backend/api/domain/records/:id
     */

    /**
     * @api {delete} /domain/records/:id Delete domain/records
     * @apiName  Delete domain/records
     * @apiDescription This endpoint delete domain/records
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of domain/records
     * @apiGroup DomainRecord
     * @apiSampleRequest /backend/api/domain/records/:id
     */
    Route::resource('domain/records', 'DomainRecordController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {delete} /error/{id} Remove errors from list
     * @apiName Remove error
     * @apiDescription This endpoint remove error
     * @apiHeader Authorization Authorization token
     * @apiGroup Errors
     * @apiParam {Number} id id of error
     * @apiSampleRequest /backend/api/error/:id
     */
    /**
     * @api {get} /error Get list of errors
     * @apiName Get list of errors
     * @apiDescription This endpoint return list of errors
     * @apiHeader Authorization Authorization token
     * @apiGroup Errors
     * @apiParam {Number} id id of error
     * @apiSampleRequest /backend/api/error
     */
    /**
     * @api {put} /error/{id} Update errors translation by id
     * @apiName Update error translation by id
     * @apiDescription This endpoint update message of error selected by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Errors
     * @apiParam {Number} id  of error
     * @apiParam {String} code  of error
     * @apiParam {String} type of error
     * @apiParam {Array} i18n i18n[content]
     * @apiSampleRequest /backend/api/error/:id
     */
    /**
     * @api {post} /error Insert new errors
     * @apiName Insert new errors
     * @apiDescription This endpoint insert new error
     * @apiHeader Authorization Authorization token
     * @apiGroup Errors
     * @apiParam {String} code  of error
     * @apiParam {String} type of error
     * @apiParam {Array} i18n i18n[content]
     * @apiSampleRequest /backend/api/error
     */
    Route::resource('errors', 'ErrorController', ['only' => ['index', 'store', 'update', 'destroy']]);

    /**
     * @api {delete} /translation/{id} Remove translation term
     * @apiName Remove translation
     * @apiDescription This endpoint remove translation
     * @apiHeader Authorization Authorization token
     * @apiGroup Translation
     * @apiParam {Number} id id of translation
     * @apiSampleRequest /backend/api/translation/:id
     */
    /**
     * @api {get} /translation Get list of translation
     * @apiName Get list of errors
     * @apiDescription This endpoint return list of errors
     * @apiHeader Authorization Authorization token
     * @apiGroup Translation
     * @apiParam {Number} id id of translation
     * @apiSampleRequest /backend/api/translation
     */
    /**
     * @api {put} /translation/{id} Update translation by id
     * @apiName Update translation by id
     * @apiDescription This endpoint update translation selected by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Translation
     * @apiParam {Number} id  of translation
     * @apiParam {String} code  of translation
     * @apiParam {String} type of translation
     * @apiParam {Array} i18n i18n[content]
     * @apiSampleRequest /backend/api/translation/:id
     */
    /**
     * @api {post} /translation Insert new translation
     * @apiName Insert new translation
     * @apiDescription This endpoint insert new translation
     * @apiHeader Authorization Authorization token
     * @apiGroup Translation
     * @apiParam {String} code  of translation
     * @apiParam {Array} i18n i18n[content]
     * @apiSampleRequest /backend/api/translation
     */
    Route::resource('translation', 'TranslationController', ['only' => ['index', 'store', 'update', 'destroy']]);

    /**
     * @api {delete} /example/{id} Remove example record
     * @apiName Remove example
     * @apiDescription This endpoint remove example records
     * @apiHeader Authorization Authorization token
     * @apiGroup Example
     * @apiParam {Number} id id of example
     * @apiSampleRequest /backend/api/example/:id
     */
    /**
     * @api {get} /example Get list of examples
     * @apiName Get list of examples
     * @apiDescription This endpoint return list of examples
     * @apiHeader Authorization Authorization token
     * @apiGroup Example
     * @apiParam {Number} id id of example
     * @apiSampleRequest /backend/api/example
     */
    /**
     * @api {put} /example/{id} Update example by id
     * @apiName Update example by id
     * @apiDescription This endpoint update example record selected by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Example
     * @apiParam {Number} id  of example
     * @apiParam {Number} number number for example
     * @apiParam {String} string for example
     * @apiParam {String} i18n i18n[title]
     * @apiSampleRequest /backend/api/example/:id
     */
    /**
     * @api {post} /example Insert new example
     * @apiName Insert new example
     * @apiDescription This endpoint insert new example
     * @apiHeader Authorization Authorization token
     * @apiGroup Example
     * @apiParam {Number} number number for example
     * @apiParam {String} string for example
     * @apiParam {String} i18n i18n[title]
     * @apiSampleRequest /backend/api/example
     */
    Route::resource('example', 'ExampleController', ['only' => ['index', 'store', 'update', 'destroy']]);

    /**
     * @api {post} /user/settings Set setting value for user
     * @apiName Set setting value current user
     * @apiDescription This endpoint insert new setting
     * @apiHeader Authorization Authorization token
     * @apiGroup Settings
     * @apiParam {String} setting created from combiantion of setting code and value example (language:1,menu_height:200)
     * @apiSampleRequest /backend/api/user/settings
     */
    Route::post('user/settings', 'SettingsController@set');

    /**
     * @api {GET} /user/settings/:code Get setting by code
     * @apiName Get setting by code for current user
     * @apiDescription This endpoint return setting with value by code for current user
     * @apiHeader Authorization Authorization token
     * @apiGroup Settings
     * @apiParam {String} code setting code
     * @apiSampleRequest /backend/api/user/settings/:code
     */
    Route::get('user/settings/{code}', 'SettingsController@get');

    /**
     * @api {POST} /company/settings Set setting value for company
     * @apiName Set setting value for company
     * @apiDescription This endpoint set setting value for company
     * @apiHeader Authorization Authorization token
     * @apiGroup Settings
     * @apiParam {String} parameters is combination between setting code and value, example ({"language":2,"menu_height":400})
     * @apiSampleRequest /backend/api/company/settings
     */
    Route::post('company/settings', 'SettingsController@companySet');

    /**
     * @api {GET} /company/settings Get settings for company
     * @apiName Get settings for company
     * @apiDescription This endpoint returns settings of company if current user is admin
     * @apiHeader Authorization Authorization token
     * @apiGroup Settings
     * @apiSampleRequest /backend/api/company/settings
     */
    Route::get('company/settings', 'SettingsController@getCompanySettings');

    /**
     * @api {POST} /department/{department}/notification-settings Set notification for a department by department id
     * @apiName Set notification for a department by department id
     * @apiDescription This endpoint set notification for a department by department id
     * @apiHeader Authorization Authorization token
     * @apiGroup Settings
     * @apiParam {Integer} department department id
     * @apiParam {String} list of notification type id what we want set for user, example (1,2,4,8)
     * @apiSampleRequest /backend/api/department/{department}/settings
     */
    Route::post('department/{department}/notification-settings', 'NotificationDepartmentsController@departmentNotificationSet');

    /**
     * @api {GET} /department/{department}/notification-settings Get notification settings for a department by department id
     * @apiName Get notification settings for a department by department id
     * @apiDescription This endpoint returns settings notification settings for a department by department id
     * @apiHeader Authorization Authorization token
     * @apiParam {Integer} department department id
     * @apiGroup Settings
     * @apiSampleRequest /backend/api/department/{department}/notification-settings
     */
    Route::get('department/{department}/notification-settings', 'NotificationDepartmentsController@getDepartmentNotificationSettings');

    /**
     * @api {POST} /department/{department}/notification-settings Set notification for an user by user id
     * @apiName Set notification for an user by user id
     * @apiDescription This endpoint set notification for an user by user id
     * @apiHeader Authorization Authorization token
     * @apiGroup Settings
     * @apiParam {String} list of notification type id what we want set for user, example (1,2,4,8)
     * @apiSampleRequest /backend/api/department/{department}/settings
     */
    Route::post('user/notification-settings', 'NotificationUsersController@userNotificationSet');

    /**
     * @api {GET} /user/{user}/notification-settings Get notification settings for User by user id
     * @apiName Get notification settings for User by user id
     * @apiDescription This endpoint returns notification settings for User by user id
     * @apiHeader Authorization Authorization token
     * @apiParam {Integer} user user id
     * @apiGroup Settings
     * @apiSampleRequest /backend/api/user/{user}/notification-settings
     */
    Route::get('user/{user}/notification-settings', 'NotificationUsersController@getNotificationSettingsForUser');

    /**
     * @api {GET} /user/notification-settings Get notification settings for current User
     * @apiName Get notification settings for current User
     * @apiDescription This endpoint returns notification settings for current User
     * @apiHeader Authorization Authorization token
     * @apiGroup Settings
     * @apiSampleRequest /backend/api/user/notification-settings
     */
    Route::get('user/notification-settings', 'NotificationUsersController@getNotificationSettingsForCurrentUser');

    /**
     * @api {GET} /user/notifications/limit/{limit}/page/{offset} Get notifications list for current User
     * @apiName Get notifications list for current User
     * @apiDescription This endpoint returns notifications list for current User
     * @apiHeader Authorization Authorization token
     * @apiGroup Notifications List
     * @apiParam {Integer} limit
     * @apiParam {Integer} offset
     * @apiSampleRequest /backend/api/user/notifications/limit/{limit}/page/{offset}
     */
    Route::get('user/notifications/limit/{limit}/page/{offset}', 'NotificationsUsersController@getNotificationsForUser');

    /**
     * @api {GET} /user/active-notifications Get unread notifications count for current User
     * @apiName Get unread notifications count for current User
     * @apiDescription This endpoint returns unread notifications count for current User
     * @apiHeader Authorization Authorization token
     * @apiGroup Unread Notifications Count
     * @apiSampleRequest /backend/api/user/active-notifications
     */
    Route::get('user/active-notifications', 'NotificationsUsersController@getUnreadNotificationsCountForUser');

    /**
     * @api {POST} /user/change-notification-status Change notifications status for current User
     * @apiName Change notifications status for current User
     * @apiDescription This endpoint Change notifications status for current User
     * @apiHeader Authorization Authorization token
     * @apiGroup Change notifications status for current User
     * @apiSampleRequest /backend/api/user/change-notification-status
     */
    Route::post('user/change-notification-status', 'NotificationsUsersController@changeNotificationsStatus');

    /**
     * @api {GET} /notification/{notification} Get notification by id
     * @apiName Get notification by id
     * @apiDescription This endpoint returns notification by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Unread Notifications Count
     * @apiParam {Integer} notification notification id
     * @apiSampleRequest /backend/api/notification/{notification}
     */
    Route::get('notification/{notification}', 'NotificationsController@getNotificationMessage');

    /**
     * @api {GET} /events Get events
     * @apiName Get events
     * @apiDescription This endpoint returns events
     * @apiHeader Authorization Authorization token
     * @apiGroup Events
     * @apiSampleRequest /backend/api/events
     */
    Route::resource('events', 'EventsController', ['only' => ['index', 'store', 'update', 'destroy']]);


    /**
     * @api {get} /settings Get list of settings
     * @apiName Get list of settings
     * @apiDescription This endpoint return list of settings
     * @apiHeader Authorization Authorization token
     * @apiGroup Settings
     * @apiSampleRequest /backend/api/settings
     */
    Route::get('settings', 'SettingsController@index');

    /**
     * @api {GET} /company/settings/:code Get company setting by code
     * @apiName Get company setting by code
     * @apiDescription This endpoint return setting for current company by code
     * @apiHeader Authorization Authorization token
     * @apiGroup Settings
     * @apiParam {String} code setting code
     * @apiSampleRequest /backend/api/company/settings/:code
     */
    Route::get('company/settings/{code}', 'SettingsController@companyGet');

    /**
     * @api {POST} /department/role Assign role to department
     * @apiName Assign role to department
     * @apiDescription This endpoint assign role to department
     * @apiHeader Authorization Authorization token
     * @apiGroup Roles
     * @apiParam {Object} department[id] the value for this parameter is object with id parameter, example: {id:2}
     * @apiParam {Object} role[id] the value for this parameter is object with id parameter, example: {id:1}
     * @apiSampleRequest /backend/api/department/role
     */
    Route::post('department/role', 'DepartmentRolesController@set'); //tested

    /**
     * @api {DELETE} /department/:department/role/:role Remove role from department
     * @apiName Remove role from department
     * @apiDescription This endpoint removes role from department
     * @apiHeader Authorization Authorization token
     * @apiGroup Roles
     * @apiParam {Object} department department id
     * @apiParam {Object} role role id
     * @apiSampleRequest /backend/api/department/:department/role/:role
     */
    Route::delete('department/{department}/role/{role}', 'DepartmentRolesController@removeRole');

    /**
     * @api {delete} /role/:id Remove role
     * @apiName Remove role
     * @apiDescription This endpoint remove role
     * @apiHeader Authorization Authorization token
     * @apiGroup Roles
     * @apiParam {Number} id id of role
     * @apiSampleRequest /backend/api/role/:id
     */
    /**
     * @api {get} /role Get list of roles
     * @apiName Get list of roles
     * @apiDescription This endpoint return list of roles
     * @apiHeader Authorization Authorization token
     * @apiGroup Roles
     * @apiSampleRequest /backend/api/role
     */
    /**
     * @api {put} /role/:id Update role by id
     * @apiName Update role by id
     * @apiDescription This endpoint update role record selected by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Roles
     * @apiParam {Number} id for role
     * @apiParam {String} code code for role
     * @apiParam {String} i18n[title]
     * @apiSampleRequest /backend/api/role/:id
     */
    /**
     * @api {post} /role Insert new role
     * @apiName Insert new role
     * @apiDescription This endpoint insert new role
     * @apiHeader Authorization Authorization token
     * @apiGroup Roles
     * @apiParam {String} code for role
     * @apiParam {String} i18n i18n[title]
     * @apiSampleRequest /backend/api/role
     */
    Route::resource('role', 'RolesController', ['only' => ['index', 'store', 'update', 'destroy']]);

    /**
     * @api {delete} /permission/:id Remove permission
     * @apiName Remove permission
     * @apiDescription This endpoint remove permission
     * @apiHeader Authorization Authorization token
     * @apiGroup Permissions
     * @apiParam {Number} id id of permission
     * @apiSampleRequest /backend/api/permission/:id
     */
    /**
     * @api {get} /permission Get list of permissions
     * @apiName Get list of permissions
     * @apiDescription This endpoint return list of permissions
     * @apiHeader Authorization Authorization token
     * @apiGroup Permissions
     * @apiSampleRequest /backend/api/permission
     */
    /**
     * @api {put} /permission/:id Update permission by id
     * @apiName Update permission by id
     * @apiDescription This endpoint update permission record selected by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Permissions
     * @apiParam {Number} id for permission
     * @apiParam {String} code code for role
     * @apiParam {String} i18n[title]
     * @apiSampleRequest /backend/api/permission/:id
     */
    /**
     * @api {post} /permission Insert new permission
     * @apiName Insert new permission
     * @apiDescription This endpoint insert new permission
     * @apiHeader Authorization Authorization token
     * @apiGroup Permissions
     * @apiParam {String} code for role
     * @apiParam {String} i18n i18n[title]
     * @apiSampleRequest /backend/api/permission
     */
    Route::resource('permission', 'PermissionController', ['only' => ['index', 'store', 'update', 'destroy']]);

    /**
     * @api {get} /role/:id/permissions Get list of permissions for role
     * @apiName Get list of permissions for role
     * @apiDescription This endpoint return list of permissions for role
     * @apiHeader Authorization Authorization token
     * @apiParam {Number} id for role
     * @apiGroup Roles
     * @apiSampleRequest /backend/api/role/:id/permissions
     */
    Route::get('role/{id}/permissions', 'RolesController@permission');

    /**
     * @api {post} /role/permission Assign permission to role
     * @apiName Assign permission to role
     * @apiDescription This endpoint assign permission to role
     * @apiHeader Authorization Authorization token
     * @apiGroup Roles
     * @apiParam {Array} permissions[] for role, example("permissions":[{"id":10},{"id":12}]
     * @apiParam {Array} role[id]
     * @apiSampleRequest /backend/api/permission
     */
    Route::post('role/permission', 'RolesController@setPermission');

    /**
     * @api {delete} /role/:role/permission/:permission Remove permission from role
     * @apiName Remove permission from role
     * @apiDescription This endpoint remove permission from role
     * @apiHeader Authorization Authorization token
     * @apiGroup Roles
     * @apiParam {Number} role id of role
     * @apiParam {Number} permission  id of permission
     * @apiSampleRequest /backend/api/role/:role/permission/:permission
     */
    Route::delete('role/{role}/permission/{permission}', 'RolesController@removePermission');

    /**
     * @api {get} /ui/getWindowData/{identifier} Get preloaded window data by identifier
     * @apiName Get window data
     * @apiDescription This endpoint return preloaded data
     * @apiHeader Authorization Authorization token
     * @apiGroup Windows
     * @apiParam identifier Window identifier ex: new_order_5_10
     * @apiSampleRequest /backend/api/ui/getWindowData/:identifier
     */
    Route::get('ui/getWindowData/{identifier}', 'FrontWindowController@getWindowData');

    /**
     * @api {get} /ui/getWindowsBySize Get groups with windows by size
     * @apiName Get groups with windows data by size
     * @apiDescription This endpoint return preloaded data
     * @apiHeader Authorization Authorization token
     * @apiGroup Window groups with windows
     * @apiParam device_width Device width in cm
     * @apiParam device_height Device height in cm
     * @apiSampleRequest /backend/api/ui/getGroupWindowBySize
     */
    Route::get('ui/windows-group', 'FrontWindowController@getGroupWindowBySize');

    /**
     * @api {post} /ui/windows Store new window
     * @apiName Store new window
     * @apiDescription This endpoint create new window
     * @apiHeader Authorization Authorization token
     * @apiGroup Windows
     * @apiParam identifier Identifier in format window_name_min-width_max-width
     * @apiParam name Window name
     * @apiParam min_width Min device width in centimeters
     * @apiParam max_width Max device width in centimeters
     * @apiParam min_height="0" Min device height in centimeters
     * @apiParam max_height="0" Max device height in centimeters
     * @apiParam metadata JSON window description
     * @apiSampleRequest /backend/api/ui/windows
     */
    Route::post('ui/windows', 'FrontWindowController@store');

    /**
     * @api {put} /ui/windows/{id} Edit new window
     * @apiName Edit new window
     * @apiDescription This endpoint update window by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Windows
     * @apiParam id Window id
     * @apiParam identifier Identifier in format window_name_min-width_max-width
     * @apiParam name Window name
     * @apiParam min_width Min device width in centimeters
     * @apiParam max_width Max device width in centimeters
     * @apiParam min_height=0 Min device height in centimeters
     * @apiParam max_height=0 Max device height in centimeters
     * @apiParam metadata JSON window description
     * @apiSampleRequest /backend/api/ui/windows/:id
     */
    Route::put('ui/windows/{id}', 'FrontWindowController@update');

    /**
     * @api {delete} /ui/windows/{id}  Delete window
     * @apiName Delete window by id
     * @apiDescription This endpoint delete window by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Windows
     * @apiParam id Window id
     * @apiSampleRequest /backend/api/ui/windows/:id
     */
    Route::delete('ui/windows/{id}', 'FrontWindowController@destroy');

    /**
     * @api {get} /webhooks Get list of webhooks by company
     * @apiName Get list of webhooks by company
     * @apiDescription This endpoint return list of webhooks by company
     * @apiHeader Authorization Authorization token
     * @apiGroup Webhooks
     * @apiSampleRequest /backend/api/webhooks
     */
    Route::get('webhooks', 'WebhookController@index');

    /**
     * @api {get} /webhooks/:id Get webhook by id
     * @apiName Get webhook by id
     * @apiDescription This endpoint return webhook by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Webhooks
     * @apiParam {Number} id Webhook id
     * @apiSampleRequest /backend/api/webhooks/:id
     */
    Route::get('webhooks/{id}', 'WebhookController@index');

    /**
     * @api {post} /webhooks Add new webhook
     * @apiName Insert new webhook
     * @apiDescription This endpoint insert new webhook
     * @apiHeader Authorization Authorization token
     * @apiGroup Webhooks
     * @apiParam {String} url Url of the webhook
     * @apiParam {String} auth_key Client Secret Key for sender security check
     * @apiParam {Number} isActive 1-Is active, 0-disabled
     * @apiParam {String} events List of event names comma separated
     * @apiSampleRequest /backend/api/webhooks
     */
    Route::post('webhooks', 'WebhookController@store');

    /**
     * @api {put} /webhooks/:id Edit webhook
     * @apiName Update webhook
     * @apiDescription This endpoint update webhook
     * @apiHeader Authorization Authorization token
     * @apiGroup Webhooks
     * @apiParam {Number} id Id of webhook to update
     * @apiParam {String} url Url of the webhook
     * @apiParam {Number} isActive 1-Is active, 0-disabled
     * @apiParam {String} auth_key Client Secret Key for sender security check
     * @apiParam {String} events List of event names comma separated
     * @apiSampleRequest /backend/api/webhooks/:id
     */
    Route::put('webhooks/{id}', 'WebhookController@update');

    /**
     * @api {delete} /webhooks/:id Delete webhook
     * @apiName Delete webhook
     * @apiDescription This endpoint delete webhook
     * @apiHeader Authorization Authorization token
     * @apiGroup Webhooks
     * @apiParam {Number} id Id of webhook to delete
     * @apiSampleRequest /backend/api/webhooks/:id
     */
    Route::delete('webhooks/{id}', 'WebhookController@destroy');

    Route::get('test/run/webhook', 'TestController@runWebhookEvent');


    /**
     * @api {delete} /counterparties/:id Remove counterpart
     * @apiName Remove permission
     * @apiDescription This endpoint removes counterpart
     * @apiHeader Authorization Authorization token
     * @apiGroup Counterparties
     * @apiParam {Number} id id of counterpart
     * @apiSampleRequest /backend/api/counterparties/:id
     */

    /**
     * @api {get} /counterparties Get list of counterparties
     * @apiName Get list of counterparties
     * @apiDescription This endpoint returns list of counterparties
     * @apiHeader Authorization Authorization token
     * @apiGroup Counterparties
     * @apiSampleRequest /backend/api/counterparties
     */

    /**
     * @api {put} /counterparties/:id Update counterpart by id
     * @apiName Update counterpart by id
     * @apiDescription This endpoint update counterpart record selected by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Counterparties
     * @apiParam {Number} id for permission
     * @apiParam {String} email code for role
     * @apiParam {String} firstname
     * @apiParam {String} lastname
     * @apiParam {String} type 1 = Client
     * @apiSampleRequest /backend/api/counterparties/:id
     */

    /**
     * @api {post} /counterparties Insert new counterpart
     * @apiName Insert new counterpart
     * @apiDescription This endpoint insert new counterpart
     * @apiHeader Authorization Authorization token
     * @apiGroup Counterparties
     * @apiParam {Number} id for permission
     * @apiParam {String} email code for role
     * @apiParam {String} firstname
     * @apiParam {String} lastname
     * @apiParam {String} type 1 = Client
     * @apiSampleRequest /backend/api/counterparties
     */
    Route::resource('counterparties', 'CounterpartsController', ['only' => ['index', 'store', 'update', 'destroy']]);

    /**
     * @api {delete} /email/templates/:id Remove email template
     * @apiName Remove permission
     * @apiDescription This endpoint removes email template
     * @apiHeader Authorization Authorization token
     * @apiGroup EmailTemplate
     * @apiParam {Number} id id of email template
     * @apiSampleRequest /backend/api/email/templates/:id
     */

    /**
     * @api {get} /email/templates Get list of email template
     * @apiName Get list of email/templates
     * @apiDescription This endpoint returns list of email template
     * @apiHeader Authorization Authorization token
     * @apiGroup EmailTemplate
     * @apiSampleRequest /backend/api/email/templates
     */

    /**
     * @api {put} /email/templates/:id Update email template by id
     * @apiName Update email template by id
     * @apiDescription This endpoint update email template record selected by id
     * @apiHeader Authorization Authorization token
     * @apiGroup EmailTemplate
     * @apiParam {Number} id id of email template
     * @apiParam {Template} email template name or path
     * @apiSampleRequest /backend/api/email/templates/:id
     */

    /**
     * @api {post} /email/templates Insert new email template
     * @apiName Insert new email template
     * @apiDescription This endpoint insert new email template
     * @apiHeader Authorization Authorization token
     * @apiGroup EmailTemplate
     * @apiParam {Template} email template name or path
     * @apiSampleRequest /backend/api/email/templates
     */
    Route::resource('email/templates', 'EmailTemplateController', ['only' => ['index', 'store', 'update', 'destroy']]);

    /**
     * @api {delete} /counterparty/balance/:id Remove counterparty balance
     * @apiName Remove permission
     * @apiDescription This endpoint removes counterparty balance
     * @apiHeader Authorization Authorization token
     * @apiGroup CounterpartyBalance
     * @apiParam {Number} id id of counterparty balance
     * @apiSampleRequest /backend/api/counterparty/balance/:id
     */

    /**
     * @api {get} /counterparty/balance Get list of counterparty balance
     * @apiName Get list of counterparty/balance
     * @apiDescription This endpoint returns list of counterparty balance
     * @apiHeader Authorization Authorization token
     * @apiGroup CounterpartyBalance
     * @apiSampleRequest /backend/api/counterparty/balance
     */

    /**
     * @api {put} /counterparty/balance/:id Update counterparty balance by id
     * @apiName Update counterparty balance by id
     * @apiDescription This endpoint update counterparty balance record selected by id
     * @apiHeader Authorization Authorization token
     * @apiGroup CounterpartyBalance
     * @apiParam {Number} id id of counterparty balance
     * @apiSampleRequest /backend/api/counterparty/balance/:id
     */

    /**
     * @api {post} /counterparty/balance Insert new counterparty balance
     * @apiName Insert new counterparty balance
     * @apiDescription This endpoint insert new counterparty balance
     * @apiHeader Authorization Authorization token
     * @apiGroup CounterpartyBalance
     * @apiParam {Number} amount
     * @apiParam {Number} counterparty id
     * @apiSampleRequest /backend/api/counterparty/balance
     */
    Route::resource('counterparty/balance', 'CounterpartyBalanceController', ['only' => ['index', 'store', 'update', 'destroy']]);


    /**
     * @api {delete} /counterparties/type/:id Remove counterpart
     * @apiName Remove permission
     * @apiDescription This endpoint removes counterpart
     * @apiHeader Authorization Authorization token
     * @apiGroup Counterparty Types
     * @apiParam {Number} id id of counterpart type
     * @apiSampleRequest /backend/api/counterparties/type/:id
     */

    /**
     * @api {get} /counterparties/type Get list of counterparties
     * @apiName Get list of counterparties
     * @apiDescription This endpoint returns list of counterparties
     * @apiHeader Authorization Authorization token
     * @apiGroup Counterparty Types
     * @apiSampleRequest /backend/api/counterparties/type
     */

    /**
     * @api {put} /counterparties/type/:id Update counterpart by id
     * @apiName Update counterpart by id
     * @apiDescription This endpoint update counterpart record selected by id
     * @apiHeader Authorization Authorization token
     * @apiGroup Counterparty Types
     * @apiParam {Number} department_id id of department
     * @apiParam {String} i18n[title]
     * @apiSampleRequest /backend/api/counterparties/type/:id
     */

    /**
     * @api {post} /counterparties/type Insert new counterpart
     * @apiName Insert new counterpart
     * @apiDescription This endpoint insert new counterpart
     * @apiHeader Authorization Authorization token
     * @apiGroup Counterparty Types
     * @apiParam {Number} department_id id of department
     * @apiParam {String} i18n[title]
     * @apiSampleRequest /backend/api/counterparties/type
     */
    Route::resource('counterparties/type', 'CounterpartsTypeController', ['only' => ['index', 'store', 'update', 'destroy']]);

    Route::post('counterparties/create', 'CounterpartsController@generateDashboard');
    Route::post('counterparties/activate', 'CounterpartsController@activate');


    /**
     * @api {get} /extra_accounts Get list
     * @apiName Get list of extra_accounts
     * @apiDescription This endpoint
     * @apiGroup ExtraAccounts
     * @apiSampleRequest /backend/api/extra_accounts
     */

    /**
     * @api {post} /extra_accounts Add new extra_accounts
     * @apiName  Add new extra_accounts
     * @apiDescription This endpoint add new extra_accounts
     * @apiHeader Authorization Authorization token
     * @apiParam provider_id of extra_accounts provier token
     * @apiParam user_id of extra_accounts
     * @apiParam provider_type of extra_accounts
     * @apiGroup ExtraAccounts
     * @apiSampleRequest /backend/api/extra_accounts
     */

    /**
     * @api {put} /extra_accounts/:id Update extra_accounts
     * @apiName  Update extra_accounts data
     * @apiDescription This endpoint update extra_accounts information
     * @apiHeader Authorization Authorization token
     * @apiParam provider_id of extra_accounts provider token
     * @apiParam provider_type of extra_accounts
     * @apiGroup ExtraAccounts
     * @apiSampleRequest /backend/api/extra_accounts/:id
     */

    /**
     * @api {delete} /extra_accounts/:id Delete extra_accounts
     * @apiName  Delete extra_accounts
     * @apiDescription This endpoint delete extra_accounts
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of extra_accounts
     * @apiGroup ExtraAccounts
     * @apiSampleRequest /backend/api/extra_accounts/:id
     */
    Route::resource('extra_accounts', 'ExtraAccountsController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /language Get list
     * @apiName Get list of language
     * @apiDescription This endpoint
     * @apiGroup Language
     * @apiSampleRequest /backend/api/language
     */

    /**
     * @api {post} /language Add new language
     * @apiName  Add new language
     * @apiDescription This endpoint add new language
     * @apiHeader Authorization Authorization token
     * @apiParam code of language
     * @apiParam title of language
     * @apiGroup Language
     * @apiSampleRequest /backend/api/language
     */

    /**
     * @api {put} /language/:id Update language
     * @apiName  Update language data
     * @apiDescription This endpoint update language information
     * @apiHeader Authorization Authorization token
     * @apiParam title of language
     * @apiGroup Language
     * @apiSampleRequest /backend/api/language/:id
     */

    /**
     * @api {delete} /language/:id Delete language
     * @apiName  Delete language
     * @apiDescription This endpoint delete language
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of language
     * @apiGroup Language
     * @apiSampleRequest /backend/api/language/:id
     */
    Route::resource('language', 'LanguageController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /country Get list
     * @apiName Get list of country
     * @apiDescription This endpoint
     * @apiGroup Country
     * @apiSampleRequest /backend/api/country
     */

    /**
     * @api {post} /country Add new country
     * @apiName  Add new country
     * @apiDescription This endpoint add new country
     * @apiHeader Authorization Authorization token
     * @apiParam code of country
     * @apiGroup Country
     * @apiSampleRequest /backend/api/country
     */

    /**
     * @api {put} /country/:id Update country
     * @apiName  Update country data
     * @apiDescription This endpoint update country information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of country
     * @apiGroup Country
     * @apiSampleRequest /backend/api/country/:id
     */

    /**
     * @api {delete} /country/:id Delete country
     * @apiName  Delete country
     * @apiDescription This endpoint delete country
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of country
     * @apiGroup Country
     * @apiSampleRequest /backend/api/country/:id
     */
    Route::resource('countries', 'CountryController', ['only' => ['store', 'update', 'destroy', 'index']]);


    /**
     * @api {get} /company_filters Get predefined filters for company
     * @apiName Get list of predefined filters for company
     * @apiDescription This endpoint
     * @apiSampleRequest /backend/api/company_filters
     */


    /**
     * @api {delete} /company_filters/:id Delete company_filters
     * @apiName  Delete company_filters
     * @apiDescription This endpoint delete company_filters
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company_filters
     * @apiGroup Company Filters
     * @apiSampleRequest /backend/api/company_filters/:id
     */

    Route::resource('company_filters', 'CompanyFiltersController', ['only' => [/*'store', 'update',*/'destroy', 'index']]);


    /**
     * @api {get} /predefined_filters Get predefined filters for company
     * @apiName Get list of predefined filters for company
     * @apiDescription This endpoint get list of predefined filters for company
     * @apiSampleRequest /backend/api/predefined_filters
     */


    /**
     * @api {delete} /predefined_filters/:id Delete predefined_filters
     * @apiName  Delete predefined_filters
     * @apiDescription This endpoint delete predefined_filters
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of predefined_filters
     * @apiGroup Predefined Filters
     * @apiSampleRequest /backend/api/predefined_filters/:id
     */

    Route::resource('predefined_filters', 'PredefinedFiltersController', ['only' => [/*'store', 'update',*/'destroy', 'index']]);


    /**
     * @api {get} /shards Get list
     * @apiName Get list of shards
     * @apiDescription This endpoint
     * @apiGroup Shard
     * @apiSampleRequest /backend/api/shards
     */

    /**
     * @api {post} /shards Add new shards
     * @apiName  Add new shards
     * @apiDescription This endpoint add new shards
     * @apiHeader Authorization Authorization token
     * @apiParam name
     * @apiParam country
     * @apiGroup Shard
     * @apiSampleRequest /backend/api/shards
     */

    /**
     * @api {put} /shards/:id Update shards
     * @apiName  Update shards data
     * @apiDescription This endpoint update shards information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of shards
     * @apiParam name
     * @apiParam country
     * @apiGroup Shard
     * @apiSampleRequest /backend/api/shards/:id
     */

    /**
     * @api {delete} /shards/:id Delete shards
     * @apiName  Delete shards
     * @apiDescription This endpoint delete shards
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of shards
     * @apiGroup Shard
     * @apiSampleRequest /backend/api/shards/:id
     */
    Route::resource('shards', 'ShardController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /shards/services Get list
     * @apiName Get list of shards/services
     * @apiDescription This endpoint get list of shards services
     * @apiGroup ShardService
     * @apiSampleRequest /backend/api/shards/services
     */

    /**
     * @api {post} /shards/services Add new shards/services
     * @apiName  Add new shards/services
     * @apiDescription This endpoint add new shards/services
     * @apiHeader Authorization Authorization token
     * @apiParam name
     * @apiParam shards_id
     * @apiParam service_type
     * @apiGroup ShardService
     * @apiSampleRequest /backend/api/shards/services
     */

    /**
     * @api {put} /shards/services/:id Update shards/services
     * @apiName  Update shards/services data
     * @apiDescription This endpoint update shards/services information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of shards/services
     * @apiParam name
     * @apiParam shards_id
     * @apiParam service_type
     * @apiGroup ShardService
     * @apiSampleRequest /backend/api/shards/services/:id
     */

    /**
     * @api {delete} /shards/services/:id Delete shards/services
     * @apiName  Delete shards/services
     * @apiDescription This endpoint delete shards/services
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of shards/services
     * @apiGroup ShardService
     * @apiSampleRequest /backend/api/shards/services/:id
     */
    Route::resource('shard/services', 'ShardServiceController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /domain/records/company/:id Get domain records
     * @apiName Get list of company domain records
     * @apiDescription This endpoint get list of domain records of company
     * @apiGroup DomainRecord
     * @apiSampleRequest /backend/api/domain/records/company/:id
     */

    /**
     * @api {post} /domain/records/company/:id Add new domain record
     * @apiName  Add new domain record
     * @apiDescription This endpoint add new domain record for company
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company
     * @apiParam name domain name eg.everest
     * @apiGroup DomainRecord
     * @apiSampleRequest /backend/api/domain/records/company/:id
     */

    /**
     * @api {put} /domain/records/company/:id Update domain record
     * @apiName  Update domain record data
     * @apiDescription This endpoint update domain record information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company
     * @apiParam oldName domain name eg.everest
     * @apiParam name domain name eg.everest2
     * @apiGroup DomainRecord
     * @apiSampleRequest /backend/api/domain/records/company/:id
     */

    /**
     * @api {delete} /domain/records/company/:id Delete domain record
     * @apiName  Delete domain record data
     * @apiDescription This endpoint delete domain record information
     * @apiHeader Authorization Authorization token
     * @apiParam name domain name eg.everest2
     * @apiGroup DomainRecord
     * @apiSampleRequest /backend/api/domain/records/company/{id}/:id
     */

    //domain company-
    Route::get('domain/records/company/{id}', 'CompanyController@indexRecords');// tested
    Route::post('domain/records/company/{id}', 'CompanyController@postRecords'); // tested
    Route::put('domain/records/company/{id}', 'CompanyController@putRecords'); // tested
    Route::delete('domain/records/company/{id}', 'CompanyController@deleteRecords'); // tested

    /**
     * @api {get} /configuration/shards Get shardss configuration
     * @apiName Get list of shardss configuration
     * @apiDescription This endpoint get list of shards configuration
     * @apiGroup Shard
     * @apiSampleRequest /backend/api/configuration/shards
     */

    Route::get('configuration/shards', 'ShardController@getConfiguration');

    Route::get('test/queue', 'TestController@testQueue');



    /**
     * @api {post} /unit-users Assign user to unit
     * @apiName  Assign user to unit
     * @apiDescription This endpoint assign the given user to given unit
     * @apiHeader Authorization Authorization token
     * @apiParam unit_id ID of unit (Required)
     * @apiParam user_id ID of user (Required)
     * @apiGroup User unit
     * @apiSampleRequest /backend/api/users/units
     */
    /**
     * @api {put} /unit-users/:id Update user from unit
     * @apiName  Update user from unit
     * @apiDescription This endpoint update the information about user assigment
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of user-unit table row
     * @apiParam unit_id ID of unit (Required)
     * @apiParam user_id ID of user (Required)
     * @apiGroup User unit
     * @apiSampleRequest /backend/api/users/units/:id
     */
    /**
     * @api {delete} /unit-users/:id Delete user from unit
     * @apiName  Delete user from unit
     * @apiDescription This endpoint delete the information about user assigment to unit
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of user-unit table row
     * @apiGroup User unit
     * @apiSampleRequest /backend/api/users/units/:id
     */
    Route::resource('unit-users', 'UnitUsersController', ['only' => ['store', 'update', 'destroy']]);


    /**
     * @api {get} /unit/:id/users Get list of users from unit
     * @apiName   Get users by unit
     * @apiDescription This endpoint returns list of users from unit
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of unit (Required)
     * @apiGroup unit
     * @apiSampleRequest /backend/api/unit/:id/users
     */
    Route::get('users/unit/{id}', 'UnitUsersController@getUsersByUnit');


    /**
     * @api {get} /unit/user Get list of units by user
     * @apiName  Get list of units for logged in user (Administrator).
     * @apiDescription This endpoint returns list of units for logged in user (Administrator)
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of user (Required)
     * @apiGroup unit
     * @apiSampleRequest /backend/api/unit/user
     */
    Route::get('unit/user/{id}', 'UnitController@getByUser');


    /**
     * @api {post} /unit/type Add unit type
     * @apiName  Add unit/type
     * @apiDescription This endpoint add new unit/type
     * @apiHeader Authorization Authorization token
     * @apiParam i18n i18n[title] unit
     * @apiGroup unit/type
     * @apiSampleRequest /backend/api/unit/type
     */

    /**
     * @api {put} /unit/type/:id Update unit type
     * @apiName  Update user from unit
     * @apiDescription This endpoint update unit/type
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of unit/type (Required)
     * @apiGroup unit/type
     * @apiSampleRequest /backend/api/unit/type/:id
     */
    Route::resource('unit/type', 'UnitTypeController', ['only' => ['index', 'store', 'update', 'destroy']]);


    Route::get('login/{provider}', 'AuthenticateController@redirectToProvider');
    Route::get('login/{provider}/callback', 'AuthenticateController@handleProviderCallback');
    /**
     * @api {get} /tax/rules Get tax rules
     * @apiName Get list of tax rules
     * @apiDescription This endpoint get list of tax rules
     * @apiGroup TaxRule
     * @apiSampleRequest /backend/api/tax/rules
     */

    /**
     * @api {post} /tax/rules Add new tax rule
     * @apiName  Add new tax rule
     * @apiDescription This endpoint adds new tax rule
     * @apiHeader Authorization Authorization token
     * @apiParam tax_rate
     * @apiGroup TaxRule
     * @apiSampleRequest /backend/api/tax/rules/:id
     */

    /**
     * @api {put} /tax/rules/:id Update tax rule
     * @apiName  Update tax rule data
     * @apiDescription This endpoint update tax rule information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of tax rule
     * @apiParam tax_rate
     * @apiGroup TaxRule
     * @apiSampleRequest /backend/api/tax/rules/:id
     */

    /**
     * @api {delete} /tax/rules/:id Delete tax rule
     * @apiName  Delete tax rule data
     * @apiDescription This endpoint delete tax rule information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of tax rule
     * @apiGroup TaxRule
     * @apiSampleRequest /backend/api/tax/rules/{id}/:id
     */

    Route::resource('tax/rules', 'TaxRuleController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /tax/rates Get tax rates
     * @apiName Get list of tax rates
     * @apiDescription This endpoint get list of tax rates
     * @apiGroup TaxRate
     * @apiSampleRequest /backend/api/tax/rates
     */

    /**
     * @api {post} /tax/rates Add new tax rate
     * @apiName  Add new tax rate
     * @apiDescription This endpoint adds new tax rate
     * @apiHeader Authorization Authorization token
     * @apiParam tax_rate
     * @apiGroup TaxRate
     * @apiSampleRequest /backend/api/tax/rates/:id
     */

    /**
     * @api {put} /tax/rates/:id Update tax rate
     * @apiName  Update tax rate data
     * @apiDescription This endpoint update tax rate information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of tax rate
     * @apiParam tax_rate
     * @apiGroup TaxRate
     * @apiSampleRequest /backend/api/tax/rates/:id
     */

    /**
     * @api {delete} /tax/rates/:id Delete tax rate
     * @apiName  Delete tax rate data
     * @apiDescription This endpoint delete tax rate information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of tax rate
     * @apiGroup TaxRate
     * @apiSampleRequest /backend/api/tax/rates/{id}/:id
     */

    Route::resource('tax/rates', 'TaxRateController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {post} /unit Add new unit
     * @apiName  Insert new unit
     * @apiDescription This endpoint insert new unit
     * @apiHeader Authorization Authorization token
     * @apiParam title Title of unit
     * @apiParam type Id of unit type
     * @apiGroup unit
     * @apiSampleRequest /backend/api/unit
     */

    /**
     * @api {put} /unit/:id Update unit
     * @apiName  Update  unit
     * @apiDescription This endpoint updates information unit
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of unit (Required)
     * @apiParam title Title of unit
     * @apiGroup unit
     * @apiSampleRequest /backend/api/unit
     */

    /**
     * @api {delete} /unit/{id} Delete unit
     * @apiName  Delete  unit
     * @apiDescription This endpoint delete the information about unit
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of unit (Required)
     * @apiGroup unit
     * @apiSampleRequest /backend/api/unit/:id
     */

    /**
     * @api {get} /units Get list of all units by company
     * @apiName  Get list of all units for logged in user (Administrator).
     * @apiDescription This endpoint returns list of units for logged in user (Administrator)
     * @apiHeader Authorization Authorization token
     * @apiGroup unit
     * @apiSampleRequest /backend/api/units
     */
    Route::resource('units', 'UnitController', ['only' => ['store', 'update', 'destroy', 'index']]);


    /**
     * @api {get} /rates Get rates
     * @apiName Get list of rates
     * @apiDescription This endpoint get list of rates
     * @apiGroup Rate
     * @apiSampleRequest /backend/api/rates
     */

    /**
     * @api {post} /rates Add new rate
     * @apiName  Add new rate
     * @apiDescription This endpoint adds new rate
     * @apiHeader Authorization Authorization token
     * @apiParam tax_rate
     * @apiGroup Rate
     * @apiSampleRequest /backend/api/rates/:id
     */

    /**
     * @api {put} /rates/:id Update rate
     * @apiName  Update rate data
     * @apiDescription This endpoint update rate information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of rate
     * @apiParam tax_rate
     * @apiGroup Rate
     * @apiSampleRequest /backend/api/rates/:id
     */

    /**
     * @api {delete} /rates/:id Delete rate
     * @apiName  Delete rate data
     * @apiDescription This endpoint delete rate information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of rate
     * @apiGroup Rate
     * @apiSampleRequest /backend/api/rates/{id}/:id
     */

    Route::resource('rates', 'RateController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /rate/history Get rates history
     * @apiName Get list of rates history
     * @apiDescription This endpoint get list of rates history
     * @apiGroup RateHistory
     * @apiSampleRequest /backend/api/rate/history
     */

    /**
     * @api {post} /rate/history Add new rate history
     * @apiName  Add new rate history
     * @apiDescription This endpoint adds new rate history
     * @apiHeader Authorization Authorization token
     * @apiParam tax_rate
     * @apiParam rate_id
     * @apiGroup RateHistory
     * @apiSampleRequest /backend/api/rate/history/:id
     */

    /**
     * @api {put} /rate/history/:id Update rate history
     * @apiName  Update rate history data
     * @apiDescription This endpoint update rate history information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of rate history
     * @apiParam tax_rate
     * @apiGroup RateHistory
     * @apiSampleRequest /backend/api/rate/history/:id
     */

    /**
     * @api {delete} /rate/history/:id Delete rate history
     * @apiName  Delete rate history data
     * @apiDescription This endpoint delete rate history information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of rate history
     * @apiGroup RateHistory
     * @apiSampleRequest /backend/api/rate/history/{id}/:id
     */

    Route::resource('rate/history', 'RateHistoryController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /company/currency Get company currency
     * @apiName Get list of company currencies
     * @apiDescription This endpoint get list of company currencies
     * @apiGroup CompanyCurrency
     * @apiSampleRequest /backend/api/company/currency
     */

    /**
     * @api {post} /company/currency Add new company currency
     * @apiName  Add new company currency
     * @apiDescription This endpoint adds new company currency
     * @apiHeader Authorization Authorization token
     * @apiParam currency_id
     * @apiParam company_id
     * @apiGroup CompanyCurrency
     * @apiSampleRequest /backend/api/company/currency/:id
     */

    /**
     * @api {put} /company/currency/:id Update company currency
     * @apiName  Update company currency data
     * @apiDescription This endpoint update company currency information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company currency
     * @apiParam currency_id
     * @apiGroup CompanyCurrency
     * @apiSampleRequest /backend/api/company/currency/:id
     */

    /**
     * @api {delete} /company/currency/:id Delete company currency
     * @apiName  Delete company currency data
     * @apiDescription This endpoint delete company currency information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company currency
     * @apiGroup CompanyCurrency
     * @apiSampleRequest /backend/api/company/currency/{id}/:id
     */

    Route::resource('company/currency', 'CompanyCurrencyController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /company/rates Get company rate
     * @apiName Get list of company rates
     * @apiDescription This endpoint get list of company rates
     * @apiGroup CompanyCurrency
     * @apiSampleRequest /backend/api/company/rates
     */

    /**
     * @api {post} /company/rates Add new company rate
     * @apiName  Add new company rate
     * @apiDescription This endpoint adds new company rate
     * @apiHeader Authorization Authorization token
     * @apiParam currency_id
     * @apiParam company_id
     * @apiGroup CompanyCurrency
     * @apiSampleRequest /backend/api/company/rates/:id
     */

    /**
     * @api {put} /company/rates/:id Update company rate
     * @apiName  Update company rate data
     * @apiDescription This endpoint update company rate information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company rate
     * @apiParam currency_id
     * @apiGroup CompanyCurrency
     * @apiSampleRequest /backend/api/company/rates/:id
     */

    /**
     * @api {delete} /company/rates/:id Delete company rate
     * @apiName  Delete company rate data
     * @apiDescription This endpoint delete company rate information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company rate
     * @apiGroup CompanyCurrency
     * @apiSampleRequest /backend/api/company/rates/{id}/:id
     */

    Route::resource('company/rates', 'CompanyRateController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /chat/sounds Get chat sound
     * @apiName Get list of chat sounds
     * @apiDescription This endpoint get list of chat sounds
     * @apiGroup ChatSound
     * @apiSampleRequest /backend/api/chat/sounds
     */

    /**
     * @api {post} /chat/sounds Add new chat sound
     * @apiName  Add new chat sound
     * @apiDescription This endpoint adds new chat sound
     * @apiHeader Authorization Authorization token
     * @apiParam company_id
     * @apiGroup ChatSound
     * @apiSampleRequest /backend/api/chat/sounds/:id
     */

    /**
     * @api {put} /chat/sounds/:id Update chat sound
     * @apiName  Update chat sound data
     * @apiDescription This endpoint update chat sound information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of chat sound
     * @apiGroup ChatSound
     * @apiSampleRequest /backend/api/chat/sounds/:id
     */

    /**
     * @api {delete} /chat/sounds/:id Delete chat sound
     * @apiName  Delete chat sound data
     * @apiDescription This endpoint delete chat sound information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of chat sound
     * @apiGroup ChatSound
     * @apiSampleRequest /backend/api/chat/sounds/{id}/:id
     */

    Route::resource('chat/sounds', 'ChatSoundController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /import/currencies Import currencies
     * @apiName Get list of currencies
     * @apiDescription This endpoint get list of currencies
     * @apiGroup TaxHelper
     * @apiSampleRequest /backend/api/import/currencies
     */
    Route::get('import/currencies', 'VatController@importCurrencies');

    /**
     * @api {get} /import/currency/rate Import currencies rates
     * @apiName Get list of currencies rates
     * @apiDescription This endpoint get list of currencies rates
     * @apiGroup TaxHelper
     * @apiSampleRequest /backend/api/import/currency/rate
     */
    Route::get('import/currency/rate', 'VatController@importCurrencyRates');

    /**
     * @api {get} /import/vat/eu Import vat for EU countries
     * @apiName Get list of vat for EU countries
     * @apiDescription This endpoint get list of vat for EU countries
     * @apiGroup TaxHelper
     * @apiSampleRequest /backend/api/import/vat/eu
     */
    Route::get('import/vat/eu', 'VatController@importEUVat');

    /**
     * @api {get} /rate/types Get rate type
     * @apiName Get list of rate types
     * @apiDescription This endpoint get list of rate types
     * @apiGroup RateType
     * @apiSampleRequest /backend/api/rate/types
     */

    /**
     * @api {post} /rate/types Add new rate type
     * @apiName  Add new rate type
     * @apiDescription This endpoint adds new rate type
     * @apiHeader Authorization Authorization token
     * @apiGroup RateType
     * @apiSampleRequest /backend/api/rate/types/:id
     */

    /**
     * @api {put} /rate/types/:id Update rate type
     * @apiName  Update rate type data
     * @apiDescription This endpoint update rate type information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of rate type
     * @apiGroup RateType
     * @apiSampleRequest /backend/api/rate/types/:id
     */

    /**
     * @api {delete} /rate/types/:id Delete rate type
     * @apiName  Delete rate type data
     * @apiDescription This endpoint delete rate type information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of rate type
     * @apiGroup RateType
     * @apiSampleRequest /backend/api/rate/types/{id}/:id
     */

    Route::resource('rate/types', 'TaxRateTypeController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /states Get states
     * @apiName Get list of states
     * @apiDescription This endpoint get list of states
     * @apiGroup State
     * @apiSampleRequest /backend/api/states
     */

    /**
     * @api {post} /states Add new state
     * @apiName  Add new state
     * @apiDescription This endpoint adds new state
     * @apiHeader Authorization Authorization token
     * @apiParam code
     * @apiGroup State
     * @apiSampleRequest /backend/api/states/:id
     */

    /**
     * @api {put} /states/:id Update state
     * @apiName  Update state data
     * @apiDescription This endpoint update state information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of state
     * @apiParam code
     * @apiGroup State
     * @apiSampleRequest /backend/api/states/:id
     */

    /**
     * @api {delete} /states/:id Delete state
     * @apiName  Delete state data
     * @apiDescription This endpoint delete state information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of state
     * @apiGroup State
     * @apiSampleRequest /backend/api/states/{id}/:id
     */

    Route::resource('states', 'StateController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /contracts Get contracts
     * @apiName Get list of contracts
     * @apiDescription This endpoint get list of contracts
     * @apiGroup Contract
     * @apiSampleRequest /backend/api/contracts
     */

    /**
     * @api {post} /contracts Add new contract
     * @apiName  Add new contract
     * @apiDescription This endpoint adds new contract
     * @apiHeader Authorization Authorization token
     * @apiParam title
     * @apiParam description
     * @apiGroup Contract
     * @apiSampleRequest /backend/api/contracts/:id
     */

    /**
     * @api {put} /contracts/:id Update contract
     * @apiName  Update contract data
     * @apiDescription This endpoint update contract information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of contract
     * @apiParam description
     * @apiGroup Contract
     * @apiSampleRequest /backend/api/contracts/:id
     */

    /**
     * @api {delete} /contracts/:id Delete contract
     * @apiName  Delete contract data
     * @apiDescription This endpoint delete contract information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of contract
     * @apiGroup Contract
     * @apiSampleRequest /backend/api/contracts/{id}/:id
     */

    Route::resource('contracts', 'ContractController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /contract/types Get contract types
     * @apiName Get list of contract types
     * @apiDescription This endpoint get list of contract types
     * @apiGroup ContractType
     * @apiSampleRequest /backend/api/contract/types
     */

    /**
     * @api {post} /contract/types Add new contract type
     * @apiName  Add new contract/type
     * @apiDescription This endpoint adds new contract type
     * @apiHeader Authorization Authorization token
     * @apiParam company_id
     * @apiGroup ContractType
     * @apiSampleRequest /backend/api/contract/types/:id
     */

    /**
     * @api {put} /contract/types/:id Update contract type
     * @apiName  Update contract/type data
     * @apiDescription This endpoint update contract type information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of contract type
     * @apiParam company_id
     * @apiGroup ContractType
     * @apiSampleRequest /backend/api/contract/types/:id
     */

    /**
     * @api {delete} /contract/types/:id Delete contract type
     * @apiName  Delete contract type data
     * @apiDescription This endpoint delete contract type information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of contract type
     * @apiGroup ContractType
     * @apiSampleRequest /backend/api/contract/types/{id}/:id
     */

    Route::resource('contract/types', 'ContractTypeController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /counterparty/groups Get counterpart groups
     * @apiName Get list of counterpart groups
     * @apiDescription This endpoint get list of counterpart groups
     * @apiGroup CounterpartyGroup
     * @apiSampleRequest /backend/api/counterparty/groups
     */

    /**
     * @api {post} /counterparty/groups Add new counterpart group
     * @apiName  Add new counterparties/group
     * @apiDescription This endpoint adds new counterpart group
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of counterpart group
     * @apiParam title
     * @apiParam company_id
     * @apiGroup CounterpartyGroup
     * @apiSampleRequest /backend/api/counterparty/groups/:id
     */

    /**
     * @api {put} /counterparty/groups/:id Update counterpart group
     * @apiName  Update counterparties/group data
     * @apiDescription This endpoint update counterpart group information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of counterparty group
     * @apiParam title
     * @apiGroup CounterpartyGroup
     * @apiSampleRequest /backend/api/counterparty/groups/:id
     */

    /**
     * @api {delete} /counterparty/groups/:id Delete counterpart group
     * @apiName  Delete counterpart group data
     * @apiDescription This endpoint delete counterpart group information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of counterparties/group
     * @apiGroup CounterpartyGroup
     * @apiSampleRequest /backend/api/counterparty/groups/{id}/:id
     */

    Route::resource('counterparty/groups', 'CounterpartGroupController', ['only' => ['store', 'update', 'destroy', 'index']]);


    /**
     * @api {get} /quote/status Get quote status
     * @apiName Get list of quote status
     * @apiDescription This endpoint get list of quote status
     * @apiGroup QuoteStatus
     * @apiSampleRequest /backend/api/quote/status
     */

    /**
     * @api {post} /quote/status Add new quote status
     * @apiName  Add new quote status
     * @apiDescription This endpoint adds new quote status
     * @apiHeader Authorization Authorization token
     * @apiParam company_id of quote status
     * @apiGroup QuoteStatus
     * @apiSampleRequest /backend/api/quote/status/:id
     */

    /**
     * @api {put} /quote/status/:id Update quote/status
     * @apiName  Update quote/status data
     * @apiDescription This endpoint update quote/status information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of quote/status
     * @apiParam company_id of quote status
     * @apiGroup QuoteStatus
     * @apiSampleRequest /backend/api/quote/status/:id
     */

    /**
     * @api {delete} /quote/status/:id Delete quote/status
     * @apiName  Delete quote/status data
     * @apiDescription This endpoint delete quote/status information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of quote/status
     * @apiGroup QuoteStatus
     * @apiSampleRequest /backend/api/quote/status/{id}/:id
     */

    Route::resource('quote/status', 'QuoteStatusController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /quote/products Get quote status
     * @apiName Get list of quote status
     * @apiDescription This endpoint get list of quote status
     * @apiGroup QuoteProducts
     * @apiSampleRequest /backend/api/quote/products
     */

    /**
     * @api {post} /quote/products Add new quote products
     * @apiName  Add new quote products
     * @apiDescription This endpoint adds new quote products
     * @apiHeader Authorization Authorization token
     * @apiParam product_id of quote products
     * @apiParam quote_id of quote products
     * @apiParam quantity of quote products
     * @apiGroup QuoteProducts
     * @apiSampleRequest /backend/api/quote/products/:id
     */

    /**
     * @api {put} /quote/products/:id Update quote/products
     * @apiName  Update quote/products data
     * @apiDescription This endpoint update quote/products information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of quote/products
     * @apiGroup QuoteProducts
     * @apiSampleRequest /backend/api/quote/products/:id
     */

    /**
     * @api {delete} /quote/products/:id Delete quote/products
     * @apiName  Delete quote/products data
     * @apiDescription This endpoint delete quote/products information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of quote/products
     * @apiGroup QuoteProducts
     * @apiSampleRequest /backend/api/quote/products/{id}/:id
     */

    Route::resource('quote/products', 'QuoteProductsController', ['only' => ['store', 'update', 'destroy', 'index']]);


    /**
     * @api {get} /transactions Get transactions
     * @apiName Get list of transactions
     * @apiDescription This endpoint get list of transactions
     * @apiGroup Transaction
     * @apiSampleRequest /backend/api/transactions
     */

    /**
     * @api {post} /transactions Add new transaction
     * @apiName  Add new transaction
     * @apiDescription This endpoint adds new transaction
     * @apiHeader Authorization Authorization token
     * @apiParam amount of transaction
     * @apiParam gateway_id of transaction
     * @apiGroup Transaction
     * @apiSampleRequest /backend/api/transactions/:id
     */

    /**
     * @api {put} /transactions/:id Update transaction
     * @apiName  Update transaction data
     * @apiDescription This endpoint update transaction information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of transaction
     * @apiParam amount of transaction
     * @apiGroup Transaction
     * @apiSampleRequest /backend/api/transactions/:id
     */

    /**
     * @api {delete} /transactions/:id Delete transaction
     * @apiName  Delete transaction data
     * @apiDescription This endpoint delete transaction information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of transaction
     * @apiGroup Transaction
     * @apiSampleRequest /backend/api/transactions/{id}/:id
     */

    Route::resource('transactions', 'TransactionController', ['only' => ['store', 'update', 'destroy', 'index']]);


    /**
     * @api {get} /salutations Get salutations
     * @apiName Get list of salutations
     * @apiDescription This endpoint get list of salutations
     * @apiGroup Salutation
     * @apiSampleRequest /backend/api/salutations
     */

    /**
     * @api {post} /salutations Add new salutation
     * @apiName  Add new salutation
     * @apiDescription This endpoint adds new salutation
     * @apiHeader Authorization Authorization token
     * @apiGroup Salutation
     * @apiSampleRequest /backend/api/salutations/:id
     */

    /**
     * @api {put} /salutations/:id Update salutation
     * @apiName  Update salutation data
     * @apiDescription This endpoint update salutation information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of salutation
     * @apiGroup Salutation
     * @apiSampleRequest /backend/api/salutations/:id
     */

    /**
     * @api {delete} /salutations/:id Delete salutation
     * @apiName  Delete salutation data
     * @apiDescription This endpoint delete salutation information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of salutation
     * @apiGroup Salutation
     * @apiSampleRequest /backend/api/salutations/{id}/:id
     */

    Route::resource('salutations', 'SalutationController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {post} /leads Add new lead
     * @apiName  Add new lead
     * @apiDescription This endpoint adds new lead
     * @apiHeader Authorization Authorization token
     * @apiParam name of lead
     * @apiParam status_id of lead
     * @apiGroup Lead
     * @apiSampleRequest /backend/api/leads/:id
     */

    /**
     * @api {put} /leads/:id Update lead
     * @apiName  Update lead data
     * @apiDescription This endpoint update lead information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of lead
     * @apiParam status_id of lead
     * @apiGroup Lead
     * @apiSampleRequest /backend/api/leads/:id
     */

    /**
     * @api {delete} /leads/:id Delete lead
     * @apiName  Delete lead data
     * @apiDescription This endpoint delete lead information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of lead
     * @apiGroup Lead
     * @apiSampleRequest /backend/api/leads/{id}/:id
     */

    Route::resource('leads', 'LeadController', ['only' => ['store', 'update', 'index', 'destroy']]);

    /**
     * @api {get} /transaction/status Get transaction status
     * @apiName Get list of transaction status
     * @apiDescription This endpoint get list of transaction status
     * @apiGroup TransactionStatus
     * @apiSampleRequest /backend/api/transaction/status
     */

    /**
     * @api {post} /transaction/status Add new transaction/status
     * @apiName  Add new transaction/status
     * @apiDescription This endpoint adds new transaction/status
     * @apiHeader Authorization Authorization token
     * @apiGroup TransactionStatus
     * @apiSampleRequest /backend/api/transaction/status/:id
     */

    /**
     * @api {put} /transaction/status/:id Update transaction/status
     * @apiName  Update transaction/status data
     * @apiDescription This endpoint update transaction/status information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of transaction/status
     * @apiGroup TransactionStatus
     * @apiSampleRequest /backend/api/transaction/status/:id
     */

    /**
     * @api {delete} /transaction/status/:id Delete transaction/status
     * @apiName  Delete transaction/status data
     * @apiDescription This endpoint delete transaction/status information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of transaction/status
     * @apiGroup TransactionStatus
     * @apiSampleRequest /backend/api/transaction/status/{id}/:id
     */

    Route::resource('transaction/status', 'TransactionStatusController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /transaction/types Get transaction type
     * @apiName Get list of transaction type
     * @apiDescription This endpoint get list of transaction type
     * @apiGroup TransactionTypes
     * @apiSampleRequest /backend/api/transaction/types
     */

    /**
     * @api {post} /transaction/types Add new transaction/type
     * @apiName  Add new transaction/type
     * @apiDescription This endpoint adds new transaction/type
     * @apiHeader Authorization Authorization token
     * @apiGroup TransactionTypes
     * @apiSampleRequest /backend/api/transaction/types/:id
     */

    /**
     * @api {put} /transaction/types/:id Update transaction/type
     * @apiName  Update transaction/type data
     * @apiDescription This endpoint update transaction/type information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of transaction/type
     * @apiGroup TransactionTypes
     * @apiSampleRequest /backend/api/transaction/types/:id
     */

    /**
     * @api {delete} /transaction/types/:id Delete transaction/type
     * @apiName  Delete transaction/type data
     * @apiDescription This endpoint delete transaction/type information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of transaction/type
     * @apiGroup TransactionTypes
     * @apiSampleRequest /backend/api/transaction/types/{id}/:id
     */

    Route::resource('transaction/types', 'TransactionTypesController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /lead/status Get lead status
     * @apiName Get list of lead status
     * @apiDescription This endpoint get list of lead status
     * @apiGroup LeadStatus
     * @apiSampleRequest /backend/api/lead/status
     */

    /**
     * @api {post} /lead/status Add new lead/status
     * @apiName  Add new lead/status
     * @apiDescription This endpoint adds new lead/status
     * @apiHeader Authorization Authorization token
     * @apiParam company_id lead status
     * @apiGroup LeadStatus
     * @apiSampleRequest /backend/api/lead/status/:id
     */

    /**
     * @api {put} /lead/status/:id Update lead status
     * @apiName  Update lead status data
     * @apiDescription This endpoint update lead status information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of lead status
     * @apiParam company_id lead status
     * @apiGroup LeadStatus
     * @apiSampleRequest /backend/api/lead/status/:id
     */

    /**
     * @api {delete} /lead/status/:id Delete lead status
     * @apiName  Delete lead status data
     * @apiDescription This endpoint delete lead status information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of lead status
     * @apiGroup LeadStatus
     * @apiSampleRequest /backend/api/lead/status/{id}/:id
     */

    Route::resource('lead/status', 'LeadStatusController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /company/setting Get company settings
     * @apiName Get list of company settings
     * @apiDescription This endpoint get list of company settings
     * @apiGroup CompanySettings
     * @apiSampleRequest /backend/api/company/setting
     */

    /**
     * @api {post} /company/setting Add new company setting
     * @apiName  Add new company/setting
     * @apiDescription This endpoint adds new company setting
     * @apiHeader Authorization Authorization token
     * @apiParam company_id company settings
     * @apiParam setting_id company settings
     * @apiParam value company settings
     * @apiGroup CompanySettings
     * @apiSampleRequest /backend/api/company/setting/:id
     */

    /**
     * @api {put} /company/setting/:id Update company settings
     * @apiName  Update company settings data
     * @apiDescription This endpoint update company settings information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company settings
     * @apiGroup CompanySettings
     * @apiSampleRequest /backend/api/company/setting/:id
     */

    /**
     * @api {delete} /company/setting/:id Delete company settings
     * @apiName  Delete company settings data
     * @apiDescription This endpoint delete company settings information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of company settings
     * @apiGroup CompanySettings
     * @apiSampleRequest /backend/api/company/setting/{id}/:id
     */

    Route::resource('company/setting', 'CompanySettingsController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /setting Get setting
     * @apiName Get list of setting
     * @apiDescription This endpoint get list of setting
     * @apiGroup Settings
     * @apiSampleRequest /backend/api/setting
     */

    /**
     * @api {post} /setting Add new setting
     * @apiName  Add new setting
     * @apiDescription This endpoint adds new setting
     * @apiHeader Authorization Authorization token
     * @apiParam code lead status
     * @apiGroup Settings
     * @apiSampleRequest /backend/api/setting/:id
     */

    /**
     * @api {put} /setting/:id Update setting
     * @apiName  Update setting data
     * @apiDescription This endpoint update setting information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of setting
     * @apiParam code setting
     * @apiGroup Settings
     * @apiSampleRequest /backend/api/setting/:id
     */

    /**
     * @api {delete} /setting/:id Delete setting
     * @apiName  Delete setting data
     * @apiDescription This endpoint delete setting information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of setting
     * @apiGroup Settings
     * @apiSampleRequest /backend/api/setting/{id}/:id
     */

    Route::resource('setting', 'SettingsController', ['only' => ['store', 'update', 'destroy', 'index']]);


    /**
     * @api {get} /contact/positions Get contact position
     * @apiName Get list of contact position
     * @apiDescription This endpoint get list of contact position
     * @apiGroup ContactPosition
     * @apiSampleRequest /backend/api/contact/positions
     */

    /**
     * @api {post} /contact/positions Add new contact position
     * @apiName  Add new contact position
     * @apiDescription This endpoint adds new contact position
     * @apiHeader Authorization Authorization token
     * @apiParam company_id contact position
     * @apiGroup ContactPosition
     * @apiSampleRequest /backend/api/contact/positions/:id
     */

    /**
     * @api {put} /contact/positions/:id Update contact position
     * @apiName  Update contact position data
     * @apiDescription This endpoint update contact position information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of contact position
     * @apiParam company_id contact position
     * @apiGroup ContactPosition
     * @apiSampleRequest /backend/api/contact/positions/:id
     */

    /**
     * @api {delete} /contact/positions/:id Delete contact position
     * @apiName  Delete contact position data
     * @apiDescription This endpoint delete contact position information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of contact position
     * @apiGroup ContactPosition
     * @apiSampleRequest /backend/api/contact/positions/{id}/:id
     */

    Route::resource('contact/positions', 'ContactPositionController', ['only' => ['store', 'update', 'destroy', 'index']]);


    /**
     * @api {get} /payment/gateways Get payment gateway
     * @apiName Get list of payment gateway
     * @apiDescription This endpoint get list of payment gateway
     * @apiGroup PaymentGateway
     * @apiSampleRequest /backend/api/payment/gateways
     */

    /**
     * @api {post} /payment/gateways Add new payment gateway
     * @apiName  Add new payment gateway
     * @apiDescription This endpoint adds new payment gateway
     * @apiHeader Authorization Authorization token
     * @apiParam company_id payment gateway
     * @apiGroup PaymentGateway
     * @apiSampleRequest /backend/api/payment/gateways/:id
     */

    /**
     * @api {put} /payment/gateways/:id Update payment gateway
     * @apiName  Update payment gateway data
     * @apiDescription This endpoint update payment gateway information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of payment gateway
     * @apiParam company_id payment gateway
     * @apiGroup PaymentGateway
     * @apiSampleRequest /backend/api/payment/gateways/:id
     */

    /**
     * @api {delete} /payment/gateways/:id Delete payment gateways
     * @apiName  Delete payment/gateways data
     * @apiDescription This endpoint delete payment/gateways information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of payment gateways
     * @apiGroup PaymentGateway
     * @apiSampleRequest /backend/api/payment/gateways/{id}/:id
     */

    Route::resource('payment/gateways', 'PaymentGatewayController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /contact/positions Get contact position
     * @apiName Get list of contact position
     * @apiDescription This endpoint get list of contact position
     * @apiGroup ContactPosition
     * @apiSampleRequest /backend/api/contact/positions
     */

    /**
     * @api {post} /contact/positions Add new contact position
     * @apiName  Add new contact position
     * @apiDescription This endpoint adds new contact position
     * @apiHeader Authorization Authorization token
     * @apiParam company_id contact position
     * @apiGroup ContactPosition
     * @apiSampleRequest /backend/api/contact/positions/:id
     */

    /**
     * @api {put} /contact/positions/:id Update contact position
     * @apiName  Update contact position data
     * @apiDescription This endpoint update contact position information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of contact position
     * @apiParam company_id contact position
     * @apiGroup ContactPosition
     * @apiSampleRequest /backend/api/contact/positions/:id
     */

    /**
     * @api {delete} /contact/positions/:id Delete contact positions
     * @apiName  Delete payment/gateways data
     * @apiDescription This endpoint delete contact positions information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of contact position
     * @apiGroup ContactPosition
     * @apiSampleRequest /backend/api/contact/positions/{id}/:id
     */

    Route::resource('contact/positions', 'ContactPositionController', ['only' => ['store', 'update', 'destroy', 'index']]);


    /**
     * @api {get} /invoices Get invoice
     * @apiName Get list of invoice
     * @apiDescription This endpoint get list of invoice
     * @apiGroup Invoice
     * @apiSampleRequest /backend/api/invoices
     */

    /**
     * @api {post} /invoices Add new invoice
     * @apiName  Add new invoice
     * @apiDescription This endpoint adds new invoice
     * @apiHeader Authorization Authorization token
     * @apiParam title of invoice
     * @apiParam invoice_no
     * @apiParam counterparty_id
     * @apiGroup Invoice
     * @apiSampleRequest /backend/api/invoices/:id
     */

    /**
     * @api {put} /invoices/:id Update invoice
     * @apiName  Update invoice data
     * @apiDescription This endpoint update invoice information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of invoice
     * @apiParam title of invoice
     * @apiParam invoice_no
     * @apiParam counterparty_id
     * @apiGroup Invoice
     * @apiSampleRequest /backend/api/invoices/:id
     */

    /**
     * @api {delete} /invoices/:id Delete invoices
     * @apiName  Delete invoices data
     * @apiDescription This endpoint delete invoices information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of invoices
     * @apiGroup Invoice
     * @apiSampleRequest /backend/api/invoices/{id}/:id
     */

    Route::resource('invoices', 'InvoiceController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /invoice/status Get invoice status
     * @apiName Get list of invoice status
     * @apiDescription This endpoint get list of invoice status
     * @apiGroup InvoiceStatus
     * @apiSampleRequest /backend/api/invoice/status
     */

    /**
     * @api {post} /invoice/status Add new invoice status
     * @apiName  Add new invoice status
     * @apiDescription This endpoint adds new invoice status
     * @apiHeader Authorization Authorization token
     * @apiParam company_id invoice status
     * @apiGroup InvoiceStatus
     * @apiSampleRequest /backend/api/invoice/status/:id
     */

    /**
     * @api {put} /invoice/status/:id Update invoice status
     * @apiName  Update invoice status data
     * @apiDescription This endpoint update invoice status information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of invoice status
     * @apiParam company_id invoice status
     * @apiGroup InvoiceStatus
     * @apiSampleRequest /backend/api/invoice/status/:id
     */

    /**
     * @api {delete} /invoice/status/:id Delete invoice statuss
     * @apiName  Delete payment/gateways data
     * @apiDescription This endpoint delete invoice statuss information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of invoice status
     * @apiGroup InvoiceStatus
     * @apiSampleRequest /backend/api/invoice/status/{id}/:id
     */

    Route::resource('invoice/status', 'InvoiceStatusController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /invoice/products Get invoice products
     * @apiName Get list of invoice products
     * @apiDescription This endpoint get list of invoice products
     * @apiGroup InvoiceProducts
     * @apiSampleRequest /backend/api/invoice/products
     */

    /**
     * @api {post} /invoice/products Add new invoice products
     * @apiName  Add new invoice products
     * @apiDescription This endpoint adds new invoice products
     * @apiHeader Authorization Authorization token
     * @apiParam invoice_id invoice products
     * @apiParam company_id invoice products
     * @apiGroup InvoiceProducts
     * @apiSampleRequest /backend/api/invoice/products/:id
     */

    /**
     * @api {put} /invoice/products/:id Update invoice products
     * @apiName  Update invoice products data
     * @apiDescription This endpoint update invoice products information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of invoice products
     * @apiParam invoice_id invoice products
     * @apiParam product_id invoice products
     * @apiParam quantity invoice products
     * @apiParam price invoice products
     * @apiParam unit_id invoice products
     * @apiParam total invoice products
     * @apiGroup InvoiceProducts
     * @apiSampleRequest /backend/api/invoice/products/:id
     */

    /**
     * @api {delete} /invoice/products/:id Delete invoice products
     * @apiName  Delete payment/gateways data
     * @apiDescription This endpoint delete invoice products information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of invoice products
     * @apiGroup InvoiceProducts
     * @apiSampleRequest /backend/api/invoice/products/{id}/:id
     */

    Route::resource('invoice/products', 'InvoiceProductsController', ['only' => ['store', 'update', 'destroy', 'index']]);

    Route::get('with', 'LeadController@testUser');

});

/**
 * @api {post} /counterparts/reg Register counterpart
 * @apiName Register counterpart
 * @apiDescription This endpoint Register counterpart
 * @apiGroup Counterparty Types
 * @apiParam {firstname} email
 * @apiParam {lastname} email
 * @apiParam {email} email
 * @apiParam {password} email
 * @apiParam {company_id} email
 * @apiSampleRequest /backend/api/counterparts/reg
 */
Route::get('counterparties/reg', 'CounterpartsController@register');

/**
 * @api {get} /settings Get list of company settings
 * @apiName Get list of settings
 * @apiDescription This endpoint return list of settings
 * @apiGroup Settings
 * @apiSampleRequest /backend/api/settings
 */
Route::get('company-settings', 'SettingsController@getAuthSettings');

Route::post('test/add/webhook', 'TestController@testAddWebHook');

Route::post('test/webhook', 'TestController@testWebhook');
Route::post('test/webhook2', 'TestController@testWebhook');


/**
 * @api {get} /publicEvents Get public events list
 * @apiName Get public event list
 * @apiDescription This endpoint return a list of public events
 * @apiGroup Webhooks
 * @apiSampleRequest /backend/api/publicEvents
 */
Route::get('publicEvents', 'WebhookController@getPublicEvents');

/**
 * @api {post} /visitors Insert new visitor
 * @apiName Insert new visitor
 * @apiDescription This endpoint save new visitor to database
 * @apiParam {String}ip ip address of visitor
 * @apiParam {String}domain domain address (example: http://google.com)
 * @apiParam {String}first_page first visit page address (example: http://google.com/page/1)
 * @apiParam {Integer}visit=0 number of visits
 * @apiParam {String}country country of visitor (example: USA, Republic of Moldova, Romania)
 * @apiParam {String}city city of visitor (example: Chisnau, Berlin, Istambul)
 * @apiParam {String}language language of system (example: ru, ro, en)
 * @apiParam {String}browser type of browser (example: Chrome, Firefox, Internet Explorer)
 * @apiParam {String}browser_version version of browser (example: 57.0.2987.133, 57.0.2987)
 * @apiParam {String}os type of os (example: Windows, Unix, Ubuntu)
 * @apiParam {String}os_version version of os (exmample: 10,7,8)
 * @apiParam {Integer}mobile=0 is mobile device (1 = true, 0= false)
 * @apiParam {String}fingerprint fingerprint for visitor
 * @apiParam {Integer}cookie_enabled=0 if coockie is enabled (1= True, False = 0)
 * @apiGroup Visitors
 * @apiSampleRequest /visitors
 */
Route::post('visitors', 'VisitorController@store');

/**
 * @api {post} /visitors/activity Update last activity time
 * @apiName Update last activity time
 * @apiDescription This endpoint update last activity time of visitor
 * @apiParam visitor Encrypted id of visitor from cookie
 * @apiGroup Visitors
 * @apiSampleRequest /visitors/activity
 */
Route::post('visitors/activity', 'VisitorController@accessPage');

/**
 * @api {put} /visitors/{visitor} Increments visits number
 * @apiName Increments visits number
 * @apiDescription This endpoint update increments visits number of visitor
 * @apiParam {String}visitor Encrypted id of visitor from cookie
 * @apiGroup Visitors
 * @apiSampleRequest /visitors/:visitor
 */
Route::put('visitors/{id}', 'VisitorController@update');

/**
 * @api {post} /visitors/fingerprint Insert visitor or increment visit by fingerprint
 * @apiName Insert visitor or increment visit by fingerprint
 * @apiDescription This endpoint Insert visitor or increment visit by fingerprint when cookies are disabled
 * @apiGroup Visitors
 * @apiSampleRequest /visitors/fingerprint
 */
Route::post('visitors/fingerprint', 'VisitorController@updateByFingerprint');

Route::group(['prefix' => 'telegram/webhook'], function () {
    Route::post('/{token}', 'TelegramController@getUpdates');
});

/**
 * @api {get} /telegram/bot/{company_id} get bot by company_id
 * @apiName Get telegram bot_info by company_id
 * @apiDescription This endpoint return telegram bot info
 * @apiParam company_id Company ID
 * @apiGroup Telegram
 * @apiSampleRequest /telegram/bot/:company_id
 */
Route::get('telegram/bot/{company_id}', 'TelegramController@getByCompany');

/**
 * @api {post} /telegram/send/text Send text message
 * @apiName Send text message from Evrica Chat to Telegram chat
 * @apiDescription This endpoint send text message from Evrica Chat to Telegram chat
 * @apiGroup Telegram
 * @apiParam text Text of message
 * @apiParam chat_id Telegram chat id
 * @apiParam company_id Company ID
 * @apiSampleRequest /telegram/send/text
 */
Route::post('telegram/send/text', 'TelegramController@sendTextMessage');

/**
 * @api {post} /telegram/send/file Send file message
 * @apiName Send File from Evrica Chat to Telegram chat
 * @apiDescription This endpoint send file message from Evrica Chat to Telegram chat
 * @apiGroup Telegram
 * @apiParam room_id Room Id
 * @apiParam file File to send
 * @apiParam chat_id Telegram chat id
 * @apiParam company_id Company ID
 * @apiSampleRequest /telegram/send/file
 */
Route::post('telegram/send/file', 'TelegramController@sendFileMessage');

/**
 * @api {post} /telegram/edit/text Edit text message
 * @apiName Edit text message from Evrica Chat to Telegram chat
 * @apiDescription This endpoint edit text message from Evrica Chat to Telegram chat
 * @apiParam room_id Id of chat room
 * @apiGroup Telegram
 * @apiParam text Text of message
 * @apiParam chat_id Telegram chat id
 * @apiParam company_id Company ID
 * @apiParam message_id Id of telegram message
 * @apiSampleRequest /telegram/edit/text
 */
Route::post('telegram/edit/text', 'TelegramController@editTextMessage');

Route::post('saveGuestForm', 'ChatGuestsController@saveGuestForm');
Route::get('getGuestInfo/{contactDetailsId}', 'ChatGuestsController@getGuestInfo');

Route::get('livechatSettings/{companyId}', 'LivechatSettingsController@getLivechatSettings');
Route::put('livechatSettings/{companyId}', 'LivechatSettingsController@update');

Route::put('chatGuests/{id}', 'ChatGuestsController@update');
Route::get('chatGuests/{id}', 'ChatGuestsController@index');

Route::get('query_builder/{model}', 'TestController@executeQueryBuilder');
Route::get('test', 'TestController@test');
Route::post('updateOrder', 'OrderController@Store');

/**
 * @api {post} /test/generate/template Translate template
 * @apiName Translate template
 * @apiDescription This endpoint translate given template
 * @apiParam {String} template translatable values
 * @apiGroup Test
 * @apiParam {Number} language_id id of language
 * @apiSampleRequest /test/generate/template
 */
Route::post('test/generate/template', 'TestController@generateTemplate');

/**
 * @api {post} /test/translate Translate variable by key
 * @apiName Translate variable
 * @apiDescription This endpoint translate given variable by key
 * @apiParam {String} key variable key
 * @apiGroup Test
 * @apiSampleRequest /test/translate
 */
Route::post('test/translate', 'TestController@translateBykey');


Route::post('test/translate/fields', 'TestController@translateFields');

Route::get('test/metaData', 'TestController@testMeta');

/**
 * @api {get} /ui/windows Get all windows
 * @apiName Get all windows
 * @apiDescription This endpoint return all window objects
 * @apiHeader Accept-Language Accept-Language language
 * @apiGroup Windows
 * @apiParam device_width Device width in cm
 * @apiParam device_height Device height in cm
 * @apiParam version UI version like: 1505723274
 * @apiSampleRequest /backend/api/ui/windows
 */
Route::get('ui/windows', 'FrontWindowController@getWindowsBySize');

/**
 * @api {get} /ui/windows/{identifier} Get window by identifier
 * @apiName Get window by id
 * @apiDescription This endpoint return window by id
 * @apiGroup Windows
 * @apiParam identifier Window identifier ex: new_order_5_10
 * @apiSampleRequest /backend/api/ui/windows/:identifier
 */
Route::get('ui/windows/{identifier}', 'FrontWindowController@getWindowByIdentifier');

/**
 * @api {get} /metadata Get all entity metaData
 * @apiName Get all entity metadata
 * @apiDescription This endpoint returns all metadata
 * @apiHeader Accept-Language Accept-Language language
 * @apiGroup MetaData
 * @apiParam {String} version  metadata version ex: 1509465836
 * @apiSampleRequest /backend/api/metadata
 */
Route::get('metadata', 'MetaDataController@index');

/**
 * @api {get} /metadata/entities Get list of entities for metadata
 * @apiName Get metadata entities
 * @apiDescription This endpoint returns list of entities metadata
 * @apiGroup MetaData
 * @apiSampleRequest /backend/api/metadata/entities
 */
Route::get('metadata/entities', 'MetaDataController@all');

/**
 * @api {get} /metadata/:entity Get metaData for entity
 * @apiName Get metadata
 * @apiDescription This endpoint returns metadata
 * @apiGroup MetaData
 * @apiParam {String} entity  name of entity
 * @apiSampleRequest /backend/api/metadata/:entity
 */
Route::get('metadata/{entity}', 'MetaDataController@index');

Route::group(['middleware' => 'jwt.refresh'], function () {

//    Route::get('refresh', function() {
//
//    });
});


/**
 * @api {post} /import/countries Import countries
 * @apiName Import countries
 * @apiDescription This endpoint post list of countries
 * @apiGroup Import
 * @apiSampleRequest /backend/api/import/countries
 */
Route::post('import/countries', 'ImportController@importCountries');

/**
 * @api {post} /import/states Import states
 * @apiName Import states
 * @apiDescription This endpoint post list of states
 * @apiGroup Import
 * @apiSampleRequest /backend/api/import/states
 */
Route::post('import/states', 'ImportController@importStates');

/**
 * @api {post} /import/countries/content Import countries i18n for english language
 * @apiName Import countries i18n
 * @apiDescription This endpoint post list of countries i18n
 * @apiGroup Import
 * @apiSampleRequest /backend/api/import/countries/content
 */
Route::post('import/countries/content', 'ImportController@importCountriesContent');

/**
 * @api {get} /settings Get list of company settings
 * @apiName Get list of settings
 * @apiDescription This endpoint return list of settings
 * @apiGroup Settings
 * @apiSampleRequest /backend/api/settings
 */
Route::get('company-settings', 'SettingsController@getAuthSettings');

/**
 * @api {get} /role/available Get list of available permissions for current user
 * @apiName Get list of available permissions for current user
 * @apiDescription This endpoint return list of available permissions for current user
 * @apiHeader Authorization Authorization token
 * @apiGroup Permissions
 * @apiSampleRequest /backend/api/role/available
 */
Route::get('role/available', 'RolesController@availablePermissions');

/**
 * @api {get} /window/{name}/{width?}/{height?} Get window by name , width and height
 * @apiName Get window by name , width and height
 * @apiDescription This endpoint returns window by name,width and height
 * @apiHeader Authorization Authorization token
 * @apiGroup FrontWindow
 * @apiParam name - Name of the window Required
 * @apiParam width - Width of required window (Optional)
 * @apiParam height - Height of required window (Optional)
 * @apiSampleRequest /backend/api/window/{name}/{width?}/{height?}
 */
Route::get('window/{name}/{width?}/{height?}', 'FrontWindowController@getWindowByName');

/**
 * @api {get} /window-data/{name}/{width} Get window by name and width
 * @apiName Get window by name and width
 * @apiDescription This endpoint returns window by name and width
 * @apiHeader Authorization Authorization token
 * @apiGroup FrontWindow
 * @apiParam name - Name of the window Required
 * @apiParam width - Width of the window Required
 * @apiSampleRequest /backend/api/window-data/{name}/{width}
 */
Route::get('window-data/{name}/{width}', 'FrontWindowController@getWindowByNameWidth');

Route::get('search/{key}/{filter}', 'SearchController@searchByKey');

/**
 * @api {get} /room/messages Get room messages
 * @apiName Get list of room messages
 * @apiDescription This endpoint get list of room messages
 * @apiGroup RoomMessages
 * @apiSampleRequest /backend/api/room/messages
 */

/**
 * @api {post} /room/messages Add new room messages
 * @apiName  Add new room messages
 * @apiDescription This endpoint adds new room messages
 * @apiHeader Authorization Authorization token
 * @apiParam user.id - Required
 * @apiParam room.id - Required
 * @apiParam message - Required
 * @apiGroup RoomMessages
 * @apiSampleRequest /backend/api/room/messages/:id
 */

/**
 * @api {put} /room/messages/:id Update room messages
 * @apiName  Update room messages data
 * @apiDescription This endpoint update room messages information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of room messages
 * @apiParam message - Required
 * @apiGroup RoomMessages
 * @apiSampleRequest /backend/api/room/messages/:id
 */

/**
 * @api {delete} /room/messages/:id Delete room messagess
 * @apiName  Delete room messages data
 * @apiDescription This endpoint delete room messagess information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of room messages
 * @apiGroup RoomMessages
 * @apiSampleRequest /backend/api/room/messages/{id}/:id
 */

Route::resource('room/messages', 'RoomMessagesController', ['only' => ['store', 'update', 'destroy', 'index']]);

/**
 * @api {get} /chat/guests Get chat guests
 * @apiName Get list of chat guests
 * @apiDescription This endpoint get list of chat guests
 * @apiGroup ChatGuest
 * @apiSampleRequest /backend/api/chat/guests
 */

/**
 * @api {post} /chat/guests Add new chat guests
 * @apiName  Add new chat guests
 * @apiDescription This endpoint adds new chat guests
 * @apiHeader Authorization Authorization token
 * @apiParam name - Required
 * @apiParam email - Required
 * @apiParam question - Required
 * @apiParam user.id - Required
 * @apiParam visitor.id - Required
 * @apiGroup ChatGuest
 * @apiSampleRequest /backend/api/chat/guests/:id
 */

/**
 * @api {put} /chat/guests/:id Update chat guests
 * @apiName  Update chat guests data
 * @apiDescription This endpoint update chat guests information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of chat guests
 * @apiGroup ChatGuest
 * @apiSampleRequest /backend/api/chat/guests/:id
 */

/**
 * @api {delete} /chat/guests/:id Delete chat guestss
 * @apiName  Delete chat guests data
 * @apiDescription This endpoint delete chat guestss information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of chat guests
 * @apiGroup ChatGuest
 * @apiSampleRequest /backend/api/chat/guests/{id}/:id
 */

Route::resource('chat/guests', 'ChatGuestsController', ['only' => ['store', 'update', 'destroy', 'index']]);

/**
 * @api {get} /chat/rooms Get chat rooms
 * @apiName Get list of chat rooms
 * @apiDescription This endpoint get list of chat rooms
 * @apiGroup ChatRoom
 * @apiSampleRequest /backend/api/chat/rooms
 */

/**
 * @api {post} /chat/rooms Add new chat rooms
 * @apiName  Add new chat rooms
 * @apiDescription This endpoint adds new chat rooms
 * @apiHeader Authorization Authorization token
 * @apiParam company.id - Required
 * @apiParam title - Required
 * @apiParam user.id - Required
 * @apiGroup ChatRoom
 * @apiSampleRequest /backend/api/chat/rooms/:id
 */

/**
 * @api {put} /chat/rooms/:id Update chat rooms
 * @apiName  Update chat rooms data
 * @apiDescription This endpoint update chat rooms information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of chat rooms
 * @apiParam is_active - Required
 * @apiGroup ChatRoom
 * @apiSampleRequest /backend/api/chat/rooms/:id
 */

/**
 * @api {delete} /chat/rooms/:id Delete chat roomss
 * @apiName  Delete chat rooms data
 * @apiDescription This endpoint delete chat roomss information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of chat rooms
 * @apiGroup ChatRoom
 * @apiSampleRequest /backend/api/chat/rooms/{id}/:id
 */

Route::resource('chat/rooms', 'ChatRoomsController', ['only' => ['store', 'update', 'destroy', 'index']]);

/**
 * @api {get} /chat/invitations Get chat invitations
 * @apiName Get list of chat invitations
 * @apiDescription This endpoint get list of chat invitations
 * @apiGroup ChatInvitations
 * @apiSampleRequest /backend/api/chat/invitations
 */

/**
 * @api {post} /chat/invitations Add new chat invitations
 * @apiName  Add new chat invitations
 * @apiDescription This endpoint adds new chat invitations
 * @apiHeader Authorization Authorization token
 * @apiParam room.id - Required
 * @apiGroup ChatInvitations
 * @apiSampleRequest /backend/api/chat/invitations/:id
 */

/**
 * @api {put} /chat/invitations/:id Update chat invitations
 * @apiName  Update chat invitations data
 * @apiDescription This endpoint update chat invitations information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of chat invitations
 * @apiGroup ChatInvitations
 * @apiSampleRequest /backend/api/chat/invitations/:id
 */

/**
 * @api {delete} /chat/invitations/:id Delete chat invitationss
 * @apiName  Delete chat invitations data
 * @apiDescription This endpoint delete chat invitationss information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of chat invitations
 * @apiGroup ChatInvitations
 * @apiSampleRequest /backend/api/chat/invitations/{id}/:id
 */

Route::resource('chat/invitations', 'ChatGuestsController', ['only' => ['store', 'update', 'destroy', 'index']]);

/**
 * @api {get} /chat/smileys Get chat smileys
 * @apiName Get list of chat smileys
 * @apiDescription This endpoint get list of chat smileys
 * @apiGroup ChatSmileys
 * @apiSampleRequest /backend/api/chat/smileys
 */

/**
 * @api {post} /chat/smileys Add new chat smileys
 * @apiName  Add new chat smileys
 * @apiDescription This endpoint adds new chat smileys
 * @apiHeader Authorization Authorization token
 * @apiParam code - Required
 * @apiParam url - Required
 * @apiParam user.id - Required
 * @apiParam company.id - Required
 * @apiGroup ChatSmileys
 * @apiSampleRequest /backend/api/chat/smileys/:id
 */

/**
 * @api {put} /chat/smileys/:id Update chat smileys
 * @apiName  Update chat smileys data
 * @apiDescription This endpoint update chat smileys information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of chat smileys
 * @apiGroup ChatSmileys
 * @apiSampleRequest /backend/api/chat/smileys/:id
 */

/**
 * @api {delete} /chat/smileys/:id Delete chat smileyss
 * @apiName  Delete chat smileys data
 * @apiDescription This endpoint delete chat smileyss information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of chat smileys
 * @apiGroup ChatSmileys
 * @apiSampleRequest /backend/api/chat/smileys/{id}/:id
 */

Route::resource('chat/smileys', 'ChatSmileysController', ['only' => ['store', 'update', 'destroy', 'index']]);

/**
 * @api {get} /room/files Get room files
 * @apiName Get list of room files
 * @apiDescription This endpoint get list of room files
 * @apiGroup RoomFiles
 * @apiSampleRequest /backend/api/room/files
 */

/**
 * @api {post} /room/files Add new room files
 * @apiName  Add new room files
 * @apiDescription This endpoint adds new room files
 * @apiHeader Authorization Authorization token
 * @apiParam room.id - required
 * @apiParam user.id - required
 * @apiParam message.id - required
 * @apiParam company.id - required
 * @apiParam url - required
 * @apiGroup RoomFiles
 * @apiSampleRequest /backend/api/room/files/:id
 */

/**
 * @api {put} /room/files/:id Update room files
 * @apiName  Update room files data
 * @apiDescription This endpoint update room files information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of room files
 * @apiGroup RoomFiles
 * @apiSampleRequest /backend/api/room/files/:id
 */

/**
 * @api {delete} /room/files/:id Delete room files
 * @apiName  Delete room files data
 * @apiDescription This endpoint delete room files information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of room files
 * @apiGroup RoomFiles
 * @apiSampleRequest /backend/api/room/files/{id}/:id
 */

Route::resource('room/files', 'RoomFilesController', ['only' => ['store', 'update', 'destroy', 'index']]);

/**
 * @api {get} /room/users Get room users
 * @apiName Get list of room users
 * @apiDescription This endpoint get list of room users
 * @apiGroup RoomUsers
 * @apiSampleRequest /backend/api/room/users
 */

/**
 * @api {post} /room/users Add new room users
 * @apiName  Add new room users
 * @apiDescription This endpoint adds new room users
 * @apiHeader Authorization Authorization token
 * @apiParam room.id - required
 * @apiParam user.id - required
 * @apiGroup RoomUsers
 * @apiSampleRequest /backend/api/room/users/:id
 */

/**
 * @api {put} /room/users/:id Update room users
 * @apiName  Update room users data
 * @apiDescription This endpoint update room users information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of room users
 * @apiGroup RoomUsers
 * @apiSampleRequest /backend/api/room/users/:id
 */

/**
 * @api {delete} /room/users/:id Delete room users
 * @apiName  Delete room users data
 * @apiDescription This endpoint delete room users information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of room users
 * @apiGroup RoomUsers
 * @apiSampleRequest /backend/api/room/users/{id}/:id
 */

Route::resource('room/users', 'RoomUsersController', ['only' => ['store', 'update', 'destroy', 'index']]);

/**
 * @api {get} /visitors Get visitors
 * @apiName Get list of visitors
 * @apiDescription This endpoint get list of visitors
 * @apiGroup Visitors
 * @apiSampleRequest /backend/api/visitors
 */

/**
 * @api {post} /visitors Add new visitors
 * @apiName  Add new visitors
 * @apiDescription This endpoint adds new visitors
 * @apiHeader Authorization Authorization token
 * @apiParam ip_address - Required
 * @apiParam language.id - Required
 * @apiParam country.id - Required
 * @apiParam state.id - Required
 * @apiParam user.id - Required
 * @apiParam device - Required
 * @apiParam browser - Required
 * @apiParam referer - Required
 * @apiParam is_mobile - Required
 * @apiParam page_views - Required
 * @apiGroup Visitors
 * @apiSampleRequest /backend/api/visitors/:id
 */

/**
 * @api {put} /visitors/:id Update visitors
 * @apiName  Update visitors data
 * @apiDescription This endpoint update visitors information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of visitors
 * @apiParam ip_address - Required
 * @apiParam language.id - Required
 * @apiParam country.id - Required
 * @apiParam state.id - Required
 * @apiParam user.id - Required
 * @apiParam device - Required
 * @apiParam browser - Required
 * @apiParam referer - Required
 * @apiParam is_mobile - Required
 * @apiParam page_views - Required
 * @apiGroup Visitors
 * @apiSampleRequest /backend/api/visitors/:id
 */

/**
 * @api {delete} /visitors/:id Delete visitors
 * @apiName  Delete visitors data
 * @apiDescription This endpoint delete visitors information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of visitors
 * @apiGroup Visitors
 * @apiSampleRequest /backend/api/visitors/{id}/:id
 */

Route::resource('visitors', 'VisitorsController', ['only' => ['store', 'update', 'destroy', 'index']]);

/**
 * @api {get} /visits Get visits
 * @apiName Get list of visits
 * @apiDescription This endpoint get list of visits
 * @apiGroup Visits
 * @apiSampleRequest /backend/api/visits
 */

/**
 * @api {post} /visits Add new visits
 * @apiName  Add new visits
 * @apiDescription This endpoint adds new visits
 * @apiHeader Authorization Authorization token
 * @apiParam ip_address - Required
 * @apiParam domain.id - Required
 * @apiParam visitor_id - Required
 * @apiParam page_url - Required
 * @apiParam page_views - Required
 * @apiGroup Visits
 * @apiSampleRequest /backend/api/visits/:id
 */

/**
 * @api {put} /visits/:id Update visits
 * @apiName  Update visits data
 * @apiDescription This endpoint update visits information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of visits
 * @apiParam page_views - Required
 * @apiGroup Visits
 * @apiSampleRequest /backend/api/visits/:id
 */

/**
 * @api {delete} /visits/:id Delete visits
 * @apiName  Delete visits data
 * @apiDescription This endpoint delete visits information
 * @apiHeader Authorization Authorization token
 * @apiParam id ID of visits
 * @apiGroup Visits
 * @apiSampleRequest /backend/api/visits/{id}/:id
 */

Route::resource('visits', 'VisitsController', ['only' => ['store', 'update', 'destroy', 'index']]);

/**
 * @api {post} livechat/message/upload Upload file for conversation
 * @apiName Get all online visitors
 * @apiDescription This endpoint upload file to server and create thumbnail for images (used for attachements)
 * @apiHeader Authorization Authorization token
 * @apiParam file file to upload (Required)
 * @apiParam room_id id of room (Required)
 * @apiGroup Chat Messages
 * @apiSampleRequest livechat/message/upload
 */
Route::post('livechat/message/upload', 'RoomMessagesController@saveLiveChatFile');


/**
* Get emoji by code
*/

Route::get('emoji/{code}','ChatSmileysController@getByCode');
Route::get('emojis','ChatSmileysController@getList');
Route::get('chat/settings','ChatSettingController@getSettings');

Route::get('test/chat', 'TestController@testChat'); // test country helper

Route::get('test/country', 'CountryController@test'); // test country helper
Route::get('test/vat', 'VatController@test'); // test vat helper
Route::get('test/counterpart', 'CounterpartsController@test'); // test vat helper
