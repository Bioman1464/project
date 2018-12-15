<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        $product = Product::find($id);
        $cart->addItem($id, $product);
        $request->session()->put('cart', $cart);

        // dump($cart);
        return redirect()->route('allProducts');
    }
}
