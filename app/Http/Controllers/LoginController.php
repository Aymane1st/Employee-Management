<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Http\Controllers\EmployeeController;

class LoginController extends Controller
{
    public function show(){
        return view('login.show');
    }

    public function login(Request $request){
        $login = $request->email;
        $password = $request->password;
        $credentials = ['email' => $login, "password" => $password];
        
        
       if(Auth::attempt($credentials)) {
           $request->session()->regenerate();
           return redirect('employee')->with('success', 'Successfully logged in');
      } else {
           return back()->withErrors([
              'login' => 'Invalid email or password.'
        ])->withInput();
       }
  
    }
    }
