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

            <a href="{{ route('create') }}" class="btn btn-outline-success mb-3 mt-3">Tambah Baru</a>

            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Cover</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $post->title }}</td>
                            <td><img src="cover/{{ $post->cover }}" class="img-responsive"
                                    style="max-height:200px; max-width:200px" alt="" srcset=""></td>
                            <td>
                                <div class="btn-group">
                                    {{-- <a href="{{ route('gallery-show', Crypt::encryptString($post->id)) }}"
                                        class="btn btn-outline-success">Show</a> --}}
                                    <a href="{{ route('gallery-edit', Crypt::encryptString($post->id)) }}"
                                        class="btn btn-outline-primary">Update</a>
                                    <a href="#" class="">
                                        <form action="{{ route('gallery-delete', $post->id) }}" method="post">
                                            <button class="btn btn-outline-danger"
                                                onclick="return confirm('Apakah anda yakin?');"
                                                type="submit">Delete</button>
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </a>
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
