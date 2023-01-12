<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('profile', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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

    public function register(Request $request)
    {
        $rules = [
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|min:5|unique:users,username',
            'password' => 'required|min:5',
            'password-confirm' => 'required_with:password|same:password|min:5',
            'image' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();

        Storage::putFileAs('public/image', $image, $imageName);
        $imageUrl = 'storage/image/' . $imageName;

        $newUser = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $imageUrl,
        ]);

        User::create(['id' => $newUser->id]);

        return redirect('/login');
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

    public function viewProfile(){
        return view('profile', [
          'username' => auth()->user()->username,
          'email' => auth()->user()->email,
          'image' => auth()->user()->image,
          'balance' => auth()->user()->balance,
          'created_at' => auth()->user()->created_at,
          'bio' => auth()->user()->bio,
        ]);
      }

    public function viewEditProfile() {
        return view('edit_profile', [
          'username' => auth()->user()->username,
          'bio' => auth()->user()->bio,
        ]);
    }

    public function editProfile(Request $request){
        $user = User::find(auth()->user()->id);

        $rules = [
          'username' => 'required|min:5|max:20|unique:users,username,'.$user->id,
          'bio' => 'required|min:1',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
          return back()->withErrors($validator);
        }

        $user['username'] = $request->username;
        $user['bio'] = $request->bio;
        $user->save();

        return redirect('/profile');
      }
}
