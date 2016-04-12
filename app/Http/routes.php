<?php


Route::group(['middleware' => 'web'], function () {
    Route::get('/', function(){
        return view('welcome');
    });
    Route::auth();
    Route::get('/home', 'HomeController@index');
    
    Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
        Route::get('/tasks', [
            'as' => 'admin.tasks.index',
            'uses' => 'Admin\TasksController@index'
        ]);
        Route::post('/tasks/:id/confirm', [
            'as' => 'admin.task.confirm',
            'uses' => 'Admin\TasksController@confirm'
        ]);
        Route::resource('methods', 'Admin\MethodsController');
    });
    Route::group(['prefix' => 'ana', 'middleware' => 'role:analyzer'], function () {
        Route::post('/:id/commit', [
            'as' => 'ana.task.commit',
            'use' => 'Ana\TasksController@commit'
        ]);
        Route::post('/:id/finish', [
            'as' => 'ana.task.finish',
            'use' => 'Ana\TasksController@finish'
        ]);
    });
    Route::group(['prefix' => 'admin', 'middleware' => 'role:demander'], function () {
        Route::get('/agreement', [
            'as' => 'dema.get.agreement',
            'uses' => 'Dema\TasksController@getAgreement'
        ]);
        Route::post('/agreement', [
            'as' => 'dema.post.agreement',
            'uses' => 'Dema\TasksController@postAgreement'
        ]);
        Route::get('/:id/pay', [
            'as' => 'dema.get.pay',
            'use' => 'Dema\TasksController@getPay'
        ]);
        Route::post('/:id/pay', [
            'as' => 'dema.post.pay',
            'use' => 'Dema\TasksController@postPay'
        ]);
        Route::resource('tasks', 'Dema\TasksController');
    });
});
