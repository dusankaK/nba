<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;

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

        return view('news.show', compact('news', 'user'));
    }
}
