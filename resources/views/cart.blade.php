@extends('master')
@section('content')

<h2>Cart Items</h2>

@foreach($product as $item)
<div class="box" style="display: flex; ">
    <div class="" style="margin-left: 30px;">
        <img src="{{$item ->gallery}}" alt="" width="50px" height="50px">
    </div>

    <div class="" style="margin-left: 30px">
        <h4> Name : {{$item->name}}</h4>
        <h6>Price : {{$item->price}}</h6>
    </div>

    <div class="" style="margin-left: 30px">
        <a href="/removecart/{{$item->cart_id}}"> Remove</a>
    </div>
</div>

@endforeach

@endsection