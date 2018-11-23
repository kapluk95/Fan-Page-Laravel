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




Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/albums','AlbumsController@showAlbums');
Route::get('/albums/{idAlbums}','AlbumsController@showSongs');
Route::get('/favorites', 'FavoriteController@index');
Route::post('/repostear',[
    'uses'=> 'RepostsController@create',
    'as'=> 'repostear'
]);
 
Route::post('/savePost',[
    'uses'=> 'ModalController@savePost',
    'as'=> 'savePost'
]);



