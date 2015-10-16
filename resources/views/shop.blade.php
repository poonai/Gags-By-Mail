@extends('header')
@section('script')

@endsection
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
			    
			  </div>
			  <div class="extra content">
			    <a>
			      RS.{{$single->price}}

			    </a>
          @if(in_array($single->id,Session::get('id',array())))
          <button id={{$single->id}} class="ui disabled violet button" onclick="addtocart({{$single->id}})"></i>Added</button>
          @else
            <button id={{$single->id}} class="ui  violet button" onclick="addtocart({{$single->id}})"><i class="fa fa-shopping-cart"></i>Added</button>
            @endif
			  </div>
			</div>
		</div>
    @endforeach


  </div>
</div>

@endsection
