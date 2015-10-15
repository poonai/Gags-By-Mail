<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user;
use App\item;
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
      return view('register',['lable'=>0,'loginfo'=>0]);
    }
    function product()
    {
      $item=new item;
      return view('shop',['lable'=>0,'loginfo'=>0,'item'=>$item->all()]);
    }
    function checkout()
    {
      $id=Session::get('id',array());
      $item=array();
      foreach ($id as $value) {
        $value=item::find($value);
       array_push($item, $value);
      }
        return view('checkout',['lable'=>0,'loginfo'=>0,'id'=>Session::get('id',array()),'item'=>$item]);
    }
    function proceed()
    {

    }
    function add($id)
    {
      $ids=Session::get('id',array());
      $price=Session::get('price',0);
      $price=$price+item::find($id)->price;
      array_push($ids,$id);
      Session::put('id',$ids);
      Session::put('price',$price);
      echo json_encode(array('no'=>count($ids),'price'=>$price));
    }
    function registerdb(Request $request)
    {
      $user=new user;
      if($user->where('email',$request['mail'])->count())
      {
        return view('register',['lable'=>1,'loginfo'=>0]);
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
         Session::put('id',$user->id);
         return redirect('/');
       }
       else {
               return view('index',['loginfo'=>1]);
       }
    }
}
    function anja()
    {
       Session::flush();

    }
}
