<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function category_book()
    {
        return view('pages.category_book');
    }

    public function user_profile()
    {
        return view('pages.user_profile');
    }

    
    
}
