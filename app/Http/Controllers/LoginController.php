<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('components.login');
    }
    public function handle(Request $request)
    {
        $creadentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3'],
        ]);

        $success = Auth::attempt($creadentials, true);
        if ($success) {
            $request->session()->regenerate();
            return to_route('dashboard');
        } else {
            return to_route('login');
        }

        if (Auth::check()) {
            return to_route('dashboard');
        } else {
            return to_route('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login');
    }
}
