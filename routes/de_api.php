<?php

/**
 * DataExchange API Routes v1
 */

Route::group(['middleware' => 'evrica.auth'], function () {

    /**
     * @api {get} /de/item/cache Get list of items
     * @apiName  Get list of items
     * @apiDescription This endpoint return list of items
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get item cache by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/cache
     */

    /**
     * @api {post} /de/item/cache Add new item cache
     * @apiName  Add new item cache
     * @apiDescription This endpoint creates a new item cache
     * @apiHeader Authorization Authorization token
     * @apiParam user.id (Required)
     * @apiParam storage.id (Required)
     * @apiParam title (Required)
     * @apiParam path (Required)
     * @apiParam parent.id (Required)
     * @apiParam size (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/item/cache
     */

    /**
     * @api {put} /de/item/cache/:id Update item cache
     * @apiName  Update item cache
     * @apiDescription This endpoint update the information about item cache
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item cache)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/cache/:id
     */

    /**
     * @api {delete} /de/item/cache/:id Delete item cache
     * @apiName  Delete item cache
     * @apiDescription This endpoint delete item cache
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item cache)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/cache/:id
     */

    Route::resource('de/item/cache', 'DEItemCacheController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /de/item/comment Get list of item comments
     * @apiName  Get list of item comments
     * @apiDescription This endpoint return list of item comments
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get item comment by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/comment
     */

    /**
     * @api {post} /de/item/comment Add new item comment
     * @apiName  Add new item comment
     * @apiDescription This endpoint creates a new item comment
     * @apiHeader Authorization Authorization token
     * @apiParam user.id (Required)
     * @apiParam message (Required)
     * @apiParam item.id (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/item/comment
     */

    /**
     * @api {put} /de/item/comment/:id Update item comment
     * @apiName  Update item comment
     * @apiDescription This endpoint update the information about item comment
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item comment)
     * @apiParam message (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/comment/:id
     */

    /**
     * @api {delete} /de/item/comment/:id Delete item comment
     * @apiName  Delete item comment
     * @apiDescription This endpoint delete item comment
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item comment)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/comment/:id
     */

    Route::resource('de/item/comment', 'DEItemCommentController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /de/item/favorite Get list of favorite items
     * @apiName  Get list of favorite items
     * @apiDescription This endpoint return list of favorite items
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get item favorite by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/favorite
     */

    /**
     * @api {post} /de/item/favorite Add new item favorite
     * @apiName  Add new item favorite
     * @apiDescription This endpoint creates a new item favorite
     * @apiHeader Authorization Authorization token
     * @apiParam user.id (Required)
     * @apiParam item.id (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/item/favorite
     */

    /**
     * @api {put} /de/item/favorite/:id Update item favorite
     * @apiName  Update item favorite
     * @apiDescription This endpoint update the information about item favorite
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item favorite)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/favorite/:id
     */

    /**
     * @api {delete} /de/item/favorite/:id Delete item favorite
     * @apiName  Delete item favorite
     * @apiDescription This endpoint delete item favorite
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item favorite)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/favorite/:id
     */

    Route::resource('de/item/favorite', 'DEItemFavoriteController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /de/item/trash Get list of item in trash
     * @apiName  Get list of items in trash
     * @apiDescription This endpoint return list of items in trash
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get item in trash by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/trash
     */

    /**
     * @api {post} /de/item/trash Add new item trash
     * @apiName  Add new item trash
     * @apiDescription This endpoint creates a new item trash
     * @apiHeader Authorization Authorization token
     * @apiParam user.id (Required)
     * @apiParam item.id (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/item/trash
     */

    /**
     * @api {put} /de/item/trash/:id Update item trash
     * @apiName  Update item trash
     * @apiDescription This endpoint update the information about item trash
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item trash)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/trash/:id
     */

    /**
     * @api {delete} /de/item/trash/:id Delete item trash
     * @apiName  Delete item trash
     * @apiDescription This endpoint delete item trash
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item trash)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/trash/:id
     */

    Route::resource('de/item/trash', 'DEItemTrashController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /de/item/type Get list of item types
     * @apiName  Get list of item types
     * @apiDescription This endpoint return list of item types
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get item type by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/type
     */

    /**
     * @api {post} /de/item/type Add new item type
     * @apiName  Add new item type
     * @apiDescription This endpoint creates a new item type
     * @apiHeader Authorization Authorization token
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/item/type
     */

    /**
     * @api {put} /de/item/type/:id Update item type
     * @apiName  Update item type
     * @apiDescription This endpoint update the information about item type
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item type)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/type/:id
     */

    /**
     * @api {delete} /de/item/type/:id Delete item type
     * @apiName  Delete item type
     * @apiDescription This endpoint delete item type
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item type)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/type/:id
     */

    Route::resource('de/item/type', 'DEItemTypeController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /de/mimetype Get list of mimetypes
     * @apiName  Get list of mimetypes
     * @apiDescription This endpoint return list of mimetypes
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get mimetype by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/mimetype
     */

    /**
     * @api {post} /de/mimetype Add new mimetype
     * @apiName  Add new mimetype
     * @apiDescription This endpoint creates a new mimetype
     * @apiHeader Authorization Authorization token
     * @apiParam mimetype (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/mimetype
     */

    /**
     * @api {put} /de/mimetype/:id Update mimetype
     * @apiName  Update mimetype
     * @apiDescription This endpoint update the information about mimetype
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of mimetype)
     * @apiParam mimetype (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/mimetype/:id
     */

    /**
     * @api {delete} /de/mimetype/:id Delete mimetype
     * @apiName Delete mimetype
     * @apiDescription This endpoint delete mimetype
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of mimetype)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/mimetype/:id
     */

    Route::resource('de/mimetype', 'DEMimeTypeController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /de/share Get list of shares
     * @apiName  Get list of shares
     * @apiDescription This endpoint return list of shares
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get share by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/share
     */

    /**
     * @api {post} /de/share Add new share
     * @apiName  Add new share
     * @apiDescription This endpoint creates a new share
     * @apiHeader Authorization Authorization token
     * @apiParam title (Required)
     * @apiParam token (Required)
     * @apiParam item.id (Required)
     * @apiParam permission.id (Required)
     * @apiParam owner.id (Required)
     * @apiParam initiator.id (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/share
     */

    /**
     * @api {put} /de/share/:id Update share
     * @apiName  Update share
     * @apiDescription This endpoint update the information about share
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of share)
     * @apiParam token (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/share/:id
     */

    /**
     * @api {delete} /de/share/:id Delete share
     * @apiName Delete share
     * @apiDescription This endpoint delete share
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of share)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/share/:id
     */

    Route::resource('de/share', 'DEShareController', ['only' => ['update', 'index']]);

    /**
     * @api {get} /de/share/type Get list of share types
     * @apiName  Get list of share types
     * @apiDescription This endpoint return list of share types
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get share type by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/share/type
     */

    /**
     * @api {post} /de/share/type Add new share type
     * @apiName  Add new share type
     * @apiDescription This endpoint creates a new share type
     * @apiHeader Authorization Authorization token
     * @apiParam code (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/share/type
     */

    /**
     * @api {put} /de/share/type/:id Update share type
     * @apiName  Update share type
     * @apiDescription This endpoint update the information about share type
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of share type)
     * @apiParam code (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/share/type/:id
     */

    /**
     * @api {delete} /de/share/type/:id Delete share type
     * @apiName Delete share type
     * @apiDescription This endpoint delete share type
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of share type)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/share/type/:id
     */

    Route::resource('de/share/type', 'DEShareTypeController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /de/storage Get list of storages
     * @apiName  Get list of storages
     * @apiDescription This endpoint return list of storages
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get storage by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/storage
     */

    /**
     * @api {post} /de/storage Add new storage
     * @apiName  Add new storage
     * @apiDescription This endpoint creates a new storage
     * @apiHeader Authorization Authorization token
     * @apiParam base_path (Required)
     * @apiParam company.id (Required)
     * @apiParam is_available (Required)
     * @apiParam last_checked (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/storage
     */

    /**
     * @api {put} /de/storage/:id Update storage
     * @apiName  Update storage
     * @apiDescription This endpoint update the information about storage
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of storage)
     * @apiParam last_checked (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/storage/:id
     */

    /**
     * @api {delete} /de/storage/:id Delete storage
     * @apiName Delete storage
     * @apiDescription This endpoint delete storage
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of storage)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/storage/:id
     */

    Route::resource('de/storage', 'DEStorageController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {post} /de/permissions Add new permission
     * @apiName  Add new permission
     * @apiDescription This endpoint creates a new permission
     * @apiHeader Authorization Authorization token
     * @apiParam permission.id (Required)
     * @apiParam sharw.id (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/permissions
     */

    /**
     * @api {put} /de/permissions/:id Update permission
     * @apiName  Update permission
     * @apiDescription This endpoint update the information about permission
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of permission)
     * @apiParam permission.id (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/permissions/:id
     */

    /**
     * @api {delete} /de/permissions/:id Delete permission
     * @apiName Delete permission
     * @apiDescription This endpoint delete permission
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of permission)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/permissions/:id
     */

    Route::resource('de/permissions', 'DESharePermissionController', ['only' => ['store', 'update', 'destroy']]);

    /**
     * @api {get} /de/item/label Get list of label items
     * @apiName  Get list of label items
     * @apiDescription This endpoint return list of label items
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get item label by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/label
     */

    /**
     * @api {post} /de/item/label Add new item label
     * @apiName  Add new item label
     * @apiDescription This endpoint creates a new item label
     * @apiHeader Authorization Authorization token
     * @apiParam user.id (Required)
     * @apiParam item.id (Required)
     * @apiParam label.id (Required)
     * @apiParam title (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/item/label
     */

    /**
     * @api {put} /de/item/label/:id Update item label
     * @apiName  Update item label
     * @apiDescription This endpoint update the information about item label
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item label)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/label/:id
     */

    /**
     * @api {delete} /de/item/label/:id Delete item label
     * @apiName  Delete item label
     * @apiDescription This endpoint delete item label
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item label)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/item/label/:id
     */

    Route::resource('de/item/label', 'DEItemLabelController', ['only' => ['store', 'update', 'destroy', 'index']]);

    /**
     * @api {get} /de/label Get list of labels
     * @apiName  Get list of label
     * @apiDescription This endpoint return list of labels
     * @apiHeader Authorization Authorization token
     * @apiParam id (Optional) (Get item label by id)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/label
     */

    /**
     * @api {post} /de/label Add new label
     * @apiName  Add new label
     * @apiDescription This endpoint creates a new label
     * @apiHeader Authorization Authorization token
     * @apiParam user.id (Required)
     * @apiParam color.id (Required)
     * @apiParam title (Required)
     * @apiGroup DataExchange
     * @apiSampleRequest backend/api/de/label
     */

    /**
     * @api {put} /de/label/:id Update label
     * @apiName  Update label
     * @apiDescription This endpoint update the information about label
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of label)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/label/:id
     */

    /**
     * @api {delete} /de/label/:id Delete label
     * @apiName  Delete label
     * @apiDescription This endpoint delete label
     * @apiHeader Authorization Authorization token
     * @apiParam id (Required) (id of item label)
     * @apiGroup DataExchange
     * @apiSampleRequest /backend/api/de/label/:id
     */

    Route::resource('de/label', 'DELabelController', ['only' => ['store', 'update', 'destroy', 'index']]);
    /**
     * #apiName Test permission
     */
    Route::get('de/test/permissions', 'DEItemCacheController@testPermission');

    /**
     * @apiName Post a item label
     * @apiParam item (Required)
     * @apiParam title (Required)
     * @apiParam color (Required)
     */
    Route::post('de/label/item', 'DEItemLabelController@setLabelItem');

});

/**
 * !!!!! ROUTES ARE NOT PROTECTED !!!!!
 */

/**
 * #apiName Get users and departments by title
 */
Route::get('de/user/departments', 'DEItemCacheController@searchUserDepartments');

/**
 * @apiName Get DataExchange items by type and parent
 * @apiDescription This endpoint will give item from user default folder if no type is set
 * @apiParam type (Optional)
 * @apiParam parent (Optional)
 */
Route::get('data/exchange/{type?}/{parent?}', 'DECompanyController@index');

/**
 * @api {get} /de/permissions Get list of permissions
 * @apiName  Get list of permissions
 * @apiDescription This endpoint return list of permissions
 * @apiHeader Authorization Authorization token
 * @apiParam id (Optional) (Get permission by id)
 * @apiGroup DataExchange
 * @apiSampleRequest /backend/api/de/permissions
 */

Route::get('de/permissions', 'DESharePermissionController@getPermissions');

/**
 * @apiName Get item shares
 * @apiParam hash (Required)
 */
Route::get('de/share/{hash}/{type?}', 'DEShareController@getItemShares');

/**
 * @apiName Post a share with permissions
 * @apiParam hash (Required)
 * @apiParam permission_ids (Required)
 */
Route::post('de/share/{hash}/{type?}/{id?}', 'DEShareController@sharePermissions');

/**
 * @apiName Delete a share
 * @apiParam id (Required)
 */
Route::delete('de/share/{id}', 'DEShareController@delete');

/**
 * @apiName Delete item
 * @apiParam hash (Required)
 */
Route::delete('de/item/{hash}', 'DEItemCacheController@deleteCacheItem');

/**
 * @apiName Restore item from trash
 * @apiParam hash (Required)
 */
Route::post('de/item/restore/{hash}', 'DEItemCacheController@restoreCacheItem');


/**
 * @apiName Get DataExchange item comment by id
 */
Route::get('de/item/comment/{id}', 'DEItemCommentController@getItemCommentById');

/**
 * @apiName Get DataExchange item by hash
 */
Route::get('de/item/{hash}', 'DEItemCacheController@getCacheItem');

/**
 * @apiName Get DataExchange item by search string
 */
Route::get('de/item/search/{query}', 'DEItemCacheController@searchCacheItem');

/**
 * @apiName Get DataExchange item by search label
 */
Route::get('de/items/label/{id}', 'DEItemCacheController@searchCacheItemByLabel');

/**
 * @apiName Get data by parent
 */
Route::get('de/parent/{parentHash}', 'DECompanyController@indexParent');

/**
 * @apiName Upload files and folders
 */
Route::post('de/upload/{parentHash}', 'DEItemCacheController@uploadParent');

/**
 * @apiName Create folder / file by extension
 * @apiParam title (Required)
 */
Route::post('data/exchange/{parentHash}/{type}/{extension?}', 'DECompanyController@store');


/**
 * @apiName Get DataExchange item comments by hash
 */
Route::get('de/item/comments/{hash}', 'DEItemCommentController@getItemComments');

/**
 * #apiName Get share data by token
 */
Route::get('de/shared/{token}', 'DEShareController@getShareByToken');
