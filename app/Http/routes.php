<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/shop','test@shoppage');
Route::get('/','test@index');
Route::get('/test','test@demo');
Route::get('/reset',function()
{
  return view("reset");
});

//Route::get
Route::get('/login',function ()
{
  return view('login');
});
Route::post('/register','test@register');
Route::get('/demo','test@anja');
Route::post('/login','test@login');
Route::post('/reset','test@reset');
Route::get('resetpass/{token}','test@resetpass');
Route::post('resetpass','test@passreset');
Route::get('/logout','test@logout');
Route::get('/addcart/{id}','test@addcart');
Route::get('/cart','test@cart');
