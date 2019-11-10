@extends('layouts.master')
@section('title')
    {{ $news->title }}
@endsection

@section('content')
    
    <div class="pt-3">
    <h2>{{ $news->title }}</h2>
    <p>{{ $news->content }}</p>
    </div>

    <div class="border-top mt-5 pt-3">
    <p>Created by <strong>{{ $user->name }}</strong></p>
    </div>

    @if (count($newsTeam))
        <div class="border-top m-0 mt-3 pt-3">
            <h4>This article is associated with following teams:</h4>
            <ul>
                @foreach ($newsTeam as $team)
                    <li>
                        <a href="/teams/{{ $team->id }}">{{ $team->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @else 
        <div class="border-top m-0 mt-3 pt-3">
            <h4>This article isn't associated with any team.</h4>
        </div>
    @endif
    
@endsection