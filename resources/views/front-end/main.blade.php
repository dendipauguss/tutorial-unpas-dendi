<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dendi Blog | {{ $title }}</title>
    <link rel="shortcut icon" href="/dps-icon.ico" type="image/x-icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" crossorigin="anonymous">
    {{-- Bootstrap Icons --}}
    <link href="{{ asset('css/font/bootstrap-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    @include('front-end.partials.navbar')

    <div class="container pt-4">
        @yield('container')
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</body>

</html>
