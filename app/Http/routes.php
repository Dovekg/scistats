<?php
Route::group(['middleware' => 'web'], function () {
    Route::get('/', function(){
        return view('welcome');
    });
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/download/{path}', ['as' => 'download', 'uses' => 'HomeController@download']);
    
    Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
        Route::get('/tasks', [
            'as' => 'admin.tasks.all',
            'uses' => 'Admin\AdminController@getTasks'
        ]);
        Route::post('/tasks/{id}/confirm', [
            'as' => 'admin.task.confirm',
            'uses' => 'Admin\AdminController@confirmTask'
        ]);
        Route::post('/tasks/{id}/destroy', [
            'as' => 'admin.task.destroy',
            'uses' => 'Admin\AdminController@confirmTask'
        ]);
        Route::resource('methods', 'Admin\MethodsController');
        Route::resource('pay', 'Admin\PayController');
    });
    Route::group(['prefix' => 'ana', 'middleware' => 'role:analyzer'], function () {
        Route::post('/{id}/commit', [
            'as' => 'ana.task.commit',
            'use' => 'Ana\TasksController@commit'
        ]);
        Route::post('/{id}/finish', [
            'as' => 'ana.task.finish',
            'use' => 'Ana\TasksController@finish'
        ]);
    });
    Route::group(['prefix' => 'dema', 'middleware' => 'role:demander'], function () {
        Route::get('/agreement', [
            'as' => 'dema.get.agreement',
            'uses' => 'Dema\TasksController@getAgreement'
        ]);
        Route::post('/agreement', [
            'as' => 'dema.post.agreement',
            'uses' => 'Dema\TasksController@postAgreement'
        ]);
        Route::post('tasks/pay/{id}', [
            'as' => 'dema.tasks.pay',
            'uses' => 'Dema\TasksController@postPay'
        ]);
        Route::resource('tasks', 'Dema\TasksController');
    });
});
