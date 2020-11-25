@extends('master')
@section('content')


@foreach($orders as $item)
<style>
    .container {
        float: left;
    }
</style>


<div class="container">
    <img src="{{$item->gallery}}" alt="" width="200px" height="200px">


    <h2> Name : {{$item->name }}</h2>
    <h4>Price : {{$item->price }}</h4>
    <h4>Payment method : {{$item->payment_method }}</h4>
    <h4>Payment Status : {{$item->payment_status }}</h4>
    <h4>Payment Address : {{$item->Address }}</h4>
    <hr>

</div>

@endforeach
@endsection