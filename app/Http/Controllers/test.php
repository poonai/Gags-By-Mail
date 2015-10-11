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
//App::forgetMiddleware('Illuminate\Http\FrameGuard');
//use App\learning;

class test extends Controller
{
    //
    function cart()
    {
        $cart_no_item=Session::get('cart_no_item',array('no'=>0,'price'=>0));
      return view('cart',['data'=>item::get(),'no_item'=>$cart_no_item['no'],'price'=>$cart_no_item['price'],'id'=>Session::get('cart_id',array())]);
    }
    function addcart($id)
    {
      $temp=Session::get('cart_id',array());
      array_push($temp,$id);
      Session::put('cart_id',$temp);
      $item=item::where('id',$id)->get();
      $cart_no_item=Session::get('cart_no_item',array('no'=>0,'price'=>0));
      $cart_no_item['no']=$cart_no_item['no']+1;
      $cart_no_item['price']=$cart_no_item['price']+$item[0]->price;
      Session::put('cart_no_item',$cart_no_item);
      return json_encode($cart_no_item);
    }
    function anja()
    {
      Session::flush();
      return "flushed";
    }
    function logout()
    {
      Session::flush();
      return Redirect('/');
    }
    function shoppage()
    {
      $cart_no_item=Session::get('cart_no_item',array('no'=>0,'price'=>0));
      return view('shop',['data'=>item::get(),'no_item'=>$cart_no_item['no'],'price'=>$cart_no_item['price'],'id'=>Session::get('cart_id',array())]);
    }
    function index()
    {

      return view('welcome',['name'=>Session::get('email','nosession')]);
    }
    function reset(Request $request)
    {
        if(user::where('email',$request->email)->count())
        {
      $token=md5(rand());
      user::where('email',$request->get('email'))->update(['token'=>$token]);
      Mail::send("resetmail",["token"=>$token],function($detail)use($request)
    {
      $detail->to($request->email)->subject("Password rentry");
    });
      return view("resetmail",["token"=>$token]);
    }
    else {
      return "email not in database";
    }
    }
    function resetpass($token)
    {
      return view("resetpass",["token"=>$token]);
    }
    function login(Request $request)
     {
      $user=new user;
      $data=$user->where('email',$request->get('email'))->get();

      if($data[0]->password==md5($request->get('pass')))
       {
           Session::put("email",$request->get('email'));
           return Redirect('/');
        }
      else
        {
        return "invalid credentials";
        }
    }
    function passreset(Request $request)
    {

      if(user::where('token',$request->token)->count())
      {
         user::where('token',$request->token)->update(["password"=>md5($request->password),"token"=>""]);
      }
      else {
        return "Something went wrong";
      }
    }

    function register(Request $request)
    {


       $a=new user;
  if($a->where('email',$request->email)->count())
    {
    return "user name alredy exist";
       }
    else{
      $a->email=$request->get('email');
      $a->password=md5($request->get('pass'));
      $a->save();
      return "registered sucessfully";
    }
    }
}
