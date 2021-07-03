<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Praktikum 2
    // public function index()
    // {
    //     return 'Selamat Datang';
    // }
    public function home()
    {
        return '<a href="https://www.educastudio.com/">Home</a>';
    }
}
