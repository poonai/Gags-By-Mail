@extends('header')

@section('middle')

<div style="margin-top:2%;" class="ui two column centered grid">

  <div style="margin-left:8%;" class="three column centered row">
   @foreach($item as $single)
    <div style="margin-top:2%;" class="column">
			<div class="ui card">
			  <div class="image">
			    <img src="{{$single->url}}">
			  </div>
			  <div class="content">
			    <a class="header">{{$single->name}}</a>
			    <div class="meta">
			      <span class="date">{{$single->shortline}}</span>
			    </div>
			    <div class="description">
			      {{$single->bigline}}
			    </div>
			  </div>
			  <div class="extra content">
			    <a>
			      RS.{{$single->price}}

			    </a>
          <button class="ui violet button" onclick="addtocart({{$single->id}})"><i class="fa fa-shopping-cart"></i>Add to Cart</button>
			  </div>
			</div>
		</div>
    @endforeach


  </div>
</div>

@endsection
