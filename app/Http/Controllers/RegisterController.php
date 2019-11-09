<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\VerificationMail;
use App\Http\Requests\RegisterRequest;
use App\User;

class RegisterController extends Controller
{   
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function create()
    {
        return view('register.create');
    }

    public function store(RegisterRequest $request)
    {
        $user = new User; //kreiranje novog usera
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        $user->save();//user sacuvan
        
        Mail::to($user)->send(new VerificationMail($user->id));

        return view('login.create')->with('message', 'Please verify your email by following link we sent to you');
    }
}
