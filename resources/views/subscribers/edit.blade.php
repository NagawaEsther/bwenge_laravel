<!-- resources/views/subscribers/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Edit Subscriber</h1>

         <!-- Back Button -->
         <a href="{{ route('subscribers.index') }}" class="btn btn-secondary mb-4">
           Back to subscribers
        </a>

        <form action="{{ route('subscribers.update', $subscriber->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $subscriber->email) }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endsection
