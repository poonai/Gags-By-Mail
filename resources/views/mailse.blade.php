@foreach($item as $i)
{{$i}}
@endforeach

name:{{$address[0]->name}}
address:{{$address[0]->address}}
pincode:{{$address[0]->pincode}}
phone:{{$address[0]->phone}}
message:{{$address[0]->message}}
type:{{$address[0]->type}}
city:{{$address[0]->city}}
