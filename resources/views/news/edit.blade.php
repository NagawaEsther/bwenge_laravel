@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit News Article</h1>

    <!-- Back Button -->
    <a href="{{ route('news.index') }}" class="btn btn-secondary mb-4">
        Back to News
     </a>

    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $news->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content', $news->content) }}</textarea>
        </div>

        {{-- <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($news->image)
                <img src="{{ asset('storage/'.$news->image) }}" alt="News Image" class="mt-2" width="150">
            @endif
        </div> --}}

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            
            @if ($news->image)
                <p>Current Image:</p>
                <img src="{{ asset('storage/'.$news->image) }}" alt="News Image" class="mt-2" width="150">
            @endif
        </div>
        
        <div class="mb-3">
            <label for="published_at" class="form-label">Published Date</label>
            <input type="date" name="published_at" id="published_at" class="form-control" value="{{ old('published_at', $news->published_at) }}">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $news->category) }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="active" {{ old('status', $news->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $news->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
