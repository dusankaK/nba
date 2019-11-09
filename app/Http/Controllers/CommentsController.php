<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;
use Illuminate\Http\Request;
use App\Team;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('forbidden.words');
    }

    public function store(CommentsRequest $request, $id)
    {
        $team = Team::findOrFail($id);
        $team->comments()->create($request->all());

        Mail::to($team)->send(new CommentReceived);

        return redirect()->route('teams-single', ['id' => $id]);
    }
}