

@extends('layouts.auth_app')

@section('title')
    Register
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Register</h4></div>

        <div class="card-body pt-1">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- Name -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Full Name:</label><span class="text-danger">*</span>
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                   name="name" placeholder="Enter Full Name" value="{{ old('name') }}" required autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Email:</label><span class="text-danger">*</span>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                   name="email" placeholder="Enter Email Address" value="{{ old('email') }}" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password">Password:</label><span class="text-danger">*</span>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                   name="password" placeholder="Set Account Password" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password:</label><span class="text-danger">*</span>
                            <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" 
                                   name="password_confirmation" placeholder="Confirm Account Password" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        </div>
                    </div>

                     <!-- Remember Me Checkbox (Optional for Register Form) -->
                     <div class="col-md-12">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember_me" name="remember_me">
                                <label class="custom-control-label" for="remember_me">Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Register
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-5 text-muted text-center">
        Already have an account? <a href="{{ route('login') }}">Sign In</a>
    </div>
@endsection
