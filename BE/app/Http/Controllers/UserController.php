<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class UserController extends Controller
{
    public function index()
    {
        $category = Category::all(); // Fetch categories from the database
        return view('user.template.user', compact('category'));
    }
}
