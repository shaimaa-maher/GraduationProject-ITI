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
})->name('contactus');
Route::post('/contactus','MessageController@create');




//autocomplete 
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'HomeController@autocomplete'));


                                          ////////////
                                         //  ADMIN //
                                        ////////////

//control career//
Route::get('/control', 'CareerController@index')->name('control');
Route::get('/control/add','CareerController@add')->name('control.Add');
//add
Route::post('/add-career','CareerController@storeCareer')->name("addcareer");
Route::post('/add-career/category','CareerController@storeCategory');
Route::post('/add-career/content','CareerController@storeContent');
//assign
Route::post('/add-career/assign_career_category', 'CareerController@AssignCareerCategory')->name('assign.category');
Route::post('/add-career/assign_category_content', 'CareerController@AssignCategoryContent')->name('assign.content');
//modification
Route::get('/Edit', 'CareerController@edit')->name('edit');
Route::get('/Modify', 'CareerController@ModifyMainTables')->name('ModifyMain');
Route::post('/Modify/career', 'CareerController@ModifyCareer')->name('ModifyCareer');
Route::post('/Modify/category', 'CareerController@ModifyCategory')->name('ModifyCategory');

  

//view messages
Route::get('/viewmessages', 'MessageController@index')->name('view_messages');
Route::get('/viewmessages/{msg}', 'MessageController@show')->name('msgs.show');

//relpy messages
Route::get('/reply/{msg}', 'MessageController@reply')->name('reply');
Route::post('/reply/{msg}', 'MessageController@sendMail')->name('sendMail');

//charts
Route::get('/charts', 'ChartsController@index');