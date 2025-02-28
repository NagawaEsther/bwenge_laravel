<!-- resources/views/subscribers/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Subscriber Details</h1>

        <div class="card">
            <div class="card-header">
                Subscriber Information
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $subscriber->id }}</p>
                <p><strong>Email:</strong> {{ $subscriber->email }}</p>
            </div>
        </div>

        <a href="{{ route('subscribers.index') }}" class="btn btn-secondary mt-3">Back to Subscribers List</a>
    </div>
@endsection
