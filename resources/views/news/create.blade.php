@extends('layouts.master')
@section('title', 'Create news')

@section('content')

    <form action="/news/create" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title:</label><br>
            <input type="text" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="content">Content:</label><br>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label>Select with team/s to associate this article to:</label><br>
            @foreach($teams as $team)
                <input type="checkbox" name="teams[]" value=" {{ $team->id }}"><b>{{ $team->name }} </b><br>                
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Create news</button>
    
    </form>


@endsection