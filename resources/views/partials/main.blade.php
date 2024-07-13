<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('partials.head')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @include('partials.navbar')
    @include('partials.sidebar')
    <div class="content-wrapper">

    <div class="container mt-3">
        @yield('container')
    </div>
    </div>
    {{-- @include('partials.footer') --}}
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>

    {{-- bootstrap --}}
    <script src="{{ asset('plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
