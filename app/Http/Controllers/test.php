<?php

namespace App\Http\Controllers;
use App\instamojo\instamojo;
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
      return view('index',['loginfo'=>0,'placelogin'=>0]);
    }
    function register()
    {
      return view('register',['lable'=>0,'loginfo'=>0,'placelogin'=>0]);
    }
    function product()
    {
      $item=new item;
      return view('shop',['lable'=>0,'loginfo'=>0,'item'=>$item->all(),'placelogin'=>0]);
    }
    function checkout()
    {
      $id=Session::get('id',array());

      $item=array();
      foreach ($id as $value) {
        $value=item::find($value);
       array_push($item, $value);
          }
        return view('checkout',['lable'=>0,'loginfo'=>0,'id'=>Session::get('id',array()),'item'=>$item,'placelogin'=>0]);
    }
    function proceed(Request $request)
    {
      $id=Session::get('id',array());

      $item=array();
      foreach ($id as $value) {
        $value=item::find($value);
       array_push($item, $value);
          }
      if(Session::get('loginfo',1))
      {
            return view('checkout',['lable'=>0,'loginfo'=>0,'id'=>Session::get('id',array()),'item'=>$item,'placelogin'=>1]);
      }
      else {
          return view('placeorderform',['loginfo'=>0,'placelogin'=>0]);;
      }
    }
  function remove($id)
  {
    $item=Session::get('id',array());
    foreach (array_keys($item, $id) as $key) {
    unset($item[$key]);
}
Session::put('id',$item);
$item=item::find($id);
$price=Session::get('price',0);
$price=$price-$item->price;
Session::put('price',$price);
$response=array();
$response['no']=count(Session::get('id',array()));
$response['price']=Session::get('price',0);
echo json_encode($response);
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
         Session::put('uid',$user->id);
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
    function anvena()
    {

$api = new Instamojo('494fa9c31404f789b9ba86de7fb94480', 'eefb9b6c0114e18126349b73ecab8310');
      try {
    $response = $api->linkCreate(array(
        'title'=>'Hello API',
        'description'=>'Create a new Link easily',
        'base_price'=>100,
        'currency'=>'INR',
        'cover_image'=>'/path/to/photo.jpg'
        ));
    print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
    }
}
