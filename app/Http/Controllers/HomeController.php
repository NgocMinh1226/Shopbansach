<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
            ->where('tbl_category_product.category_status', '1')
            ->where('product_status', '1')
            ->orderby('product_id', 'asc')
            ->get();
        return view('pages.home')->with('category', $cate_product)->with('all_product', $all_product);
    }

    public function category_book()
    {
        return view('pages.category_book');
    }

    public function user_profile()
    {
        return view('pages.user_profile');
    }

    // hiển thị giỏ hàng
    public function cart()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id', 'asc')->get();
        return view('pages.cart')->with('category', $cate_product)->with('all_product', $all_product);
    }
}
