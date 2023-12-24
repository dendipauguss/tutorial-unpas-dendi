@extends('front-end.main')

@section('container')
    <h1 id="blog" class="rounded-5 text-start px-3 py-4 fs-3 bg-success-subtle bg-opacity-75">
        {{ $title }}
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>{{ $name }}</h3>
                <h5>{{ $email }}</h5>
                <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="rounded-5">
            </div>
        </div>
    </div>
@endsection
