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
}
