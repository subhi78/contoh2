    @extends('admin.partials.main')
    @section('container')
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
    @endsection
