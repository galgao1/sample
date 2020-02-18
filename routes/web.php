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
// Route::get('/hello', function () {
//     return '<h1 style="font-size:200px; color:blue;">Hello World</h1>';
// });

// Route::get('users/{name}/{id}', function($name,$id){
//     return '<p style="font-size:20px; font-weight:bold; color:red;">This is user '.$name.' with an id '.$id.'</p>';

// });

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');


Auth::routes();

Route::get('/', 'PagesController@index');
