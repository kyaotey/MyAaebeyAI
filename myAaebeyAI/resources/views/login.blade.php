@extends('layout')

@section('title', 'Login')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 400px;">
            <h3 class="text-center mb-3">Login to MyAaebey AI</h3>

            {{-- Display validation errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p class="mb-0">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            {{-- Display session messages --}}
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Login Form --}}
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email or Username</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Log In</button>
            </form>

            {{-- Forgot Password Link --}}
            <div class="text-center mt-3">
                <a href="#">I forgot my password</a>
            </div>

            {{-- Social Login Options --}}
            <div class="text-center mt-4">
                <h5>Login with another account</h5>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/1.png') }}" class="mx-2" alt="Social 1" width="40">
                    <img src="{{ asset('images/2.png') }}" class="mx-2" alt="Social 2" width="40">
                    <img src="{{ asset('images/3.png') }}" class="mx-2" alt="Social 3" width="40">
                    <img src="{{ asset('images/4.png') }}" class="mx-2" alt="Social 4" width="40">
                </div>
            </div>

            {{-- Sign Up Link --}}
            <div class="text-center mt-3">
                <a href="#">Not a member yet? <strong>Sign up free</strong></a>
            </div>
        </div>
    </div>
@endsection
