@extends('master')
@section('content')

@foreach($product as $item)
<a href = " detail/{{$item['id']}} ">
<div class="box" style="float:left; margin-left:30px;">
<img src="{{$item['gallery']}}" alt="" width="200px" height="130px">
<p>{{$item['name']}}</p>
<p>{{$item['price']}}</p>
<p>{{$item['description']}}</p>
</div>
</a>

@endforeach

<div class="trending">
<h2>Trending </h2>
</div>


@endsection