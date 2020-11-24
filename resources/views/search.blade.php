@extends('master')

@section('content')

@foreach($product as $item)
<div class="container">
    <img src="{{$item ['gallery']}}" alt="" width="200px" height="200px">
    <h2> Name : {{$item['name']}}</h2>
    <h4>Price : {{$item['price']}}</h4>
    <h4>Category : {{$item['category']}}</h4>
    <h4>Description : {{$item['description']}}</h4>
</div>
@endforeach

<a href="/">go back</a><br><br>

@endsection