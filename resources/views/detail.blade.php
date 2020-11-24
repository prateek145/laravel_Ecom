@extends('master')

@section('content')
<div class="container">
    <img src="{{$product ['gallery']}}" alt="" width="200px" height="200px">
    <h2> Name : {{$product['name']}}</h2>
    <h4>Price : {{$product['price']}}</h4>
    <h4>Category : {{$product['category']}}</h4>
    <h4>Description : {{$product['description']}}</h4>
</div>

<a href="/">go back</a><br><br>

<div class="buttons">
    <form action="/add_to_cart" method="POST">
    @csrf
    @if(Session::has('user'))
        <input type="hidden" name = "addcart" value="{{$product['id']}}">
        <button style="padding: 10px; border:none; border-radius:5px; ">Add to cart</button><br>
    @else
        <button style="padding: 10px; border:none; border-radius:5px"><a href="/login">Add to cart<br></a></button>
    @endif 
    
    </form>
    
    <button style="padding: 10px; border:none; border-radius:5px; ">Buy now</button>
</div>

@endsection