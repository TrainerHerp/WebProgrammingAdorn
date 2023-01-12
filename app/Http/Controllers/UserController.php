<?php

namespace App\Http\Controllers;

use App\Models\NFT;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->only("viewProfile");
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
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'email' => 'required|email:rfc,dns|unique:users,email',
            'fullname' => 'required|min:5',
            'username' => 'required|min:5|unique:users,username',
            'password' => 'required|min:5',
            'password-confirm' => 'required_with:password|same:password|min:5',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
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
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
//        $user = User::find($id);
//        return view('seller_profile', ['user' => $user]);
        $nft = NFT::all();
        $nft_created = $nft->where('creator_id', '=', $user->id);
        $nft_owned = $nft->where('owner_id', '=', $user->id)->where('creator_id', '!=', $user->id);


        return view('seller_profile', [
            'username' => $user->username,
            'email' => $user->email,
            'image' => $user->image,
            'balance' => $user->balance,
            'created_at' => $user->created_at,
            'bio' => $user->bio,
            'nft_created' => $nft_created,
            'nft_owned' => $nft_owned,
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

    public function viewLogin()
    {
        return view('login');
    }

    public function viewRegister()
    {
        return view('register');
    }

    public function viewRankings()
    {
        $user = User::orderBy('balance', 'DESC')->paginate(6);

        return view('rankings')->with(['user' => $user]);
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            if ($request->remember) {
                Cookie::queue('email', $request->email, 120);
                Cookie::queue('password', $request->password, 120);
            }
            return redirect('/');
        }
        return back()->withErrors([
            'fail' => 'Wrong Email/Password'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function viewProfile()
    {
        $id = auth()->user()->id;
        $nft = NFT::all();
        $nft_created = $nft->where('creator_id', '=', $id);
        $nft_owned = $nft->where('owner_id', '=', $id)->where('creator_id', '!=', $id);

        return view('profile', [
            'username' => auth()->user()->username,
            'email' => auth()->user()->email,
            'image' => auth()->user()->image,
            'balance' => auth()->user()->balance,
            'created_at' => auth()->user()->created_at,
            'bio' => auth()->user()->bio,
            'nft_created' => $nft_created,
            'nft_owned' => $nft_owned,
        ]);
    }

    public function viewEditProfile()
    {
        return view('edit_profile', [
            'username' => auth()->user()->username,
            'bio' => auth()->user()->bio,
        ]);
    }

    public function editProfile(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $rules = [
            'username' => 'required|min:5|max:20|unique:users,username,' . $user->id,
            'bio' => 'required|min:1',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user['username'] = $request->username;
        $user['bio'] = $request->bio;
        $user->save();

        return redirect('/profile');
    }
}
