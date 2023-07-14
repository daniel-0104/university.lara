@extends('layouts.master')

@section('title','Login Page')

@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="form-group">
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

        <button class="btn btn-success text-white w-100 mt-4" type="submit">SIGN IN</button>

    </form>
    <div class="register-link mt-4 text-center">
        <p>
            Don't you have account?
            <a href="{{ route('auth#registerPage') }}">Sign Up Here</a>
        </p>
    </div>
@endsection
