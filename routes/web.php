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


//profiles
Route::get('/profile','ProfileController@index')->name('profiles.index');
//Route::get('/profile/{profile}/edit','ProfileController@edit')->name('profiles.edit');
Route::get('/profile/edit','ProfileController@edit')->name('profiles.edit');
Route::patch("/profile/update",'ProfileController@update')->name('profiles.update');


//category-content
Route::get('/contents/{cat_id}','ContentController@index')->name('contents.index');
Route::get('/categories/{career_id}','CategoryController@index')->name('categories.index');
Route::get('/contents/{content}/view','ContentController@view')->name('contents.view');

//search

//Route::get('autocomplete', 'HomeController@search');
//Route::get('search','HomeController@result');


//about
Route::get('/about',function(){
    return view('about');
});


//mindmaps
Route::get('/mindmaps',function(){
    return view('mindmaps');
});

//login with anotheer providers
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


//faq
Route::get('/faq',function(){
    return view('frequent');
});

//contactus
Route::get('/contactus',function(){
    return view('contact');
});




//autocomplete
//Route::get('home',array('as'=>'home','uses'=>'HomeController@search'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'HomeController@autocomplete'));