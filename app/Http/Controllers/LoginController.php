<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }
    public function create()
    {
        return view('login.create');
    }

    public function store(LoginRequest $request)
    {
        //pokusaj prijavljivanja korisnika

        if(!auth()->attempt($request->only(['email', 'password']))){
            return back();
        }

        if (User::where('email', $request->email)->first()->is_verified === 0) {

            return view('login.create')->with('message', 'Your email is not verified yet.');
        }

        Auth::attempt($request->only(['email', 'password']));

        return redirect('/');
    }

    public function verifyEmail($id)
    {
        User::where('id', $id)->update(['is_verified' => 1]);

        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }
}