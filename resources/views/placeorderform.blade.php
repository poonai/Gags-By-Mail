@extends('header')
<!-- content -->
@section('middle')
<script>
function victim()
{
$("#2").attr('class', 'ui button disabled registration_left');
$("#1").attr('class', 'ui button registration_left');
}
function myplace()
{
$("#1").attr('class', 'ui button disabled registration_left');
$("#2").attr('class', 'ui button registration_left');
}
$('form').on('focus', 'input[type=number]', function (e) {
  $(this).on('mousewheel.disableScroll', function (e) {
    e.preventDefault()
  })
})
$('form').on('blur', 'input[type=number]', function (e) {
  $(this).off('mousewheel.disableScroll')
})
</script>

<div class="container">
  <center> <div class="ui buttons">
    <button class="ui button" onclick="victim()">My PLace</button>
    <div class="or"></div>
    <button class="ui positive button" onclick="myplace()">Victum Place</button>
    <div class="main">
</div></center>

	<!-- start registration -->

	<div class=" registration">

		<div id="1" class="ui button disabled registration_left">
		<h2>new user? <span> My details </span></h2>
		<!-- [if IE]
		    < link rel='stylesheet' type='text/css' href='ie.css'/>
		 [endif] -->

		<!-- [if lt IE 7]>
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>
		<! [endif] -->
		<script>
			(function() {
			// Create input element for testing
			var inputs = document.createElement('input');
			// Create the supports object
			var supports = {};
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
			}
			// Fallback for required attribute
			if(!supports.required) {
			}
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
			}
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		})();
		</script>

		 <div class="registration_form">
		 <!-- Form -->

			<form id="registration_form" action="/myplaceorder" method="post">



				<div>
					<label>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="productid" value="{{$productid}}">
						<input name="name" placeholder="Name:" type="text" tabindex="1" value="{{$user->find(Session::get('uid'))->name}}" required autofocus>
					</label>
				</div>

				<div>
					<label>
						<input name="mail" placeholder="Email:" style="text-transform: lower type="email"  value="{{$user->find(Session::get('uid'))->email}}" tabindex="3" required>

					</label>
				</div>

				<div>
					<label>
						<input name="address" placeholder="Address" type="text" tabindex="4" required>
					</label>
				</div>

				<div>
					<label>
						<input name="Contact Number" placeholder="Contact Number" type="number" tabindex="4" required>
					</label>
				</div>

				<div>
					<label>
						<input name="postalcode" placeholder="Zip/Postal code" type="number" tabindex="4" required>
					</label>
				</div>

				<div>
					<label>
						<input name="city" placeholder="City" type="text" tabindex="4" required>
					</label>
				</div>

				<div>
					<label>
						<input name="state" placeholder="State" type="text" tabindex="4" required>
					</label>
				</div>

				<div>
					<label>
						<input name="Personalized" placeholder="Please type your personalized message here" type="text" tabindex="4" required>
					</label>
				</div>
				<div>

				</div>
				<div>
					<input type="submit" value="create an account" id="register-submit">
				</div>
				<div class="sky-form">
					<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to shoppe.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
				</div>
			</form>
			<!-- /Form -->
		</div>
	</div>
	<div id="2" class="ui button registration_left">
		<h2>Victim Details</h2>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="/victimplaceorder" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="_token" value="{{$productid}}">
				<div>
					<label>
						<input placeholder="Name:" type="name" tabindex="3" required>
					</label>
				</div>

				<div>
					<label>
						<input placeholder="Contact Number" type="number" tabindex="3" required>
					</label>
				</div>

				<div>
					<label>
						<input placeholder="Address:" type="text" tabindex="4" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Zip/Postal code" type="number" tabindex="4" required>
					</label>
				</div>
				<div>
					<label>
						<input name="city" placeholder="City" type="text" tabindex="4" required>
					</label>
				</div>

				<div>
					<label>
						<input name="state" placeholder="State" type="text" tabindex="4" required>
					</label>
				</div>

				<div>
					<label>
						<input name="Personalized" placeholder="Please type your personalized message here" type="text" tabindex="4" required>
					</label>
				</div>

				<div>
					<input type="submit" value="sign in" id="register-submit">
				</div>
				<div class="forget">
					<a href="#">forgot your password</a>
				</div>
			</form>
			<!-- /Form -->
			</div>
	</div>
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>

	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>
@endsection
