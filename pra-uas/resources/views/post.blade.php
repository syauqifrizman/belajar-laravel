@extends('layouts.main')

@section('content')
    <div class="bg-body-secondary">
        <h2>
            {{ $post["title"] }}
        </h2>
        <h5>
            Author: {{ $post["author"] }}
        </h5>
        <p>
            {{ $post["body"] }}
        </p>
    </div>

    <div>
        <button class="btn-primary">
            <a href="/blog">Back to blog</a>
        </button>
    </div>
@endsection
