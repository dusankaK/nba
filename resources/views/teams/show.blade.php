@extends('layouts.master')
@section('title')
    {{ $team->name }}
@endsection


@section('content')

    <h3>Team</h3>
    <p>Name: {{ $team->name }}<p>
    <p>Email: {{ $team->email }}<p>
    <p>Address: {{ $team->address }}<p>
    <p>City: {{ $team->city }}<p>  
    
    <h3>Players:</h3>

    @foreach ($team->players as $player)
        <ul>
            <li>
                <a href="/players/{{ $player->id }}">{{ $player->first_name}} {{$player->last_name}}</a>
            </li>
        </ul>
    @endforeach    
    
    <div>
    <h3>Comments</h3>
        @if(count($team->comments))
            @foreach ($team->comments as $comment)
                <ul>
                    <li>{{$comment->content}}</li>
                </ul>
            @endforeach
        @endif
    </div>

    @if (session('message'))
    
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    
    @endif

    <form method="POST" action="{{ route('create.comment', ['id' => $team->id]) }}">
        @csrf
    
        <div class="form-group">
            <h3>Write comment</h3>
            <input type="text" name="content" class="form-control" id="content">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            @include('partials.error-message' , ['fieldName' => 'content'])
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


@endsection