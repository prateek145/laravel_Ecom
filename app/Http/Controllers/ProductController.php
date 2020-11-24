<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;

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

    



    

   
}
