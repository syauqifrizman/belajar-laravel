@extends('layouts.main')

@section('content')
    <div class="mb-6">
        @if (session()->has('success'))
            <div>
                <h3 class="bg-success text-light">{{ session('success') }}</h3>
            </div>
        @endif
        @if (session()->has('fail'))
            <div>
                <h3 class="bg-danger text-light">{{ session('fail') }}</h3>
            </div>
        @endif
        <h1>Login Account</h1>
        <form action="{{ route('loginAccount') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" class="@error('email') border-danger @enderror" value="{{ old('email') }}">

                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" class="@error('password') border-danger @enderror" value="{{ old('password') }}">

                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button class="btn-primary" type="submit">Login</button>
        </form>
        <small>
            Not registered? <a href="{{ route('registerPage') }}">Register here!</a>
        </small>
    </div>
@endsection
