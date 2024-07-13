
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap.min.css') }}">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Admin-lte -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- Jquery -->
    <script script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    {{-- datatables --}}
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.dataTables.min.css') }}">

    <title>Admin Humas</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    @include('partials.navbar')
    @include('partials.sidebar')
    <div class="content-wrapper">
        <div class="container-fluid">

            <a href="{{ route('slider-create') }}" class="btn btn-outline-success mb-3 mt-3">Tambah Baru</a>

            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($slider as $post)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><img src="gambar-slider/{{ $post->gambar }}" class="img-responsive"
                                    style="max-height:200px; max-width:200px" alt="" srcset=""></td>
                            <td>
                                <div class="">
                                        <form action="{{ route('slider-delete', $post->id) }}" method="post">
                                            <button class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin?');"
                                                type="submit">Delete</button>
                                            @csrf
                                            @method('delete')
                                        </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>


</body>

</html>
