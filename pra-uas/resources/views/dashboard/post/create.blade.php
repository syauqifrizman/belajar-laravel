@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('createPost') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="@error('title') border-danger @enderror">

                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="@error('slug') border-danger @enderror">

                @error('slug')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="category">Category</label>
                <select name="category" id="category" class="@error('category') border-danger @enderror">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" class="@error('slug') border-danger @enderror"></textarea>

                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image Thumbnail Post</label>
                <input class="form-control" type="file" id="image" name="image" class="@error('image') border-danger @enderror"></textarea>

                @error('image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
@endsection
