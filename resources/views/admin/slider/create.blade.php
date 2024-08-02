@extends('admin.partials.main')

@section('container')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="form-group">
                    <form action="{{ route('slider-post') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="m-2">Judul</label>
                        <input type="text" name="title" class="form-control m-2 @error('title') is-invalid @enderror"
                            placeholder="Judul" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label class="m-2">Gambar</label>
                        <input type="file" id="gambar"
                            class="form-control m-2
                            @error('gambar') is-invalid @enderror"
                            name="gambar">
                        @error('gambar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <img src="" id="preview" class="mt-2" width="200px" alt="" srcset=""><br>
                        <button type="submit" class="btn btn-danger mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection