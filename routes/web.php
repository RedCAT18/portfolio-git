<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'ScreenController@index')->name('index');
Route::get('work', 'ScreenController@work')->name('work');
Route::get('blog', 'ScreenController@blog')->name('blog');
Route::get('contact', 'ScreenController@contact')->name('contact');

//콘트롤러가 없는 상태로 라우터에서 실행시.
Route::get('docs/{file?}', 'DocsController@show');
//    $text = (new App\Documentation)->get($file); //doc모델에서 해당 파일에 대해 get 함수 실행.
//    return app(ParsedownExtra::class)->text($text); //받아온 결과값을 파스다운을 통해 파싱한 뒤 텍스트로 반환
//});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
    Route::group(['prefix' => 'admin'], function(){
            Route::get('/', 'HomeController@index')->name('admin');

            Route::get('/profile', 'ProfileController@index')->name('profile');
            Route::post('/profile', 'ProfileController@store')->name('profile.update');

            Route::get('/career','CareerController@index')->name('career');
            Route::post('/career', 'CareerController@store')->name('career.create');
            Route::get('/career/{id}/update', 'CareerController@edit')->name('career.edit');
            Route::post('/career/{id}/delete', 'CareerController@destroy')->name('career.delete');

            Route::get('/post', 'PostController@index')->name('post');
            Route::get('/create', 'PostController@create')->name('create');
            Route::post('/create','PostController@store')->name('post.write');
            Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
            Route::post('/post/{id}/edit', 'PostController@update')->name('post.update');

            Route::get('/category', 'CategoryController@index')->name('category');
            Route::post('/category', 'CategoryController@store')->name('category.create');
            Route::post('/category/{id}/delete', 'CategoryController@destroy')->name('category.delete');

            Route::post('/image', 'ImageController@store');
    });
});


//Route::get('/home', 'HomeController@index');
