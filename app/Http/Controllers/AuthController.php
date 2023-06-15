<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    
    public function login(Request $request)
    {
        $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:6"
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put("auth_user", $user);
                return redirect()->route('dashboard.home');
            }
            return back()->with("error", "Wrong password!");
        }
        return back()->with("error", "You are not registered!");
    }

    public function logout(Request $req)
    {
        $req->session()->forget('auth_user'); 
        return redirect()->route('welcome'); 
    }
    
    public function getHash($text)
    {
        return Hash::make($text); 
    }
}
