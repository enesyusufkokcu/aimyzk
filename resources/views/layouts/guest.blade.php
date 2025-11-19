<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Links -->

    <!-- Vite -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Builds -->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/app-c9d2402d.css') }}">
    <link rel="application/javascript" href="{{ asset('build/assets/app-f9f1eaaf.js') }}">
</head>

<body class="bg-[#f8f7fa] text-gray-900">

    <div class="mt-5">
        @yield('content')
    </div>

    {{-- JAVASCRIPT --}}
    @yield('javascript')
</body>

</html>
