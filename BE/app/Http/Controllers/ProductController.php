<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Review;
use App\Models\User;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        $data = [
            'products' => $products,
            'category' => $category,
        ];
        return view('user.product.product', $data);
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $reviews = Review::where('product_id', $product->id)->get();

        // Calculate total reviews and average rating
        $totalReviews = $reviews->count();
        $averageRating = $totalReviews > 0 ? $reviews->avg('rating') : 0;

        // Get user names for each review
        $reviewNames = $reviews->map(function ($review) {
            $user = User::find($review->user_id);
            return $user ? $user->name : null;
        });

        $data = [
            'product' => $product,
            'reviews' => $reviews,
            'reviewNames' => $reviewNames,
            'totalReviews' => $totalReviews,
            'averageRating' => $averageRating,
        ];
        return view('user.product.detail', $data); // Ensure this matches your existing view path
    }

    public function show($id)
    {
        $product = Product::with('reviews')->findOrFail($id); // Assuming 'reviews' is the relationship
        $totalReviews = $product->reviews->count();
        $averageRating = $totalReviews > 0 ? $product->reviews->avg('rating') : 0;
        $data = [
            'product' => $product,
            'reviews' => $product->reviews,
            'totalReviews' => $totalReviews,
            'averageRating' => $averageRating,
        ];
        return view('user.product.detail', $data);
    }

    public function getProductAjax($id)
    {
        $product = Product::find($id);
        if ($product) {
            return response()->json($product);
        }
        return response()->json(['error' => 'Product not found'], 404);
    }
}
