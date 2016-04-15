<?php
Route::group(['middleware' => 'web'], function () {
    Route::get('/', function(){
        return view('welcome');
    });
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/download/data/{path}', ['as' => 'download.data', 'uses' => 'HomeController@downloadData']);
    Route::get('/download/review/{path}', ['as' => 'download.review', 'uses' => 'HomeController@downloadReview']);
    Route::get('/download/result/{path}', ['as' => 'download.result', 'uses' => 'HomeController@downloadResult']);
    Route::resource('profile', 'Account\ProfileController');
    Route::group(['prefix' => 'setting', 'namespace' => 'Account'], function(){
        Route::get('/', ['as' => 'setting', 'uses' => 'SettingController@getIndex']);
        Route::patch('/{id}/password', ['as' => 'setting.change.password', 'uses' => 'SettingController@changePassword']);
        Route::patch('/{id}/username', ['as' => 'setting.change.username', 'uses' => 'SettingController@changeUsername']);
    });
    Route::group(['prefix' => 'admin', 'middleware' => 'role:admin', 'namespace' => 'Admin'], function () {
        Route::group(['prefix' => 'tasks'], function() {
            Route::get('/', [
                'as' => 'admin.tasks.all',
                'uses' => 'AdminController@getTasks'
            ]);
            Route::patch('/{id}/confirm', [
                'as' => 'admin.tasks.confirm',
                'uses' => 'AdminController@confirmTask'
            ]);
            Route::post('/{id}/destroy', [
                'as' => 'admin.tasks.destroy',
                'uses' => 'AdminController@confirmTask'
            ]);
        });        
        Route::resource('methods', 'MethodsController');
        Route::resource('pay', 'PayController');
    });
    Route::group(['prefix' => 'ana', 'middleware' => 'role:analyzer', 'namespace' => 'Ana'], function () {
        Route::group(['prefix' => 'tasks'], function() {
            Route::get('/claimed', [
                'as' => 'ana.tasks.claimed',
                'uses' => 'AnaController@getClaimed'
            ]);
            Route::get('/finished', [
                'as' => 'ana.tasks.finished',
                'uses' => 'AnaController@getFinished'
            ]);
            Route::get('/', [
                'as' => 'ana.tasks.all',
                'uses' => 'AnaController@getTasks'
            ]);
            Route::get('/{id}', [
                'as' => 'ana.tasks.show',
                'uses' => 'AnaController@showTask'
            ]);
            Route::patch('/{id}/claim', [
                'as' => 'ana.tasks.claim',
                'uses' => 'AnaController@claimTask'
            ]);
            Route::patch('/{id}/finish', [
                'as' => 'ana.tasks.finish',
                'uses' => 'AnaController@finishTask'
            ]);
        });
        Route::resource('bonus', 'BonusController');
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
