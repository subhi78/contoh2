<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summernote Text Editor CRUD and Image Upload in Laravel</title>

    @include('partials.head')
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="{{ asset('plugins/summernote/bootstrap.min.css') }}" rel="stylesheet">
    <script script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('plugins/summernote/bootstrap.min.js') }}"></script>

    <!-- include summernote css/js -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote.min.css') }}">
    <script src="{{ asset('plugins/summernote/summernote.min.js') }}"></script>

    <style>
        .note-editor .dropdown-toggle::after {
            all: unset;
        }

        .note-editor .note-dropdown-menu {
            box-sizing: content-box;
        }

        .note-editor .note-modal-footer {
            box-sizing: content-box;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @include('partials.navbar')
    @include('partials.sidebar')
    <div class="content-wrapper">

        <div class=" mt-3">
            @yield('content')
        </div>

    </div>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>


    {{-- bootstrap --}}
    {{-- <script src="{{ asset('plugins/bootstrap.min.js') }}"></script> --}}
    <script>
        $('#description').summernote({
            placeholder: 'Departemen Hubungan Masyarakat Universitas Ngudi Waluyo',
            tabsize: 2,
            height: 300
        });

        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>
