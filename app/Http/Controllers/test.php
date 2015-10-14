<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user;
use Session;

class test extends Controller
{
    //
    function index()
    {
      return view('index',['loginfo'=>0]);
    }
    function register()
    {
      return view('register',['lable'=>0]);
    }
    function registerdb(Request $request)
    {
      $user=new user;
      if($user->where('email',$request['mail'])->count())
      {
        return view('register',['lable'=>1]);
      }
      else {
        $user->name=$request['name'];
        $user->email=$request['mail'];
        $user->password=md5($request['password']);
        $user->save();
        Session::put('loginfo',0);
        return redirect('/');
      }

    }
    function logout()
    {
      Session::flush();
      return redirect('/');
    }
    function login(Request $request)
    {

      $user=new user;
      $user=$user->where('email',$request['mail'])->first();
      if($user!=null)
      {
       if($user->password==md5($request['password']))
       {
         Session::put('loginfo',0);
         return redirect('/');
       }
       else {
               return view('index',['loginfo'=>1]);
       }
    }
}
    function anja()
    {
       $a=new user;
      $a->name="bala";
      $a->save();
      return 1;
    }
}
