@extends('front-end.main')

@section('container')
    <div class="row justify-content-center text-center">
        <div class="col-md-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginFail'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginFail') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin w-100 m-auto bg-dark text-white rounded-5 gradient-custom">
                <img class="mb-4 rounded-circle" src="img/dps-logo.png" alt="" width="55" height="55">
                <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating text-dark">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="johndoe@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback alert alert-danger mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating text-dark">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback alert alert-danger mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-outline-light w-100 py-2" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Not Registered ? <a href="/register" class="text-info">Register
                        Now</a></small>
            </main>
        </div>
    </div>
@endsection
