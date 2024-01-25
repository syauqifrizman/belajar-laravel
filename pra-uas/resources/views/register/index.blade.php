@extends('layouts.main')

@section('content')
    <div class="mb-6">
        <h1>Register Account</h1>
        <form action="{{ route('createAccount') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" class="@error('email') border-danger @enderror" value="{{ old('email') }}">

                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" class="@error('username') border-danger @enderror" value="{{ old('username') }}">

                @error('username')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" class="@error('name') border-danger @enderror" value="{{ old('name') }}">

                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password">Pasword: </label>
                <input type="password" name="password" id="password" class="@error('password') border-danger @enderror" value="{{ old('password') }}">

                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="password_confirmation">Confirm Pasword: </label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="@error('password_confirmation') border-danger @enderror" value="{{ old('password_confirmation') }}">

                @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button class="btn-primary" type="submit">Register</button>
        </form>
        <small>
            Have already account? <a href="{{ route('loginPage') }}">Login here!</a>
        </small>
    </div>
@endsection
