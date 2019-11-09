<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequest;
use Illuminate\Http\Request;
use App\Team;

class CommentsController extends Controller
{
    public function store(CommentsRequest $request, $id)
    {
        $team = Team::findOrFail($id);

        $team->comments()->create($request->all());

        return redirect()->route('teams-single', ['id' => $id]);
    }
}