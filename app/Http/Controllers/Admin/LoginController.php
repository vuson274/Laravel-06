<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function showForm()
   {
       return view('be.login.form');
   }

   public function darshbroard(){
       return view('be.darshbroad');
   }
   public function login(Request $request){
     if (Auth::attempt(['email' => $request->email,'password'=>$request->password,'level'=> 1])){
         return redirect()->route('admin.darshbroard');
     }
   }

   public function logout(){
       Auth::logout();
       return redirect()->route('show.login');
   }
}
