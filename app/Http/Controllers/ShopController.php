<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function home(){
        $products = Product::orderBy('id','desc')->limit(20)->get();
        $categories = Category::all();
        return view('home',compact('products','categories'));
    }

    public function show(){
        $products = Product::paginate(9);
        $categories = Category::all();
        return view('shop.show',compact('products','categories'));
    }

    public function showCategory($name){
        $category = Category::where('name',$name)->first();
        if($category){
            $products = $category->products()->paginate(9);
        }else{
            $products = Product::paginate(9);
        }
        $categories = Category::all();
        return view('shop.show',compact('products','categories'));
    }

    public function showProduct($id){
        $product = Product::findOrFail($id);
        $related_products = Product::where('category_id',$product->category->id)->where('id','!=',$product->id)->orderBy('id','desc')->get();
        return view('product.details',compact('product','related_products'));
    }


}
