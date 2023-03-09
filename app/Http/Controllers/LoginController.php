<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function show()
   {
    return view('auth.login');
   }
   public function login(Request $request)
   {
      $crendentials=$request->except('_token');

    if(!Auth::validate($crendentials))
    {
      return redirect()->to('login');
    }
    if(Auth::attempt($crendentials))
    {
      return redirect()->intended('/');
    }
   }
}

?>