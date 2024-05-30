<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Routing\Controller;

class LoginAdminController extends Controller
{
    private $adminCredentials = [
        'username' => 'admin123', // example username
        'password' => '12345', // example password
    ];

    public function showLoginForm()
    {
        return view('auth.loginAdmin');
    }

     public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:5|max:6',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === $this->adminCredentials['username'] && $password === $this->adminCredentials['password']) {
            return redirect()->route('Admin.BerandaAdmin');
        }

        return back()->withErrors(['message' => 'Invalid credentials.']);
    }
}
