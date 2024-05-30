<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $ValidatedData = $request->validated();


        $password =Hash::make($ValidatedData['password']);
        $user = User::create($ValidatedData);

        // $user = User::create([
        //     $email,
        //     $password,
        //     $name
        // ]);

        return redirect()->route('login');

    }







}
