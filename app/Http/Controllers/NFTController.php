<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\NFT;
use App\Models\User;

class NFTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nft = NFT::find($id);
        $creator = User::find($nft->creator_id);
        $owner = User::find($nft->owner_id);
        return view('show', [
            'nft' => $nft,
            'owner' => $owner,
            'creator' => $creator
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function viewExplore(Request $request)
    {
//        get column
        $sort_column = 'nft.created_at';
        $direction = 'desc';
        if ($request->has("sort")) {
            $sort = $request->query('sort');

            if ($sort != 'newest') {
                $sort_column = 'nft.price';
            }

            if ($sort == 'low_price') {
                $direction = 'asc';
            }
        }


        $nfts = NFT::whereHas('category', function ($query) use ($request) {
            if ($request->has("category")) {
                $category_id = $request->query('category');
                $query->where("category_id", '=', $category_id);
            }

            if ($request->has('search')) {
                $query->where("nft.name", 'like', "%{$request->query('search')}%");
            }

        })->orderBy($sort_column, $direction)->paginate(20);


        $categories = Category::all();

        return view('explore', compact("nfts", 'categories'));
    }

}
