<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            if (auth()->user()->role == "Super Admin") {
                return redirect(route('superadmin.home'));
            }
        }
        $master = [
            'title' => 'Login',
            'logo' => asset('images/logo.png'),
        ];

        return inertia()->render('login', compact('master'));
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // $user = User::where('email', $request->email)->first();
            if (auth()->user()->role == "Super Admin") {
                return redirect(route('superadmin.home'));
            }
            // else if (auth()->user()->role == "Admin") {
            //     return redirect(route('admin.home'));
            // } else if (auth()->user()->role == "Operator") {
            //     return redirect(route('operator.home'));
            // }
        }

        return back()->with(['error', 'Login failed!']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('homepage'));
    }
}
