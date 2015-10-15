@extends('header');
@section('middle')
<div class="container">
	<div class="check">
			 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">6200.00</span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>
			 </div>
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>
			   <li class="last_price"><span>6350.00</span></li>
			   <div class="clearfix"> </div>
			 </ul>


			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
		 <div class="col-md-9 cart-items">
			 <h1>My Shopping Bag (2)</h1>
       <form action="/checkout" method="post">
         @foreach($item as $single)
				<script>$(document).ready(function(c) {
					$('.close{{$single->id}}').on('click', function(c){
						$('.cart-header{{$single->id}}').fadeOut('slow', function(c){
							$('.cart-header{{$single->id}}').remove();
						});
						});
					});
			   </script>
         <input name="id[]" value="{{$single->id}}" class="hidden">
			 <div class="cart-header{{$single->id}}">
				 <div class="close{{$single->id}}"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="{{$single->url}}" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">{{$single->name}}</a><span>Model No: 3578</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li><p>Qty : 1</p></li>
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
       <input type="submit">
</form>
		 </div>


			<div class="clearfix"> </div>
	 </div>
	 </div>
   <div class="ui input">

</div>
@endsection
