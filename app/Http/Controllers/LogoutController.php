<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\LoginCheck;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    function process()
    {
        Session::flush();
        return redirect()->route('admin.login');
    }

}