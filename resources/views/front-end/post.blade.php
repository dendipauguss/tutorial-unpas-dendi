@extends('front-end.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">
                    {{ $post['title'] }}
                </h2>
                <p>
                    <i>By : <a href="/posts?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a>
                        in
                        <a href="/posts?category={{ $post->category->slug }}"
                            class="link-offset-2 link-underline link-underline-opacity-0 text-info">
                            {{ $post->category->name }}
                        </a>
                    </i>
                </p>
                @if ($post->image)
                    <div style="max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {{-- Get Data dengan escape (dapat mengeksekusi isi yang terdapat code khusus) --}}
                    {!! $post->body !!}
                </article>

                <!-- Get Data tanpa escape (hanya menampilkan isi) -->
                {{-- {{ $post->body }} --}}

                <a href="/posts" class="d-block mt-4 text-decoration-none">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
