@extends('layouts.main')

@section('content')
    <div class="mb-6">
        @if (session()->has('success'))
            <div>
                <h3 class="bg-success text-light">{{ session('success') }}</h3>
            </div>
        @endif
        <h1>Login Account</h1>
        <form action="" method="POST">
            @csrf
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Pasword: </label>
                <input type="password" name="password" id="password">
            </div>
            <button class="btn-primary" type="submit">Login</button>
        </form>
        <small>
            Not registered? <a href="{{ route('registerPage') }}">Register here!</a>
        </small>
    </div>
@endsection
