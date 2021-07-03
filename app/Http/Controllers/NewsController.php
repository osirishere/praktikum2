<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($param)
    {
        return '<a href="https://www.educastudio.com/'.$param.'" target="_blank">https://www.educastudio.com/'.$param.'</a>';
    }

    public function news($param)
    {
        return '<a href="https://www.educastudio.com/news/'.$param.'" target="_blank">https://www.educastudio.com/news/'.$param.'</a>';
    }
}
