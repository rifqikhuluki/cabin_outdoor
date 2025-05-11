<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\LoginCheck;


class LoginController extends Controller
{
    function login()
    {
        return view('admin.login');
    }
    function process(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => ['required', new LoginCheck($request)] // ← ini sudah benar
        ]);

        return redirect()->route('admin.dashboard');
    }

}
