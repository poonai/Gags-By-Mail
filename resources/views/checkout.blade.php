@extends('header');
@section('middle')
<div class="container">
	<div class="check">
			 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span id="total1" class="total1">RS.{{Session::get('price',0)}}</span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">FREE</span>
				 <div class="clearfix"></div>
			 </div>
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>
			   <li class="last_price"><span id="total2">Rs.{{Session::get('price',0)}}</span></li>
			   <div class="clearfix"> </div>
			 </ul>


			 <div class="clearfix"></div>
			 <a class="order" href="#" onclick="submit()">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
			{{$id=1}}
		 <div class="col-md-9 cart-items">
			 <h1>My Shopping Bag (2)</h1>
       <form action="/checkout" method="post">
           <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
         @foreach($item as $single)
				<script>$(document).ready(function(c) {
					$('#{{$single->id}}re').on('click', function(c){
						$('.cart-header {{$id}}').fadeOut('slow', function(c){
							$('.cart-header {{$id}}').remove();
							$.ajax({url: "/remove/"+{{$single->id}}, success: function(result){
						    document.getElementById("total1").innerHTML=JSON.parse(result).price;
								document.getElementById("total2").innerHTML=JSON.parse(result).price;
                document.getElementById("price").innerHTML=JSON.parse(result).price;
								document.getElementById("simpleCart_quantity").innerHTML=JSON.parse(result).no;


						  }});

						});
						});
					});

			   </script>

			 <div class="cart-header {{$id}}">
				 <div id="{{$single->id}}re" class="close{{$id++}}"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
               <input name="id[]" value="{{$single->id}}" class="hidden">
							 <img src="{{$single->url}}" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">{{$single->name}}</a><span>Model No: 3578</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li class="hidden"><p>quantity<input class="ui input" name="quanttity[]" type="number" min="1" max="20" value="1"></p></li>
						</ul>

							 <div class="delivery">
							 <p>Service Charges : {{$single->price}}</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>
					   </div>
					   <div class="clearfix"></div>

				  </div>
			 </div>
       @endforeach
       <input class="hidden" id="place" type="submit">
</form>
		 </div>


			<div class="clearfix"> </div>
	 </div>
	 </div>
   <div class="ui input">

</div>
<script>
function submit()
{
	document.getElementById('place').click();
}
</script>
@endsection
