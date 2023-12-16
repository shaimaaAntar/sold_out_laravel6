<?php
Route::get('/','HomeController@home' );

Route::get('/cart', function () {
    return view('front.cart');
});
//Route::get('/cat/', function () {
//    return view('front.category');
//});
Route::get('/cat/{id}', 'HomeController@cat');
//
//Route::get('/cat/{id}', function ($id) {
//    return view('front.category',compact('id'));
//});
//index route
//Route::get('/', function () {
//    return view('front.index');
//});

//admin routes
Route::get('/admins', function () {
    return view('admin.index');
})->middleware('auth')->name('admins');

Route::resource('users','UserController')->middleware('auth');
//Route::put('/users/{user}','UserController@update');    ???
Route::get('/users/{user}','UserController@destroy')->name('users.destroy');
//Route::delete('/users/{user}','UserController@destroy')->name('users.destroy');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


