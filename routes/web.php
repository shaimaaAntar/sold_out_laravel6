<?php

//home routes

Route::get('/','HomeController@home' );

Route::get('/cart', function () {
    return view('front.cart');
});
Route::get('/cat/{id}', 'HomeController@cat');

Route::get('/admins', function () {
    return view('admin.index');
})->middleware('auth')->name('admins'); // naming route to use in different position in (front)

Route::resource('users','UserController')->middleware('auth');
Route::resource('products','ProductController')->middleware('auth');
Route::resource('categories','CategoryController')->middleware('auth');
//Route::put('/users/{user}','UserController@update');    ???
Route::get('/users/{user}','UserController@destroy')->middleware('auth')->name('users.destroy');
//Route::delete('/users/{user}','UserController@destroy')->name('users.destroy');
Route::get('/products/{pro_id}')->name('product_view');
    //


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//Route::get('/home/{locale}', function ($locale) {
//    App::setLocale($locale);
//});