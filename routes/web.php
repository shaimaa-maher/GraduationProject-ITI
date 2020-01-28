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
Route::get('/',function(){
    return view('index');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
//category-content
Route::get('/contents/{cat_id}','ContentController@index')->name('contents.index');
Route::get('/categories/{career_id}','CategoryController@index')->name('categories.index');
Route::get('/contents/{content}/view','ContentController@view')->name('contents.view');

//search

//Route::get('autocomplete', 'HomeController@search');
//Route::get('search','HomeController@result');


Route::get('/about',function(){
    return view('about');
});


Route::get('/mindmaps',function(){
    return view('mindmaps');
});