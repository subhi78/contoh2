<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Humas</title>
    <link rel="shortcut icon" href="{{asset('assets/img/newlogopt.png')}}" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    @include('admin.partials.head')
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @include('admin.partials.navbar')
    @include('admin.partials.sidebar')
    <div class="content-wrapper">

        <div>
            @yield('container')
        </div>
    </div>
    {{-- @include('partials.footer') --}}
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>

    {{-- bootstrap --}}
    <script src="{{ asset('plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('plugins/datatables/dataTables.min.js') }}"></script>


    <script src="{{ asset('plugins/summernote/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('assets/js/previewimage.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 200,
                toolbar: [
                    ["style", ["bold", "italic", "underline", "clear"]],
                    ["fontname", ["fontname"]],
                    ["fontsize", ["fontsize"]],
                    ["color", ["color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["height", ["height"]],
                    ["insert", ["link", "picture", "video", "hr"]],

                ],
            });


        });
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>
