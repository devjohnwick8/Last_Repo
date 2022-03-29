<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class UIController extends Controller
{
    //
    public function home()
    {
        return view('index');
    }

    public function about_us()
    {
        return view('about-us');
    }


    public function our_service()
    {
        return view('our-service');
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    public function privacy_policy()
    {
        return view('privacy-policy');
    }


    public function legel_disclaimer()
    {
        return view('legel-disclaimer');
    }


    public function auto_parts_product()
    {
        return view('auto-parts-product');
    }


    public function auto_parts()
    {
        return view('auto-parts');
    }
}
