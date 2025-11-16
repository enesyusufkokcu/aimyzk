<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Links -->
    <link rel="stylesheet" href="https://use.typekit.net/uoq8cjv.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Vite -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Builds -->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/app-a34f444c.css') }}">
    <link rel="application/javascript" href="{{ asset('build/assets/app-f9f1eaaf.js') }}">
</head>

<body class="min-h-screen antialiased bg-gray-100">
    @include('components.header')
    @yield('content')
    @include('components.footer')
    @yield('javascript')
    <script src="{{ asset('js/general.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>
</body>

</html>
