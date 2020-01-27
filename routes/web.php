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
    return view('home');
});

<<<<<<< HEAD

Route::get('/courses','ContentController@index')->name('courses.index');
Route::get('/categories','CategoryController@index')->name('categories.index');
Route::get('/courses/{course}','ContentController@view')->name('courses.view');


=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 4f8930388a936db84f296eb8da5d611e994cea5d
