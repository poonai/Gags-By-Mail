<?php

namespace App\Http\Controllers;
use App\instamojo\instamojo;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\user;
use App\item;
use App\order;
use App\product_tokens;
use App\order_address;
use App\product_token;
use Session;

class test extends Controller
{
    //roductvi
  function finaltry()
  {
    return view('final',['loginfo'=>0,'placelogin'=>0]);
  }
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

      $ordered_item=$request['id'];

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

          $productid=md5(Session::get('uid').rand());
          foreach ($ordered_item as $value) {
            $order=new order;
              $order->u_id=Session::get('uid');
              $order->item_id=$value;
              $order->order_id=$productid;
              $order->save();
          }


          return view('placeorderform',['loginfo'=>0,'placelogin'=>0,'user'=>user::all(),'productid'=>$productid]);;
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
function myplaceorder(Request $request)
{
  $order_address=new order_address;
  $order_address->name=$request['name'];
  $order_address->phone=(string)$request['Contact Number'];
  $order_address->pincode=$request['postalcode'];
  $order_address->address=$request['address'];
  $order_address->message=$request['Personalized'];
  $order_address->save();
  $token=$request['productid'];
  $order_token=new product_token;
  $order_token->u_id=Session::get('uid');
  $order_token->order_id=$token;
  $return_key=md5($token.rand());
  $order_token->order_token=$return_key;
  $order_token->save();
  $api = new Instamojo('494fa9c31404f789b9ba86de7fb94480', 'eefb9b6c0114e18126349b73ecab8310');
        try {
      $response = $api->linkCreate(array(
          'title'=>'Gags By Mail',
          'description'=>'Create a new Link easily',
          'base_price'=>Session::get('price',0),
          'currency'=>'INR',
          'redirect_url'=>'http://localhost:8000/sucess/'.$return_key
          ));
    $user=user::find(Session::get('uid'));
    //dd($user);

      return redirect($response['url']."?data_name=".$user->name."&data_email=".$user->email."&data_readonly=data_name&data_readonly=data_email");
  }
  catch (Exception $e) {
      print('Error: ' . $e->getMessage());
  }
}

function sucess($token)
{
  $product_token=product_token::where('order_token',$return_key)->get();
  //dd($product_token);
  foreach($product_token as $orders)
  {
    $orders->order_info=true;
    $orders->save();
      echo "sucess full transaction".$_GET['status'];
  }
  //$loginfo=Session::put('loginfo');


}

function chellam($token)
{
  $order_token=new order_token;
  $order_token->u_id=Session::get('uid');
  $order_token->order_token=$token;
  $order_token->save();
  anvena($token);
}
    function anja()
    {
       Session::flush();

    }
    function anvena($token)
    {

$api = new Instamojo('494fa9c31404f789b9ba86de7fb94480', 'eefb9b6c0114e18126349b73ecab8310');
      try {
    $response = $api->linkCreate(array(
        'title'=>'Hello API',
        'description'=>'Create a new Link easily',
        'base_price'=>Sesson::price,
        'currency'=>'INR',
        'redirect_url'=>'http://localhost:8000/'.$token
        ));
    print_r($response);
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
    }

    //function anvena_da
}
