<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::group(['prefix' => 'tasks'], function() {
        Route::get('/agreement', [
            'as' => 'getAgreement',
            'uses' => 'TasksController@getAgreement'
        ]);
        Route::post('/agreement', [
            'as' => 'postAgreement',
            'uses' => 'TasksController@postAgreement'
        ]);
        Route::get('/', [
            'as' => 'allTasks',
            'uses' => 'TasksController@getAll'
        ]);
        Route::post('/', [
            'as' => 'newTask',
            'uses' => 'TasksController@postNew'
        ]);
        Route::get('/:id', [
            'as' => 'getTask',
            'uses' => 'TasksController@getOne'
        ]);
        Route::get('/:id/edit', [
            'as' => 'editTask',
            'uses' => 'TasksController@editOne'
        ]);
        Route::post('/:id/edit', [
            'as' => 'updateTask',
            'uses' => 'TasksController@updateOne'
        ]);
        Route::get('/:id/confirm', [
            'as' => 'confirmTask',
            'uses' => 'TasksController@confirm'
        ]);
        Route::post('/:id/remove', [
            'as' => 'removeTask',
            'uses' => 'TasksController@removeOne'
        ]);
        Route::get('/:id/pay', [
            'as' => 'taskPay',
            'use' => 'TasksController@getPay'
        ]);
        Route::post('/:id/pay', [
            'as' => 'taskPaid',
            'use' => 'TasksController@postPay'
        ]);
        Route::post('/:id/commit', [
            'as' => 'taskCommit',
            'use' => 'TasksController@commit'
        ]);
        Route::post('/:id/finish', [
            'as' => 'taskFinish',
            'use' => 'TasksController@finish'
        ]);
    });

    Route::group(['prefix' => 'pay'], function(){
        Route::get('/', [
            'as' => 'allPay',
            'uses' => 'PayController@getAll'
        ]);
        Route::post('/', [
            'as' => 'newPay',
            'uses' => 'PayController@postNew'
        ]);
        Route::get('/:id/edit', [
            'as' => 'editPay',
            'uses' => 'PayController@editOne'
        ]);
        Route::post('/:id/edit', [
            'as' => 'updatePay',
            'uses' => 'PayController@updateOne'
        ]);
    });
    Route::group(['prefix' => 'method'], function(){
        Route::get('/', [
            'as' => 'allMethods',
            'uses' => 'MethodsController@getAll'
        ]);
        Route::post('/', [
            'as' => 'newMethod',
            'uses' => 'MethodsController@postNew'
        ]);
        Route::get('/:id/edit', [
            'as' => 'editMethod',
            'uses' => 'MethodsController@editOne'
        ]);
        Route::post('/:id/edit', [
            'as' => 'updateMethod',
            'uses' => 'MethodsController@updateOne'
        ]);
    });


});
