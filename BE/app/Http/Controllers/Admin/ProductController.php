<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return response()->json([
            'success' => true,
            'message' => 'Product list',
            'data' => $product
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price' => 'required|numeric|min:0|lte:price',
                'sale_price' => 'nullable|numeric|min:0',
                'short_description' => 'nullable|string',
                'description' => 'nullable|string',
                'quantity' => 'required|integer|min:1',
                'category_id' => 'required|exists:categories,id',
            ]);
            // Xử lý upload ảnh
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $product = new Product();
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->image = $imageName; // Đúng tên file đã upload
            $product->quantity = $request->quantity;
            $product->save();
            return response()->json([
                'success' => true,
                'message' => 'Product created successfully',
                'data' => $product
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while creating the product',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $product = Product::findOrFail($id);
            // $request->validate([
            //     'name' => 'required|string|max:255',
            //     'slug' => 'required|string|max:255',
            //     'price' => 'required|numeric|min:0',
            //     'price_sale' => 'nullable|numeric|min:0',
            //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //     'quantity' => 'required|integer|min:1',
            //     'description' => 'nullable|string',
            //     'category_id' => 'required|exists:categories,id',
            // ]);
            // Xử lý upload ảnh nếu có
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('img'), $imageName);
                $product->image = $imageName; // Cập nhật tên file đã upload
            }
            $product->name = $request->name ?? $product->name;
            $product->slug = $request->slug ?? $product->slug;
            $product->price = $request->price ?? $product->price;
            $product->description = $request->description ?? $product->description;
            $product->quantity = $request->quantity ?? $product->quantity;
            $product->category_id = $request->category_id ?? $product->category_id;
            $product->save();
            return response()->json([
                'success' => true,
                'message' => 'Product updated successfully',
                'data' => $product
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while updating the product',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
            return response()->json([
                'success' => true,
                'message' => 'Product deleted successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while deleting the product',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
