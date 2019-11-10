@extends('layouts.master')
@section('title', 'News')

@section('content')
    
    @foreach ($news as $vest)

        <p><a href="/news/{{ $vest->id }}">{{ $vest->title }}</a> posted by {{ $vest->user->name }}</p>
        
    @endforeach

    <nav class="blog-pagination">
            <a class="btn btn-outline-{{ $news->currentPage() == 1 ? 'secondary disabled' : 'primary' }}" href="{{ $news->previousPageUrl() }}">Older</a>
            <a class="btn btn-outline-{{ $news->hasMorePages() ? 'primary' : 'secondary disabled'}}" href="{{ $news->nextPageUrl() }}">Newer</a>
            Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
    </nav>
@endsection