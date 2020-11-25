@extends('master')
@section('content')
<h2 class="heading">Register Page</h2>
<form action="/register" method="POST"  class="form">
    @csrf
    <input type="text " name="name" placeholder="Name..."><br>
    <input type="email " name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="password"><br>
    <button class="btn"> Register</button>

</form>

@endsection