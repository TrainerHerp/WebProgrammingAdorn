<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NFT;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function viewHome() {
        $id = auth()->user()->id;
        $category = Category::all();
        $popular = NFT::all()->where('owner_id', '!=', $id)->where('creator_id', '!=', $id)->take(3);
        $user = User::take(5)->orderBy('balance', 'DESC')->get();

        return view('index')->with(['category' => $category, 'popular' => $popular, 'user' => $user]);
    }
}
