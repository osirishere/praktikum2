<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function about_us()
    {
        return '<a href="https://www.educastudio.com/about-us">About Us</a>';
    }
}
