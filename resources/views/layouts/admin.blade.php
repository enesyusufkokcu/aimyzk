<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <title>{{ env('APP_NAME') }} - Admin</title>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <!-- Links -->

    <!-- Vite -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Builds -->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/app-c9d2402d.css') }}">
    <link rel="application/javascript" href="{{ asset('build/assets/app-f9f1eaaf.js') }}">
</head>

<body class="min-h-screen bg-[#f8f7fa] text-gray-900">
    @include('components.admin.sidebar')
    <div class="flex p-5">
        <main class="w-full pl-0 md:pl-64">
            @include('components.admin.header')

            <div class="mt-5">
                @yield('breadcumb')
                <div class="mt-5">
                    @include('components.admin.validate-error')
                </div>
                @if (View::hasSection('action-button'))
                    <div class="w-full pt-5">
                        @yield('action-button')
                    </div>
                @endif
                <div class="mt-5">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    {{-- JAVASCRIPT --}}
    @yield('javascript')
    <script src="{{ asset('js/admin/sidebar.js') }}"></script>
    <script src="{{ asset('js/admin/header.js') }}"></script>
    <script src="{{ asset('js/admin/modal.js') }}"></script>
    <script src="{{ asset('js/admin/error.js') }}"></script>
    {{-- Vite JS --}}
    {{-- {{ module_vite('build-theme', 'resources/assets/js/app.js') }} --}}
</body>

</html>
