<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('client.home', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('client.product', compact('product'));
    }
}
