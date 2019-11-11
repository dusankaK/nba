<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Team;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('user')->orderBy('created_at', 'desc')->paginate(15);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        $user = User::find($news->user_id);
        $newsTeam = $news->team()->get();

        return view('news.show', compact('news', 'user', 'newsTeam'));
    }

    public function teamIndex($team)
    {   
        $team = Team::where('name', $team)->first();
        $teamNews = $team->news()->get();

        return view('news.team-news', compact('team', 'teamNews'));
    }

    public function create()
    {
        $teams = Team::get();

        return view('news.create', compact('teams'));
    }

    public function store()
    {
        $news = new News;

        $news->title = request('title');
        $news->content = request('content');
        $news->user_id = Auth::user()->id;
        $news->save();

        $news->team()->attach(request('teams'));
        session()->flash('message', 'Thank you for publishing article on www.nba.com!');

        return redirect('/news');

    }

}
