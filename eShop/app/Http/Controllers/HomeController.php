<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories = Category::all();
        return view('index', ['categories' => $allCategories]);
        return view('index', compact('categories'));
    }
}
