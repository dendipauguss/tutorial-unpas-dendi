@extends('front-end.main')

@section('container')
    <h1 id="blog" class="rounded-5 text-center px-3 py-4 fs-3 bg-success-subtle bg-opacity-75 mb-3">
        {{ $title }}
    </h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form class="d-flex" role="search" action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input class="form-control me-2" type="search" placeholder="Search" name="cari"
                        value="{{ request('cari') }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="card-img-top">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                    alt="{{ $posts[0]->category->name }}" class="card-img-top">
            @endif
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                <p>
                    <small class="text-body-secondary">
                        <i>By : <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                                {{ $posts[0]->author->name }}
                            </a> in
                            <a href="/posts?category={{ $posts[0]->category->slug }}"
                                class="link-offset-2 link-underline link-underline-opacity-0 text-info">
                                {{ $posts[0]->category->name }}
                            </a> {{ $posts[0]->created_at->diffForHumans() }}
                        </i>
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn-primary">Read more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute bg-dark px-3 py-2" style="--bs-bg-opacity: .5;">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-light">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <div style="max-height: 400px; overflow:hidden;">
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                                        alt="{{ $post->category->name }}">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small class="text-body-secondary">
                                        <i>By : <a href="/posts?author={{ $post->author->username }}"
                                                class="text-decoration-none">
                                                {{ $post->author->name }}
                                            </a> {{ $post->created_at->diffForHumans() }}
                                        </i>
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->slug }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-5">No post found</p>
    @endif
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection
