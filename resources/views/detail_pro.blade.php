@extends('header')
@section('middle')
<div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1></h1>
                    </div>
                    <div class="col-md-5">


                    </div>
                </div>
            </div>
        </div>
                    <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
		    _________________________________________________________ -->

                    <div class="col-md-9">



                        <div class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img src="{{asset($item->url)}}.jpg"  class="img-responsive">
                                </div>

                                                              <!-- /.ribbon -->

                            </div>
                            <div class="col-sm-6">

                                <table class="table table-bordered">
                                	<tr>
                                		<td>
                                			<h1>{{$item->name}}</h1>
                                		</td>
                                	</tr>
                                	<tr>
                                		<td>
                                			<p class="lead">{{$item->shortline}}</p>
                                		</td>
                                	</tr>
                                	<tr>
                                		<td><center><h3>&#8377 {{$item->price}}</h3></center></td>
                                	</tr>
                                </table>


                                       @if(in_array($item->id,Session::get('id',array())))
                                        <p class="text-center">
                                            <a id="chan" onclick="add({{$item->id}})" class="btn btn-template-main btn-lg disabled" >Added to cart</a>

                                        </p>
                                        @else
                                          <p class="text-center">
                                            <a id="chan" onclick="add({{$item->id}})" class="btn btn-template-main btn-lg " ><i class="fa fa-shopping-cart"></i>Add to Cart</a>

                                        </p>
                                        @endif





                                                <div style="margin-top:10%;" class="row" id="thumbs">
                                                    <div class="col-xs-4">
                                                        <a href="{{asset($item->url)}}" class="thumb">
                                                            <img src="{{asset($item->url)}}.jpg" alt="" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a href="{{asset($item->url)}}" class="thumb">
                                                            <img src="{{asset($item->url)}}1.jpg" alt="" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <a href="{{asset($item->url)}}" class="thumb">
                                                            <img src="{{asset($item->url)}}2.jpg" alt="" class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                            </div>

                        </div>


                        <div class="box" id="details">
                            <p>
                                <h4>Product details</h4>
                                <p>{{$item->bigline}}</p>
                                <h4>Material</h4>
                                <ul>
                                    <li>{{$item->spec1}}</li>
                                    <li>{{$item->spec2}}</li>
                                </ul>

                                </ul>


                        </div>

                        <div class="box social" id="product-social">
                            <h4>Show it to your friends</h4>
                            <p>
                                <a href="https://www.facebook.com/gagsbymail/?fref=ts" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="https://twitter.com/GagsByMail" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>

                            </p>
                        </div>




                    </div>
                    <!-- /.col-md-9 -->


                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
		  _________________________________________________________ -->

                    <div class="col-sm-3">

                        <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">


                        <div class="panel panel-default sidebar-menu">


                        </div>

                        <div class="panel panel-default sidebar-menu">


                        </div>

                        <!-- *** MENUS AND FILTERS END *** -->


                        <!-- /.banner -->
                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
@endsection
