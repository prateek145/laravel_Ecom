<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;
use App\Models\order;

class ProductController extends Controller
{
    function product(){
        $item = product::all();
        return view('product', ['product'=> $item]);
    }

    function detail($id){
        $item = product::find($id);
        return view('detail', ['product'=>$item]);
    }

    function search(Request $request){
        
        $data = product::where('name','like', '%'. $request->search .'%')->get();
        return view('search', ['product'=>$data]);
    }

    function add_to_cart(Request $request){
        if($request->session()->has('user')){
            $cart = new cart();
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->addcart;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/');
        }

    }

    static function cartitem(){
        $user = Session::get('user')['id'];
        return cart::where('user_id', $user)->count();
    }

    function cart(){
        $user = Session::get('user')['id'];
        $data =  DB::table('cart')->join('products', 'cart.product_id', 'products.id')
        ->select('products.*','cart.id as cart_id')->where('cart.user_id',$user)->get();

        return view('/cart', ['product'=>$data]);
    }

    function removeCart($id)
    {
         cart::destroy($id);
        return redirect('cart');
    }

    function orders(){
        $user = Session::get('user')['id'];
        
        $data = DB::table('cart')->join('products', 'cart.product_id', 'products.id')->where('cart.user_id', $user)->sum('products.price');
        return view('/orders',['products'=> $data]);
    }

    function order_place(Request $request){
        $user = Session::get('user')['id'];

        $data = cart::where('user_id', $user)->get();

        foreach($data as $item){
            $order = new order();
           $order->product_id = $item['product_id'];
           $order->user_id = $item['user_id'];
           $order->address = $request->address;
           $order->payment_method = $request->payment_method;
           $order->payment_status = 'pending';
           $order->save();
        }

        cart::where('user_id', $user)->delete();
        return redirect('/');

    }

    function my_order(){
        $user = Session::get('user')['id'];
        $orders = DB::table('orders')->join('products', 'orders.product_id', 'products.id')->where('orders.user_id', $user)->get();

        return view('/my_order', ['orders'=> $orders]);

    }

    

   
}
