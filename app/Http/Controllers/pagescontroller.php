<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function home()
    {
        return view ('index');
    }
    public function about()
    {
        return view ('about');
    }
    public function services()
    {
        return view ('services');
    }
    public function blog()
    {
        return view ('blog');
    }
    public function blogdetail()
    {
        return view ('blog-details');
    }
    public function contact()
    {
        return view ('contact');
    }
}
