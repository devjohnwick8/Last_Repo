<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class UIAuthController extends Controller
{
    //
    public function login()
    {
        return view('log-in');
    }

    public function sign_up()
    {
        return view('sign-up');
    }
}
