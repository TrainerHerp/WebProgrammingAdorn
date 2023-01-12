<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NFT;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function viewHome()
    {

        $category = Category::all();
        $popular = NFT::all();
        $user = User::take(5)->orderBy('balance', 'DESC')->get();

        if (auth()->user()) {
            $id = auth()->user()->id;
            $popular = $popular->where('owner_id', '!=', $id)->where('creator_id', '!=', $id);
        }

        $popular = $popular->take(3);

        return view('index')->with(['category' => $category, 'popular' => $popular, 'user' => $user]);
    }
}
