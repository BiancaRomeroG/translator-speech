<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Estilos personalizados --}}

    <!-- Development css (used in all pages) -->
    {{--     <link rel="stylesheet" id="stylesheet" href="{{ asset('src/css/style.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css'/* , 'resources/js/app.js' */])
    <!-- Production css (used in all pages) -->
    <link rel="stylesheet" id="stylesheet" href="{{ asset('src/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('src/css/customizer.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('/src/img/favicon.png') }}">

    {{-- Sweet Alert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="{{asset('css/modals-rigth.css')}}">

    {{-- Script y Css Personalizados --}}
    @section('script-css')
    @show

    @livewireStyles
    {{-- <style type="text/css">
        body {
            overflow:hidden;
        }
        </style> --}}
</head>

<body class="overflow-y-auto scrollbars show">
    @livewireScripts()

    <div x-data="{ open: false }" class="overflow-x-hidden bg-gray-100">
        <div class="flex flex-col min-h-screen transition-all duration-500 ease-in-out">
            <x-navbar_dashboard.navbar></x-navbar_dashboard.navbar>
            {{ $slot }}

        </div>
    </div>
    <div id="contact" class="relative bg-white">
    <x-guest.footer></x-guest.footer>
    </div>
    <!--start::Global javascript (used in all pages)-->
    <script src="{{ asset('vendors/alpinejs/dist/cdn.min.js') }}"></script><!-- core js -->
    <script src="{{ asset('vendors/chart.js/dist/chart.min.js') }}"></script><!-- charts -->
    <script src="{{ asset('vendors/flatpickr/dist/flatpickr.min.js') }}"></script><!-- input date -->
    <script src="{{ asset('vendors/flatpickr/dist/plugins/rangePlugin.js') }}"></script><!-- input range date -->
    <script src="{{ asset('vendors/@yaireo/tagify/dist/tagify.min.js') }}"></script><!-- input tags -->
    <script src="{{ asset('vendors/pristinejs/dist/pristine.min.js') }}"></script><!-- form validation -->
    <script src="{{ asset('vendors/simple-datatables/dist/umd/simple-datatables.js') }}"></script>
    <!--sort table-->
    <script src="{{ asset('vendors/glightbox/dist/js/glightbox.min.js') }}"></script><!-- lightbox image -->
    <script src="{{ asset('vendors/flickity/dist/flickity.pkgd.min.js') }}"></script><!-- slider -->
    <!--end::Global javascript (used in all pages)-->



    <!-- Minify Global javascript (for production purpose) -->
    {{-- <script src="{{ asset('dist/js/scripts.js') }}"></script> --}}

    <!--start::Demo javascript ( initialize global javascript )-->
    <script src="{{ asset('src/js/demo.js') }}"></script>

    <!--start::Call vendor ( initialize vendor javascript )-->
    <script src="{{ asset('src/js/vendor.js') }}"></script>

    <!--start::Customizer js ( Only for demo purpose )-->
    <script src="{{ asset('src/js/customizer.js') }}"></script>
    
    <script src="{{ asset('js/toastr/toastr.min.js') }}"></script>
    
</body>

</html>

