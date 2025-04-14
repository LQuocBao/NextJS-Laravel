<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $product = Product::all();
        // Get products with sale_price
        $producthot = Product::where('sale_price', '!=', null)->limit(8)->get();
        $productnew = Product::where('created_at', '>=', now()->subDays(10))->limit(8)->get();
        $category = Category::all();
        $data = [
            'product' => $product,
            'category' => $category,
            'producthot' => $producthot,
            'productnew' => $productnew,
        ];
        return view('welcome', $data);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $product = Product::where('name', 'LIKE', '%' . $search . '%')->get();
        $category = Category::all();
        $data = [
            'product' => $product,
            'category' => $category,
        ];
        return view('user.product.search', $data);
    }
}
