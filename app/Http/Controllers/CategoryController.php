<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NFT;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function viewHome() {
        $category = Category::all();
        $popular = NFT::paginate(3);
        $user = User::take(5)->orderBy('balance', 'DESC')->get();

        return view('index')->with(['category' => $category, 'popular' => $popular, 'user' => $user]);
    }
}
