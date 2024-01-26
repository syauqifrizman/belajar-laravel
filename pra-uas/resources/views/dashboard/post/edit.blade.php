@extends('layouts.main')

@section('content')

    @if (session()->has('success'))
        <div class="bg-success">
            <p class="text-light">{{ session('success') }}</p>
        </div>
    @endif

    <div>
        <form action="{{ route('editPost', ['post' => $post->slug]) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="@error('title') border-danger @enderror" value="{{ old('title', $post->title) }}">

                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="@error('slug') border-danger @enderror" value="{{ old('slug', $post->slug) }}">

                @error('slug')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="category">Category</label>
                <select name="category" id="category" class="@error('category') border-danger @enderror">
                    @foreach ($categories as $category)
                        @if (old('category_id', $post->category->id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>

                @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="@error('slug') border-danger @enderror">{{ old('body', $post->body) }}</textarea>

                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image Thumbnail Post</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
