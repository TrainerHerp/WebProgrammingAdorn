<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function viewHome() {
        $category = Category::all();

        return view('index')->with(['category' => $category]);
    }
}
