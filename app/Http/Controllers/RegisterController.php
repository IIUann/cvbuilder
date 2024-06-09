<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function showRegistrationForm()
    {
        return view('user.register');
    }
    public function register(Request $request)
    {


        $user = [
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => $request->get('password'),
        ];


        user::query()->create($user);
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

}
