<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
   public function showForm()
   {
       return view('be.login.form');
   }
}
