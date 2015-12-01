@extends('header')
<!-- content -->
@section('middle')
    <div class="container">
<center><h1>Where do you want us to ship the product?</h1></center>
                <div class="row">

                    <div class="col-md-9 clearfix" id="checkout">

                        <div class="box">
                            <form method="post" action="/myplaceorder">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<input type="hidden" id="place" type="number" name="place" value="1">
<input type="hidden" id="place"  name="productid"  value="{{$productid}}">
                                <ul class="nav nav-pills nav-justified">
                                    <li id="my" class=""><a href="#" onclick="first()"><i class="fa fa-map-marker"></i><br>My Area</a>
                                    </li>
                                    <li  id="vic" class=""><a href="#" onclick="second()"><i class="fa fa-truck"></i><br>Victim Place</a>
                                    </li>

                                </ul>

                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-6 disabled">
                                            <div class="form-group">

                                                 <label for="firstname">Name</label>
                                                <input type="text" name="name" class="form-control" id="firstname" required>
                                                 <label for="firstname">Address</label>
                                                <input type="text" name="address" class="form-control" id="firstname" required>
                                                <label for="firstname">City</label>
                                              <input type="text" name="city" class="form-control" id="firstname" required>
                                                 <label for="firstname">Pincode</label>
                                                <input  pattern="[0-9]{6}" type="text"   name="postalcode" class="form-control" id="firstname" required title="enter correct pincode">
                                                 <label for="firstname">Phone Number</label>
                                                <input   pattern="[0-9]{10}" type="text"  name="Contact Number" class="form-control" id="firstname" required title="enter correct phone number">
                                                  <label for="firstname">Customized message(optional)</label>
                                                <input type="text" name="Personalized" class="form-control" id="firstname" >


                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                     <label for="firstname">Name</label>
                                                <input type="text" name="name1" class="form-control" id="irstname"  required>
                                                 <label for="firstname">Address</label>
                                                <input type="text" name="address1" class="form-control" id="irstname" required>
                                                  <label for="firstname">City</label>
                                                <input type="text" name="city1" class="form-control" id="irstname" required>
                                                 <label for="firstname">Pincode</label>
                                                <input type="text" pattern="[0-9]{6}"  name="pincode1" class="form-control" id="irstname" required title="enter coorect pin number">
                                                 <label for="firstname">Phone Number</label>
                                                <input type="text" pattern="[0-9]{10}"  name="po1"  class="form-control" id="irstname" required title="enter correct pin number">
                                                  <label for="firstname">Customized message(optional)</label>
                                                <input type="text" name="message1" class="form-control" id="irstname" >
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->


                                    <!-- /.row -->
                                </div>

                                <div class="box-footer">

                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-template-main "  >Proceed To Pay<i class="fa fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box -->


                    </div>
                    <!-- /.col-md-9 -->

                    <div class="col-md-3">

                        <div class="box" id="order-summary">


                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
@endsection
