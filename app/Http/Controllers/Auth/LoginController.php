<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }
    public function login(LoginRequest $request)
    {
        $ValidatedData = $request->validated();

        $user = User::where('email' , $ValidatedData['email']);
        $password = $user->password = Hash::make($ValidatedData['password']);

       if(($user && $password)->first())
       {
            Auth::login($user);
       }
        else{
            return redirect()->back();
        }
    }




public function logout(Request $request)
{
    Auth::logout();
    return redirect()->route('Auth.login');
}
}
