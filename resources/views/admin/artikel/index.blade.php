@extends('admin.partials.main')

@section('container')
    <div class="container-fluid">

        <a href="{{ route('artikel-create') }}" class="btn btn-outline-success mb-3 mt-3">Tambah Baru</a>

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


                @foreach ($artikel as $post)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $post->title }}</td>
                        <td><img src="gambar-artikel/{{ $post->gambar }}" class="img-responsive"
                                style="max-height:200px; max-width:200px" alt="" srcset=""></td>
                        <td>
                            <div class="btn-group">
                                {{-- <a href="{{ route('artikel-show', Crypt::encryptString($post->id)) }}"
                                        class="btn btn-outline-success">Show</a> --}}
                                <a href="{{ route('artikel-edit', Crypt::encryptString($post->id)) }}"
                                    class="btn btn-outline-primary">Update</a>
                                <a href="#" class="">
                                    <form action="{{ route('artikel-delete', $post->id) }}" method="post">
                                        <button class="btn btn-outline-danger"
                                            onclick="return confirm('Apakah anda yakin?');" type="submit">Delete</button>
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
@endsection
