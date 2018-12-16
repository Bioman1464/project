<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Product;

class AdminProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("admin.displayProducts", ['products'=>$products]);
    }

    //display edit product form
    public function editProductForm($id){
        $product = Product::find($id);
        return view('admin.editProductForm',['product'=>$product]);

    }

    //display edit product image form
    public function editProductImageForm($id){
        $product = Product::find($id);
        return view('admin.editProductImageForm',['product'=>$product]);

    }
    public function updateProductImage(Request $request, $id){
        Validator::make($request->all(), ['image'=>"required|image|mimes:jpg,png,jpeg|max:5000"])->validata();

        if($request->hasfile("image")){
            $product = Product::find();
            $exists = Storage::disk('local')->exists("public/product_images/".$product->image);
            if($exists){
                Storage::delete('public/product_images/'.$product->image);
            }
            $ext = $request->file('image')->getClientOriginalExtension();
            $request->image->storeAs("public/product_images/",$product->image);

            $arrayToUpdate = array('image'=>$product->image);
            DB::table('products')->where('id',$id)->update($arrayToUpdate);

            return redirect()->route("adminDisplayProducts");

        }else{

            $error = "No Image was Selected";
            return $error;

        }
    }

    public function updateProduct(Request $request,$id){
        $name = $request->input('name');
        $description = $request->input('description');
        $type = $request->input('type');
        $price = $request->input('price');

        $updateArray = array("name"=>$name, "description"=>$description, "type"=>$type, "price"=>$price);

        DB::table('products')->where('id',$id)->update($updateArray);
        return redirect()->route("adminDisplayProducts");

    }
}
