<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\NFT;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NFTController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->only("show", "create", "store");
    }

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
        $categories = Category::all();

        return view('add_item', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:5|max:20',
            'description' => 'required|min:5',
            'price' => 'required|numeric|min:1000',
            'category' => 'required',
            'image' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $id = auth()->user()->id;

        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $category = $request->category;

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();

        Storage::putFileAs('public/img', $image, $imageName);
        $imageUrl = 'storage/img/'.$imageName;

        NFT::create([
            'name' => $name,
            'description' => $description,
            'image' => $imageUrl,
            'price' => $price,
            'category_id' => $category,
            'owner_id' => $id,
            'creator_id' => $id,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        return redirect('/explore');
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
    public function destroy(NFT $nft)
    {
        $nft->delete();

        return redirect('profile');
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

        $featuredArtists = User::orderBy('balance', 'desc')->limit(12)->get();
        $categories = Category::all();

        return view('explore', compact("nfts", 'categories', 'featuredArtists'));
    }

    public function buy($id)
    {
        $nft = NFT::find($id);

        $nft->owner_id = auth()->user()->id;
        $creator = User::find($nft->creator_id);
        $creator->balance = $creator->balance + $nft->price;
        $creator->save();

        $nft->save();
        return redirect('/profile');
    }
}
