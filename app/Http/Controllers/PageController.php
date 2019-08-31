<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function committees()
    {
        return view('committees');
    }
    public function secretariat()
    {
        return view('secretariat');
    }
    public function news()
    {
        return view('news');
    }
    public function contact()
    {
        return view('contact');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function tos()
    {
        return view('tos');
    }
}
