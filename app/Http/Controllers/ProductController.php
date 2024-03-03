<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();

class ProductController extends Controller
{
    public function details_book()
    {
        return view('pages.details_book');
    }
    
}
