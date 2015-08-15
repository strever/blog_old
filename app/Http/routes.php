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

Route::group(['namespace' => 'Admin', 'domain' => 'admin.blog.dev'], function() {
    Route::get('/articles/create', 'ArticleController@create');
    Route::post('/articles', ['as' => 'articles.create', 'uses' => 'ArticleController@store']);
    Route::get('/articles/{id}/edit', 'ArticleController@edit');
});


//测试路由

Route::get('test/{param?}', function($hello = 'hello') {
    if($hello == 'hello') {
        return $hello;
    }
    else {
        return 'hello, ' . $hello;
    }
});

Route::get('test/regexp/{paramInt}', function($int) {
    return $int;
})->where('paramInt', '[0-9]+');

//使用?时_$pn都要去掉，不知为何
Route::get('test/regexp/artist_{id}_{pn?}', function($id, $pn = 1) {
    return 'artistId:' . $id . ' and pn:' . $pn;
})->where(['id' => '[0-9]+', 'pn' => '[0-9]+']);


