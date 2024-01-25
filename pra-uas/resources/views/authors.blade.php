@extends('layouts.main')

@section('content')
    <div>
        <h2>List Author</h2>
        @foreach ($users as $user)
            <ul>
                <li>
                    <a href="/about/{{ $user->username }}">{{ $user->name }}</a>
                </li>
            </ul>
        @endforeach
    </div>
@endsection
