<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }


    public function doLogin(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect("/dashboard");
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function init()
    {
        $count = User::count();
        if ($count === 0) {
            User::create([
                'name' => 'Touhid Mia',
                'email' => 'hmtmcse@gmail.com',
                'password' => bcrypt('password')
            ]);
        }
        return "Initiated";
    }

}
