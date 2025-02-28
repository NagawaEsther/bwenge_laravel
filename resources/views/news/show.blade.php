@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $news->title }}</h1>
    <p><strong>Category:</strong> {{ $news->category }}</p>
    <p><strong>Published At:</strong> {{ $news->published_at ? $news->published_at->format('d M, Y') : 'Not Published' }}</p>
    <p>{{ $news->content }}</p>
    
    @if ($news->image)
        <img src="{{ asset('storage/'.$news->image) }}" alt="News Image" class="mt-4" width="500">
    @endif

    <a href="{{ route('news.index') }}" class="btn btn-secondary mt-4">Back to List</a>
</div>
@endsection
