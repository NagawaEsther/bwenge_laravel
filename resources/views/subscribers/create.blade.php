<!-- resources/views/subscribers/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Subscribe</h1>

        <form action="{{ route('subscribers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Subscribe</button>
        </form>
    </div>
@endsection
