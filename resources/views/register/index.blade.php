@extends('front-end.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <main class="form-registration w-100 m-auto bg-dark text-white rounded-5 gradient-custom">
                <img class="d-flex rounded-circle mb-4 my-auto mx-auto" src="img/dps-logo.png" alt="" width="55"
                    height="55">
                <h1 class="h3 mb-3 fw-normal text-center">Account Registration</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating text-dark">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="John Doe" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback alert alert-danger mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating text-dark">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="johndoe" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback alert alert-danger mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating text-dark">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="johndoe@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback alert alert-danger mb-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating text-dark">
                        <input type="password" name="password"
                            class="form-control rounded-bottom mb-1 @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required value="{{ old('password') }}">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback alert alert-danger mb-1 mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-outline-light w-100 py-2 mt-2" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already Registered ? <a href="/login"
                        class="text-info">Login</a></small>
            </main>
        </div>
    </div>
@endsection
