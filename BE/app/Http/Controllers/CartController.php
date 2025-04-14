<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Category;
use App\Models\Product;

class CartController extends Controller
{
    // Display a listing of the cart items
    public function index()
    {
        if (!Session::exists('cart')) {
            Session::put('cart', []);
        }

        // Lấy giỏ hàng từ session
        $cart = Session::get('cart');
        $subtotal = 0;
        $total = 0;

        foreach ($cart as &$item) {
            $product = Product::find($item['id']);
            if ($product) {
                $item['name'] = $product->name;
                $item['price'] = $product->price;
                $item['sale_price'] = $product->sale_price;
                $item['total'] = ($item['sale_price'] ?? $item['price']) * $item['quantity'];
                $subtotal += $item['price'] * $item['quantity']; // Tính tổng giá trị không giảm giá
                $total += $item['total']; // Tính tổng giá trị có giảm giá
            }
        }

        $shipping = 10; // Giá ship cố định (có thể thay đổi theo logic của bạn)
        $total += $shipping; // Cộng phí ship vào tổng giá trị

        $categories = Category::all();

        // Truyền $shipping vào view
        return view('cart.index', [
            'cartItems' => $cart,
            'subtotal' => $subtotal,
            'shipping' => $shipping, // Thêm biến $shipping
            'total' => $total,
            'categories' => $categories,
        ]);
    }

    // Add a product to the cart
    public function store(Request $request)
    {
        if (!Session::exists('cart')) {
            Session::put('cart', []);
        }

        $cart = Session::get('cart');
        $inCart = false;

        foreach ($cart as &$item) {
            if ($item['id'] == $request->id) {
                $item['quantity'] += $request->quantity;
                $inCart = true;
                break;
            }
        }

        if (!$inCart) {
            Session::push('cart', [
                'id' => $request->id,
                'quantity' => $request->quantity,
            ]);
        }

        $product = Product::find($request->id);
        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
        }

        return redirect('/detail/' . $product->slug)->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }

    // Remove the specified cart item from storage
    public function destroy(string $id)
    {
        if (Session::exists('cart')) {
            $cart = Session::get('cart');
            $cart = array_filter($cart, function ($item) use ($id) {
                return $item['id'] != $id;
            });
            Session::put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }
}
