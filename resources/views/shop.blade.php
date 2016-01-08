@extends('header')

@section('middle')

    <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Our PRODUCTS</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li>Category full</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">


                <div class="row products">
                    @foreach($item as $single)
                    <div class="col-md-3 col-sm-4">
                        <div class="product" style="border-style:solid;">
                            <div class="image">
                                <a href="/detail_pro/{{$single->id}}">
                                    <img src="{{ asset($single->url)}}" alt="" class="img-responsive image1">
                                </a>
                            </div>
                            <!-- /.image -->
                            <div class="text">
                                <h3><a href="/detail_pro/{{$single->id}}">{{$single->name}}</a></h3>
                                <h6>(Click on the image to see detailed description)</h6>
                                <p class="price">&#8377;{{$single->price}}</p>
                                <p class="buttons">
                                    <a href="" class="btn btn-default">View detail</a>
                                    <a href="" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
                @endforeach
</div>
</div>

                    <!-- /.col-md-4 -->

@endsection
