<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthentikasiController extends Controller
{
    public function register(){
        return view('customer.register');
    }

    public function postregister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>'customer'
        ]);

        return redirect()->route('loginyu');
    }

    public function login(){
        return view('login');
    }

    public function postlogin(Request $request){
        $validasi = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

         
        if(Auth::attempt($validasi)){
            $user = Auth::user();

            if($user->role == 'admin'){
                return redirect()->route('login');
            }
            else{
                return redirect()->route('dashboardkuy');
            }
        }
        return back()->with('error','Email atau Password salah!');
    }
}
