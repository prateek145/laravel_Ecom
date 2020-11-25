@extends('master')
@section('content')

<form action="/order_place" method="POST">
@csrf
<h3> Item Price : {{$products}} Rs </h3>
<h3> Tax: 0 Rs</h3>
<h3> Delivery Charges: 100 Rs</h3>
<h3> Total : {{$products + 100}}  </h3>

<select name="payment_method" id="">
    <option value="online">Online</option>
    <option value="Cash on delivery">Cash</option>
</select><br><br>
<textarea name="address" id="" cols="20" rows="5"></textarea><br><br>
<button type="submit">submit</button>
</form>




@endsection