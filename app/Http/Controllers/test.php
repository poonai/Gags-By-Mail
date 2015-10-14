<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user;
use App\item;
//use App\Response;
use Crypt;
use Session;
use Mail;
//use DB;
//App::forgetMiddleware('Illuminate\Http\VerifyCsrfToken');
//use App\learning;

class test extends Controller
{
    //
function index()
{
  return view('index');
}
function register()
{
  return view('register',['lable'=>0]);
}
function registerdb(Request $request)
{
  dd($request);
}
}
