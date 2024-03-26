<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $categories = Category::all();
        $products = Product::orderBy('id','DESC')->paginate(12);
        $fruits = Product::orderBy('id','DESC')->where('category_id', $categories[0]->id)->get();
        $vegetables = Product::orderBy('id','DESC')->where('category_id', $categories[1]->id)->get();
        return view('fe.home', compact('categories','products', 'fruits','vegetables'));
    }

    public function search(Request $request){
        $name = $request->name;
        $products = Product::where('name','LIKE' , "%".$name."%")->get();
        return response()->json($products, 200);
    }
}
