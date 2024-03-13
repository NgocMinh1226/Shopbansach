<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use DB;
use Session;

session_start();

class ProductController extends Controller
{
    // public function details_product()
    // {
    //     return view('pages.details_book');
    // }

    public function details_product($product_id)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'asc')->get();
        // $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderby('brand_id', 'asc')->get();
        $details_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            // ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
            ->join('tbl_publisher', 'tbl_publisher.publisher_id', '=', 'tbl_product.publisher_id')
            ->where('tbl_product.product_id', $product_id)->get();

        $relevant_product = DB::table('tbl_product')
            ->where('product_id', $product_id)
            ->first(); // Lấy thông tin của sản phẩm có ID là $product_id

        // if ($relevant_product) {
        //     $relevant_product_name = $relevant_product->product_name;
        //     $relevant_product_author = $relevant_product->product_author;
        //     $relevant_product_category = $relevant_product->category_id;

        //     // $similar_products = DB::table('tbl_product')
        //     //     ->where('product_id', '!=', $product_id)
        //     //     ->where('product_name', 'like', '%' . $relevant_product_name . '%')
        //     //     ->get();

        //     $similar_products = DB::table('tbl_product')
        //         ->where('product_id', '!=', $product_id)
        //         ->where(function ($query) use ($relevant_product_name) {
        //             $query->where('product_name', 'like', '%' . $relevant_product_name . '%')
        //                 ->orWhere('product_author', $relevant_product_author) // Thêm điều kiện tương tự về tác giả
        //                 ->orWhere('category_id', $relevant_product_category); // Thêm điều kiện tương tự về thể loại
        //         })
        //         ->get();
        // }


        if ($relevant_product) {
            $relevant_product_name = $relevant_product->product_name;
            $relevant_product_author = $relevant_product->product_author; // Sửa từ 'author' thành 'product_author'
            $relevant_product_category = $relevant_product->category_id;

            $similar_products = DB::table('tbl_product')
                ->where('product_id', '!=', $product_id)
                ->where(function ($query) use ($relevant_product_name, $relevant_product_author, $relevant_product_category) {
                    $query->where('product_name', 'like', '%' . $relevant_product_name . '%')
                        ->orWhere('product_author', $relevant_product_author) // Sửa từ 'author' thành 'product_author'
                        ->orWhere('category_id', $relevant_product_category);
                })
                ->get();
        }

        return view('pages.details_book')
            ->with('category', $cate_product)
            ->with('product_details', $details_product)
            ->with('similar_products', $similar_products);
    }
}
