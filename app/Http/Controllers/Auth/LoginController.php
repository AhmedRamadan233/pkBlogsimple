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
        $validatedData = $request->validated();

        $user = User::where('email', $validatedData['email'])->first();

        if ($user && Hash::check($validatedData['password'], $user->password)) {

            Auth::login($user);

            return redirect()->route('post.index');
        } else {
            return redirect()->back()->withErrors(['login' => 'Invalid credentials.']);
        }
    }



    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
