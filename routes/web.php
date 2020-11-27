<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/logout', function(){
    Session::forget('user');
    return redirect('login');
});

Route::get('/register', function(){
    return view('register');

});

Route::post('/register', [UserController::class, 'register']);

Route::get('/', [ProductController::class, 'product']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/login', [UserController::class, 'login_auth']);

Route::get('/detail/{id}', [ProductController::class, 'detail']);

Route::post('/search',[ProductController::class, 'search']);

Route::post('/add_to_cart', [ProductController::class, 'add_to_cart']);

Route::get('/total_cart', [ProductController::class, 'cartitem']);

Route::get('/cart', [ProductController::class, 'cart']);

Route::get("removecart/{id}",[ProductController::class,'removeCart']);

Route::get('/orders', [ProductController::class, 'orders']);

Route::post('/order_place', [ProductController::class, 'order_place']);

Route::get('my_order/', [ProductController::class, 'my_order']);






