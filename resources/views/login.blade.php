@extends('master')

@section('content')
<h2 class="heading">Login Page</h2>
<form action="/login" method="POST"  class="form">
    @csrf
    <input type="text " name="name" placeholder="Name..."><br>
    <input type="password" name="password" placeholder="password"><br>
    <button class="btn"> Submit</button>

</form>

@endsection