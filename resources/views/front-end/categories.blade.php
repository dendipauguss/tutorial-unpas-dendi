@extends('front-end.main')

@section('container')
    <div class="container">
        <h1 id="blog" class="rounded-5 text-start px-3 py-4 fs-3 bg-success-subtle bg-opacity-75">
            {{ $title }}
        </h1>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img-top"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill bg-dark p-3 bg-opacity-75">{{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
