@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">News Articles</h1>
    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Create New Article</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Published At</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category }}</td>
                    <td>{{ $article->published_at ? $article->published_at->format('d M, Y') : 'Not Published' }}</td>
                    <td>{{ $article->status }}</td>
                    <td class="text-center">
                        <!-- View Icon -->
                        <a href="{{ route('news.show', $article->id) }}" class="btn btn-light btn-sm">
                            <i class="fa fa-eye"></i>
                        </a>
                        
                        <!-- Edit Icon -->
                        <a href="{{ route('news.edit', $article->id) }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        
                        <!-- Delete Icon -->
                        <form action="{{ route('news.destroy', $article->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
