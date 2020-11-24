<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [ProductController::class, 'product']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/login', [UserController::class, 'login_auth']);

Route::get('/detail/{id}', [ProductController::class, 'detail']);

Route::post('/search',[ProductController::class, 'search']);

Route::post('/add_to_cart', [ProductController::class, 'add_to_cart']);

Route::get('/total_cart', [ProductController::class, 'cartitem']);


