<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        /*User::create([
        'name'=>'rabah',
        'email'=>'rabah@gmail.com',
        'password'=>Hash::make('0000')
        ]);*/
        
        return view('auth.login');
    }
    public function doLogin(LoginRequest $request) {
        $credentials=$request->validated();
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.property.index'));
        }
        return back()->withErrors([
            'email'=>'email invalid verifier votre mail'
        ])->onlyInput('email');
    }

    public function logout() {
        Auth::logout();
        return to_route('login')->with('success','vous etes diconnecter ');
    }
    
}
