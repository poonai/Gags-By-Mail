@extends('header')
@section('middle')


	<!-- start content -->
			<div class="row single">
				<div class="col-md-9 det">
					<center>
				  <div style="margin-left:25%;" class="single_left">
					<div class="grid images_3_of_2">
						<ul id="etalage">

								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="http://localhost:8000/{{$item->url}}" class="img-responsive" />

								</a>



						 <div class="clearfix"></div>
				  </div>
          <table style="width:25em;" class="ui celled table">
    <thead>
      <tr>
        <th><h1>{{$item->name}}</h1></th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p style="font-size:120%;">{{$item->shortline}}</p><h1 style="font-size:350%;;color:#E9565C">&#8377; {{$item->price}}</h1><p style="font-size:120%;">
( Inclusive of all taxes, delivery and our love )<br><br>
 Delivery time - at least 3 days from today. For quicker delivery/more details, call +91 9566554853 </p><br>
      <button style="width:100%; background-color:#E9565C;font-size:150%;color:#000000"  class="ui  button" onclick=>ORDER</button></td>

      </tr>

    </tbody>
  </table>
          	    <div class="clearfix"></div>
          	   </div>
						 </center>
          	    <div class="single-bottom1">
					<h6>Details</h6>
					<p class="prod-desc" style="margin-left:2%;;font-size:150%;" >{{$item->bigline}}</p>
				</div>


		   <div class="clearfix"></div>
	  </div>
  </div>
<br>
<br>
<br>

@endsection
