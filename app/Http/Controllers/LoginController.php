<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

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

        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }
}