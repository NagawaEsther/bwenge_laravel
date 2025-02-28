<!-- resources/views/adverts/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Advert Details</h1>

        <div class="card">
            <div class="card-header">
                Advert Information
            </div>
            <div class="card-body">
                <p><strong>Title:</strong> {{ $advert->title }}</p>
                <p><strong>Status:</strong> {{ $advert->status }}</p>
                <p><strong>Start Date:</strong> {{ $advert->start_date }}</p>
                <p><strong>End Date:</strong> {{ $advert->end_date }}</p>
                @if($advert->image)
                    <p><strong>Image:</strong></p>
                    <img src="{{ asset('storage/' . $advert->image) }}" width="300" alt="Advert Image">
                @endif
            </div>
        </div>

        <a href="{{ route('adverts.index') }}" class="btn btn-secondary mt-3">Back to Advert List</a>
    </div>
@endsection
