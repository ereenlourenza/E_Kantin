<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginCustomerController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginCustomer');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|max:6',
        ],[
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            session(['role' => 'customer']);
            return redirect()->route('Customer.home');
        } else {
            return back()->withErrors(['message' => 'Invalid credentials.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('role');
        return redirect()->route('login.Customer');
    }
}
