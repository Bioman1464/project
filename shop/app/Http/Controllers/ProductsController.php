<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    //
    public function index()
    {
        /*$products = [0=> ["name"=> "Iphone", "category"=>"smart phones", "price" =>1000],
        1=> ["name"=> "Iphone", "category"=>"smart phones", "price" =>1000],
        2=> ["name"=> "Iphone", "category"=>"smart phones", "price" =>1000]];*/

        $products = Product::all();

        return view("allproducts", compact("products"));
    }

    public function addProductToCart(Request $request,$id){
        // print_r($id);

        // $request->session()->forget('cart');
        // $request->session()->flush();

        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        
        $product = Product::find($id);
        $cart->addItem($id, $product);
        $request->session()->put('cart', $cart);

        //dump($cart);
        return redirect()->route('allProducts');
    }


    public function showCart(){

        $cart = Session::get('cart');

        //cart is not empty
        if($cart){

            return view('cartproducts',['cartItems'=>$cart]);
            //cart is empty
        }else{
            return redirect()->route('allProducts');
        }

    }


    public function deleteItemFromCart(Request $request,$id){
        $cart = $request->session()->get('cart');

        if(array_key_exists($id,$cart->items)){
            unset($cart->items[$id]);
        }

        $prevCart = $request->session()->get('cart');
        $updatedCart = new Cart($prevCart);
        $updatedCart->updatePriceAndQuantity();

        $request->session()->put('cart', $updatedCart);

        return redirect()->route('cartproducts');

    }


}
