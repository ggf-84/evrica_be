<?php

Route::group(['middleware' => 'evrica.auth'], function () {

    /**
     * @api {get} /pm/board Get pm boards
     * @apiName Get list of pm boards
     * @apiDescription This endpoint get list of pm board
     * @apiGroup PmBoards
     * @apiSampleRequest /backend/api/pm/board
     */

    /**
     * @api {post} /pm/board Add new pm boards
     * @apiName  Add new pm boards
     * @apiDescription This endpoint adds new pm boards
     * @apiHeader Authorization Authorization token
     * @apiParam title pm boards
     * @apiParam team_id pm boards
     * @apiParam background pm boards
     * @apiParam visibility_id pm boards
     * @apiParam company_id pm boards
     * @apiGroup PmBoards
     * @apiSampleRequest /backend/api/pm/board
     */

    /**
     * @api {put} /pm/board/:id Update pm boards
     * @apiName  Update pm boards data
     * @apiDescription This endpoint update pm boards information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of pm boards
     * @apiParam title pm boards
     * @apiParam team_id pm boards
     * @apiParam background pm boards
     * @apiParam visibility_id pm boards
     * @apiParam company_id pm boards
     * @apiGroup PmBoards
     * @apiSampleRequest /backend/api/pm/board/:id
     */

    /**
     * @api {delete} /pm/board/:id Delete pm board
     * @apiName  Delete payment/gateways data
     * @apiDescription This endpoint delete pm board information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of pm board
     * @apiGroup InvoiceProducts
     * @apiSampleRequest /backend/api/pm/board/:id
     */
    Route::resource('pm/board', 'PmBoardsController', ['only' => ['store', 'update', 'index']]);

    /**
     * @api {get} /pm/team Get pm team
     * @apiName Get list of pm team
     * @apiDescription This endpoint get list of pm board
     * @apiGroup PmTeam
     * @apiSampleRequest /backend/api/pm/team
     */

    /**
     * @api {post} /pm/team Add new pm team
     * @apiName  Add new pm team
     * @apiDescription This endpoint adds new pm team
     * @apiHeader Authorization Authorization token
     * @apiParam title pm team
     * @apiParam company_id
     * @apiGroup PmTeam
     * @apiSampleRequest /backend/api/pm/team
     */

    /**
     * @api {put} /pm/team/:id Update pm team
     * @apiName  Update pm team data
     * @apiDescription This endpoint update pm team information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of pm team
     * @apiParam title pm team
     * @apiParam company_id
     * @apiGroup PmTeam
     * @apiSampleRequest /backend/api/pm/team/:id
     */

    /**
     * @api {delete} /pm/team/:id Delete pm board
     * @apiName  Delete payment/gateways data
     * @apiDescription This endpoint delete pm board information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of pm board
     * @apiGroup PmTeam
     * @apiSampleRequest /backend/api/pm/team/:id
     */
    Route::resource('pm/team', 'PmTeamController', ['only' => ['store', 'update', 'index']]);

    /**
     * @api {get} /pm/list Get pm list
     * @apiName Get list of pm list
     * @apiDescription This endpoint get list of pm board
     * @apiGroup PmList
     * @apiSampleRequest /backend/api/pm/list
     */

    /**
     * @api {post} /pm/list Add new pm list
     * @apiName  Add new pm list
     * @apiDescription This endpoint adds new pm list
     * @apiHeader Authorization Authorization token
     * @apiParam title pm list
     * @apiParam board_id
     * @apiGroup PmList
     * @apiSampleRequest /backend/api/pm/list
     */

    /**
     * @api {put} /pm/list/:id Update pm list
     * @apiName  Update pm list data
     * @apiDescription This endpoint update pm list information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of pm list
     * @apiParam title pm list
     * @apiParam board_id
     * @apiGroup PmList
     * @apiSampleRequest /backend/api/pm/list/:id
     */

    /**
     * @api {delete} /pm/list/:id Delete pm list
     * @apiName  Delete payment/gateways data
     * @apiDescription This endpoint delete pm list information
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of pm list
     * @apiGroup PmList
     * @apiSampleRequest /backend/api/pm/list/:id
     */
    Route::resource('pm/list', 'PmListController', ['only'=>['store','update','index','destroy']]);

    /**
     * @api {get} /pm/labels/colors Get colors
     * @apiName Get list of label colors
     * @apiDescription This endpoint get list of colors
     * @apiGroup PmColors
     * @apiSampleRequest /backend/api/pm/labels/colors
     */

    /**
     * @api {post} /pm/labels/colors Add new colors
     * @apiName  Add new colors
     * @apiDescription This endpoint adds new colors
     * @apiHeader Authorization Authorization token
     * @apiParam color colors
     * @apiGroup PmColors
     * @apiSampleRequest /backend/api/pm/labels/colors
     */

    /**
     * @api {put} /pm/labels/colors/:id Update colors
     * @apiName  Update colors data
     * @apiDescription This endpoint update pm colors
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of color
     * @apiParam color color title
     * @apiGroup PmColors
     * @apiSampleRequest /backend/api/pm/labels/colors/:id
     */

    /**
     * @api {delete} /pm/labels/colors/:id Delete color
     * @apiName  Delete color data
     * @apiDescription This endpoint delete color by id
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of color
     * @apiGroup PmColors
     * @apiSampleRequest /backend/api/pm/labels/colors/:id
     */
    Route::resource('pm/labels/colors', 'PmLabelColorController', ['only'=>['store','update','index','destroy']]);

    /**
     * @api {get} /pm/board/labels Get labels
     * @apiName Get list of label labels
     * @apiDescription This endpoint get list of labels
     * @apiGroup PmLabels
     * @apiSampleRequest /backend/api/pm/board/labels
     */

    /**
     * @api {post} /pm/board/labels Add new labels
     * @apiName  Add new labels
     * @apiDescription This endpoint adds new labels
     * @apiHeader Authorization Authorization token
     * @apiParam color color
     * @apiParam board board
     * @apiGroup PmLabels
     * @apiSampleRequest /backend/api/pm/board/labels
     */

    /**
     * @api {put} /pm/board/labels/:id Update labels
     * @apiName  Update labels data
     * @apiDescription This endpoint update pm labels
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of label
     * @apiParam color color
     * @apiParam board board
     * @apiGroup PmLabels
     * @apiSampleRequest /backend/api/pm/board/labels/:id
     */

    /**
     * @api {delete} /pm/board/labels/:id Delete label
     * @apiName  Delete label data
     * @apiDescription This endpoint delete label by id
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of label
     * @apiGroup PmLabels
     * @apiSampleRequest /backend/api/pm/board/labels/:id
     */
    Route::resource('pm/board/labels', 'PmBoardLabelController', ['only'=>['store','update','index','destroy']]);

    /**
     * @api {get} /pm/tasks Get Tasks
     * @apiName Get list of Tasks
     * @apiDescription This endpoint get list of Tasks
     * @apiGroup PmTasks
     * @apiSampleRequest /backend/api/pm/tasks
     */

    /**
     * @api {post} /pm/tasks Add new Task
     * @apiName  Add new Task
     * @apiDescription This endpoint adds new Task
     * @apiHeader Authorization Authorization token
     * @apiParam title Task title
     * @apiParam description Task description
     * @apiParam due_date Task due_date
     * @apiParam user Task creator user:{id: user_id}
     * @apiParam background Task background
     * @apiParam attachment Task cover attachment:{id:attachment_id}
     * @apiParam list Task List list:{id:attachment_id}
     * @apiParam priority Task priority (float number)
     * @apiGroup PmTasks
     * @apiSampleRequest /backend/api/pm/tasks
     */

    /**
     * @api {put} /pm/tasks/:id Update Tasks
     * @apiName  Update Tasks data
     * @apiDescription This endpoint update pm Tasks
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of Task
     * @apiParam title Task title
     * @apiParam description Task description
     * @apiParam due_date Task due_date
     * @apiParam user Task creator user:{id: user_id}
     * @apiParam background Task background
     * @apiParam attachment Task cover attachment:{id:attachment_id}
     * @apiParam list Task List list:{id:attachment_id}
     * @apiParam priority Task priority (float number)
     * @apiGroup PmTasks
     * @apiSampleRequest /backend/api/pm/tasks/:id
     */

    /**
     * @api {delete} /pm/tasks/:id Delete Task
     * @apiName  Delete Task data
     * @apiDescription This endpoint delete Task by id
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of Task
     * @apiGroup PmTasks
     * @apiSampleRequest /backend/api/pm/tasks/:id
     */
    Route::resource('pm/tasks', 'TaskController', ['only'=>['store','update','index','destroy']]);

    /**
     * @api {get} /pm/tasks/checklists Get checklists
     * @apiName Get list of checklists
     * @apiDescription This endpoint get list of checklists
     * @apiGroup PmChecklists
     * @apiSampleRequest /backend/api/pm/tasks/checklists
     */

    /**
     * @api {post} /pm/tasks/checklists Add new checklist
     * @apiName  Add new checklist
     * @apiDescription This endpoint adds new checklist
     * @apiHeader Authorization Authorization token
     * @apiParam title checklist title
     * @apiParam task task task:{id:task_id}
     * @apiGroup PmChecklists
     * @apiSampleRequest /backend/api/pm/tasks/checklists
     */

    /**
     * @api {put} /pm/tasks/checklists/:id Update checklist
     * @apiName  Update checklist data
     * @apiDescription This endpoint update pm checklist
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of checklist
     * @apiParam title checklist title
     * @apiParam task task task:{id:task_id}
     * @apiGroup PmChecklists
     * @apiSampleRequest /backend/api/pm/tasks/checklists/:id
     */

    /**
     * @api {delete} /pm/tasks/checklists/:id Delete checklist
     * @apiName  Delete checklist data
     * @apiDescription This endpoint delete checklist by id
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of checklist
     * @apiGroup PmChecklists
     * @apiSampleRequest /backend/api/pm/tasks/checklists/:id
     */
    Route::resource('pm/tasks/checklists', 'TaskChecklistController', ['only' => ['store', 'update', 'index', 'destroy']]);

    /**
     * @api {get} /pm/checklists/items Get checklists items
     * @apiName Get list of checklists items
     * @apiDescription This endpoint get list of checklists items
     * @apiGroup PmChecklistsItems
     * @apiSampleRequest /backend/api/pm/checklists/items
     */

    /**
     * @api {post} /pm/checklists/items Add new checklist item
     * @apiName  Add new checklist item
     * @apiDescription This endpoint adds new checklist item
     * @apiHeader Authorization Authorization token
     * @apiParam content checklist title
     * @apiParam is_done item is_done
     * @apiParam priority item priority (float number for ordering items)
     * @apiParam checklist checklist checklist:{id:checklist_id}
     * @apiGroup PmChecklistsItems
     * @apiSampleRequest /backend/api/pm/checklists/items
     */

    /**
     * @api {put} /pm/checklists/items/:id Update checklist item
     * @apiName  Update checklist item data
     * @apiDescription This endpoint update pm checklist item
     * @apiHeader Authorization Authorization token
     * @apiParam id checklist item ID
     * @apiParam content checklist item content
     * @apiParam is_done item is_done
     * @apiParam priority item priority (float number for ordering items)
     * @apiParam checklist checklist checklist:{id:checklist_id}
     * @apiGroup PmChecklistsItems
     * @apiSampleRequest /backend/api/pm/checklists/items/:id
     */

    /**
     * @api {delete} /pm/checklists/items/:id Delete checklist item
     * @apiName  Delete checklist item
     * @apiDescription This endpoint delete checklist item by id
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of checklist item
     * @apiGroup PmChecklistsItems
     * @apiSampleRequest /backend/api/pm/checklists/items/:id
     */
    Route::resource('pm/checklists/items', 'TaskChecklistItemController', ['only' => ['store', 'update', 'index', 'destroy']]);


    /**
     * @api {post} /pm/tasks/{task_id}/attachments Add task attachments
     * @apiName  Add task attachments
     * @apiDescription This endpoint adds task attachments
     * @apiHeader Authorization Authorization token
     * @apiParam attachments array of files
     * @apiGroup PmTaskAttachments
     * @apiSampleRequest /backend/api/pm/tasks/:task/attachments
     */
    Route::post('pm/tasks/{task_id}/attachments', 'TaskAttachmentController@store');

    /**
     * @api {delete} /pm/tasks/attachments/{id} Delete task attachment
     * @apiName  Delete task attachment
     * @apiDescription This endpoint removes task attachment
     * @apiHeader Authorization Authorization token
     * @apiGroup PmTaskAttachments
     * @apiSampleRequest /backend/api/pm/tasks/attachments/:id
     */
    Route::delete('pm/tasks/attachments/{id}', 'TaskAttachmentController@destroy');

    /**
     * @api {get} /pm/tasks/comments Get tasks comments
     * @apiName Get list of tasks comments
     * @apiDescription This endpoint get list of tasks comments
     * @apiGroup PmTaskComments
     * @apiSampleRequest /backend/api/pm/tasks/comments
     */

    /**
     * @api {post} /pm/tasks/comments Add new task comment
     * @apiName  Add new task comment
     * @apiDescription This endpoint adds new task comment
     * @apiHeader Authorization Authorization token
     * @apiParam text comment text
     * @apiParam parent parent comment parent:{id: parent_comment_id}
     * @apiParam task task task:{id:task_id}
     * @apiParam user user user:{id:user_id}
     * @apiGroup PmTaskComments
     * @apiSampleRequest /backend/api/pm/tasks/comments
     */

    /**
     * @api {put} /pm/tasks/comments/:id Update task comment
     * @apiName  Update task comment
     * @apiDescription This endpoint update pm task comment
     * @apiHeader Authorization Authorization token
     * @apiParam id task comment ID
     * @apiParam text comment text
     * @apiParam parent parent comment parent:{id: parent_comment_id}
     * @apiParam task task task:{id:task_id}
     * @apiParam user user user:{id:user_id}
     * @apiGroup PmTaskComments
     * @apiSampleRequest /backend/api/pm/tasks/comments/:id
     */

    /**
     * @api {delete} /pm/tasks/comments/:id Delete task comment
     * @apiName  Delete task comment
     * @apiDescription This endpoint delete task comment by id
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of task comment
     * @apiGroup PmTaskComments
     * @apiSampleRequest /backend/api/pm/tasks/comments/:id
     */
    Route::resource('pm/tasks/comments', 'TaskCommentController', ['only' => ['store', 'update', 'index', 'destroy']]);

    /**
     * @api {get} /pm/tasks/activities Get tasks activities
     * @apiName Get list of tasks activities
     * @apiDescription This endpoint get list of tasks activities
     * @apiGroup PmTaskActivity
     * @apiSampleRequest /backend/api/pm/tasks/activities
     */

    /**
     * @api {post} /pm/tasks/activities Add new task activity
     * @apiName  Add new task activity
     * @apiDescription This endpoint adds new task activity
     * @apiHeader Authorization Authorization token
     * @apiParam task task task:{id:task_id}
     * @apiParam checklist  checklist checklist:{id: checklist_id}
     * @apiParam user user user:{id:user_id}
     * @apiParam action action action:{id:action_id}
     * @apiGroup PmTaskActivity
     * @apiSampleRequest /backend/api/pm/tasks/activities
     */
    Route::resource('pm/tasks/activities', 'TaskActivityController', ['only' => ['store', 'index']]);

    /**
     * @api {get} /pm/tasks/actions Get tasks actions
     * @apiName Get list of tasks actions
     * @apiDescription This endpoint get list of tasks actions
     * @apiGroup PmTaskActions
     * @apiSampleRequest /backend/api/pm/tasks/actions
     */

    /**
     * @api {post} /pm/tasks/actions Add new task action
     * @apiName  Add new task action
     * @apiDescription This endpoint adds new task action
     * @apiHeader Authorization Authorization token
     * @apiParam code action code
     * @apiParam i18n i18n:[{title:title_text, message:message_text}]
     * @apiGroup PmTaskActions
     * @apiSampleRequest /backend/api/pm/tasks/actions
     */

    /**
     * @api {put} /pm/tasks/actions/:id Update task action
     * @apiName  Update task action
     * @apiDescription This endpoint update pm task action
     * @apiHeader Authorization Authorization token
     * @apiParam id task action ID
     * @apiParam code action code
     * @apiParam i18n i18n:[{title:title_text, message:message_text}]
     * @apiGroup PmTaskActions
     * @apiSampleRequest /backend/api/pm/tasks/actions/:id
     */

    /**
     * @api {delete} /pm/tasks/actions/:id Delete task action
     * @apiName  Delete task action
     * @apiDescription This endpoint delete task action by id
     * @apiHeader Authorization Authorization token
     * @apiParam id ID of task action
     * @apiGroup PmTaskActions
     * @apiSampleRequest /backend/api/pm/tasks/actions/:id
     */
    Route::resource('pm/tasks/actions', 'PmActionController', ['only' => ['store', 'update', 'index', 'destroy']]);

});
