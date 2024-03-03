<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;
session_start();

class CartController extends Controller
{
    public function cart()
    {
        return view('pages.cart');
    }
    
}
