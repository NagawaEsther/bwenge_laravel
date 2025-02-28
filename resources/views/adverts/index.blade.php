<!-- resources/views/adverts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Adverts</h1>
        <a href="{{ route('adverts.create') }}" class="btn btn-primary mb-3">Create New Advert</a>

        {{-- @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif --}}

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Image</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($adverts as $advert)
                    <tr>
                        <td>{{ $advert->id }}</td>
                        <td>{{ $advert->title }}</td>
                        <td>{{ $advert->status }}</td>
                        <td>{{ $advert->start_date }}</td>
                        <td>{{ $advert->end_date }}</td>

                        <td>
                            <!-- Check if the advert has an image and display it -->
                            @if($advert->image)
                                <img src="{{ asset('storage/' . $advert->image) }}" alt="Advert Image" width="100" height="auto">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        
                        <td class="text-center">
                            <!-- View Icon -->
                            <a href="{{ route('adverts.show', $advert->id) }}" class="btn btn-light btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>

                            <!-- Edit Icon -->
                            <a href="{{ route('adverts.edit', $advert->id) }}" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>

                            <!-- Delete Icon -->
                            <form action="{{ route('adverts.destroy', $advert->id) }}" method="POST" style="display:inline;">
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
