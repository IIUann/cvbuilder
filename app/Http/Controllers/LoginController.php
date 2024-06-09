<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('user.login');
    }
    public function showuserdashbord()
    {
        return view('dash.Userdash');
    }

    public function showadmindashbord()
    {
        return view('dash.Admindash');
    }

    public function login (Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $login = $request->input('email');
        $user = User::where('email',$login)->first();

        if (Auth::attempt(['email' => $login, 'password' => $request->get('password')])) {
            Auth::loginUsingId($user->id);
            if (auth()->user()->type == 1) {
                return redirect()->route('admindash');
            } else
                return redirect()->route('userdash');
        } else {
            return back()->withErrors([ 'email' => 'the pasword or email is incorect' ]);
        }
    }

}
