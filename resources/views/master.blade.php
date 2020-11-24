<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

if (Session::has('user')){
    $total = ProductController::cartitem();
}
else{
    $total=0;
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>master</title>
</head>


<style>
    
    *{
        margin: 0px;
    }

    .heading{
        margin-top: 80px;
    }

    .header{
        background-color: black;
        padding: 10px;
        text-align: center;
        font-weight: 700;
        font-size: larger;

    }

    .nav{
        text-align: left;
    }

    .nav > a{
        text-align: left;
        text-decoration: none;
        color: white;
        margin: 1rem;
    }

    .yield {
        padding-top: 30%;
        background-color: lightgreen;
        padding: 20px;
        text-align: center;
        width: 100%;
        height: 900px;
        
    }

    .form >input{
        margin: 1rem;
        padding: 10px;
        border-radius: 6px;
        border: none;
        transition: transform 450ms ;
        
    }

    .form >input:hover{
        transform: scale(1.03);
    }

    .form >button{
        margin-top: 10px;
        border: none;
        border-radius: 6px;
        padding: 7px;
        font-weight: 700;
        transition: transform 450ms;
    }

    .form > button:hover{
        transform: scale(1.1);
        background-color: black;
        color: white;
    }

    .footer{
        background-color: blanchedalmond;
        padding: 10px;
        text-align: center;
        font-weight: 700;
        font-size: larger;
    }

</style>  




<body>
    <div class="header">
    <ul class="nav">
        <a href="/">Ecom</a> 
        <a href="">Orders</a>
        <a href="">Add to cart ({{$total}})</a>
        @if(Session::has('user')){
            <a href="/logout">Logout</a>
        }
        @else{
            <a href="/login">Login</a>
        }
        @endif
        


        <form action="/search" method="POST" >
        @csrf
        <input type="text" placeholder="search" name = "search">
        <button>submit</button>
        </form>
    </ul>

    

    </div>


    <div class="yield">
        @yield('content')
    </div>

    <div class="footer">
        <p>This is footer </p>
    
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="{{ asset('js/master.js') }}" type="text/javascript"></script>

</body>

</html>