<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('home');
    }

    public function category(){
        return view('category');
    }

    public function CatForm(Request $request){
        $request->validate([
            'email'=>'required|Email',
            'password'=>'required|min:6'
        ]);
    }
}
