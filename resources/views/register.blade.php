@extends('layouts.master')

@section('title','Register Page')

@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        @error('terms')
                <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group">
            <label>Username</label>
            <input class="form-control mt-2" type="text" name="name" placeholder="Username" value="{{ old('name') }}">
        </div>
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group mt-3">
            <label>Email Address</label>
            <input class="form-control mt-2" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        </div>
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group mt-3">
            <label>Password</label>
            <input class="form-control mt-2" type="password" name="password" placeholder="Password">
        </div>
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group mt-3">
            <label>Password</label>
            <input class="form-control mt-2" type="password" name="password_confirmation" placeholder="Confirm Password">
        </div>
        @error('password_confirmation')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <button class="btn btn-success w-100 mt-3" type="submit">REGISTER</button>

    </form>
    <div class="register-link mt-3 text-center">
        <p>
            Already have account?
            <a href="{{ route('auth#loginPage') }}">Sign In</a>
        </p>
    </div>
@endsection
