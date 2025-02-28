

@extends('layouts.app')

@section('content')
<section class="section">
    {{-- <div class="section-header">
        <h3 class="page__heading" style="color: #333;">Dashboard</h3>
    </div> --}}
    <div class="section-body">
        <div class="row">
           
            {{-- <div class="col-md-4 mb-3">
                <a href="{{ route('news.index') }}">
                    <div class="card text-center" style="background-color: #f8f9fa; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <i class="fas fa-newspaper fa-3x" style="color: #007bff;"></i>
                            <h5 class="mt-2" style="color: #333;">News</h5>
                           
                        </div>
                    </div>
                </a>
            </div> --}}

           
            {{-- <div class="col-md-4 mb-3">
                <a href="{{ route('adverts.index') }}">
                    <div class="card text-center" style="background-color: #f8f9fa; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <i class="fas fa-bullhorn fa-3x" style="color: #007bff;"></i>
                            <h5 class="mt-2" style="color: #333;">Adverts</h5>
                            <p style="color: #777;">Explore the latest ads and promotions.</p>
                        </div>
                    </div>
                </a>
            </div>

            
            <div class="col-md-4 mb-3">
                <a href="{{ route('subscribers.index') }}">
                    <div class="card text-center" style="background-color: #f8f9fa; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x" style="color: #007bff;"></i>
                            <h5 class="mt-2" style="color: #333;">Subscribers</h5>
                            <p style="color: #777;">Manage and view all your subscribers.</p>
                        </div>
                    </div> --}}
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
