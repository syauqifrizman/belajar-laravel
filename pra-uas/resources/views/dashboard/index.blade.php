@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="bg-success">
            <p class="text-light">{{ session('success') }}</p>
        </div>
    @endif

    <div>
        <h2>My Post</h2>
        <div>
            <form action="{{ route('getMyPost') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div>
        <a class="btn btn-info text-light" href="{{ route('createPostPage') }}">Create New Post</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="{{ route('getDashboardPost', ['post' => $post->slug]) }}">Detail</a>
                            <a href="{{ route('editPostPage', ['post' => $post->slug]) }}">Edit</a>
                            <form action="{{ route('deletePost', ['post' => $post->slug]) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
