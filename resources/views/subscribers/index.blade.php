@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Subscribers</h1>

        <!-- Create Subscriber Button -->
        <a href="{{ route('subscribers.create') }}" class="btn btn-primary mb-3">
             Create Subscriber
        </a>

        <!-- Subscriber Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscribers as $subscriber)
                    <tr>
                        <td>{{ $subscriber->id }}</td>
                        <td>{{ $subscriber->email }}</td>
                        <td class="text-center">
                            <!-- View Icon -->
                            <a href="{{ route('subscribers.show', $subscriber->id) }}" class="btn btn-light btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            
                            <!-- Edit Icon -->
                            <a href="{{ route('subscribers.edit', $subscriber->id) }}" class="btn btn-warning btn-sm">
                                <i class="fa fa-edit"></i>
                            </a>
                            
                            <!-- Delete Icon -->
                            <form action="{{ route('subscribers.destroy', $subscriber->id) }}" method="POST" style="display:inline;">
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
