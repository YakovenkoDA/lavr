<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('blog.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'namespace' => 'Admin', 'middleware'=>['auth']], function (){
    Route::get('/', 'DashboardController@index')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as' => 'admin']);
    Route::resource('/article', 'ArticleController', ['as' => 'admin']);
    Route::resource('/user', 'UserController', ['as' => 'admin']);
});

Route::get('/blog/category/{hash?}', 'BlogController@category')->name('category');
Route::get('/blog/article/{hash?}', 'BlogController@article')->name('article');
