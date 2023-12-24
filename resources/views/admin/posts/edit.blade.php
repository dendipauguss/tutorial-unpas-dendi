@extends('admin.index')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Edit</h1>
    </div>
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data" class="mb-5">
        @method('patch')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                required autofocus value="{{ old('title', $post->title) }}">
            @error('title')
                <div class="invalid-feedback alert alert-danger mb-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug"
                required value="{{ old('slug', $post->slug) }}" hidden>
            @error('slug')
                <div class="invalid-feedback alert alert-danger mb-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label @error('category_id') is-invalid @enderror">Category</label>
            <select class="form-select" name="category_id" hidden>
                @foreach ($categories as $category)
                    @if (old('category_id', $post->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback alert alert-danger mb-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label @error('image') is-invalid @enderror">Post Image</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}" hidden>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" id="img-preview" class="img-fluid mb-1 col-sm-5 d-block">
            @else
                <img id="img-preview" class="img-fluid mb-1 col-sm-5 d-block">
            @endif
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback alert alert-danger mb-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Post Content</label>
            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input id="body" type="hidden" name="body" class="form-control"
                value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
        <a href="/dashboard/posts" class="btn btn-secondary">Cancel</a>
    </form>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/createSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(event) {
            event.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('#img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
