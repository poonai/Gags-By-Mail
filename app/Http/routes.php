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
