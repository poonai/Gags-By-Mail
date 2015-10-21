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
Route::get('/','test@index');
Route::get('/register','test@register');
Route::post('/register','test@registerdb');
Route::get('/test','test@anja');
Route::get('/logout','test@logout');
Route::post('/login','test@login');
Route::get('/shop','test@product');
Route::get('/add/{id}','test@add');
Route::get('/checkout/','test@checkout');
Route::post('/checkout/','test@proceed');
Route::get('/remove/{id}','test@remove');

//Route::get('/instamojo/','test@anvena');
Route::post('/myplaceorder/','test@myplaceorder');
Route::get('sucess/{token}','test@sucess');
Route::post('/victimplaceorder/','test@victimplaceorder');
Route::get('/finaltry/','test@finaltry');
