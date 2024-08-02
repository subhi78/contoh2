@extends('admin.partials.main')

@section('container')
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3">
                <label for="">Cover</label>
                <form action="{{ route('artikel-deletecover', $artikel->id) }}" method="post">
                    <button class="btn text-danger"><i class="fas fa-trash-alt"></i></button>
                    @csrf
                    @method('delete')
                </form>
                <img src="/gambar-artikel/{{ $artikel->gambar }}" class="img-responsive border border-info p-1"
                    style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                <br>
            </div>


            <div class="col-lg-8">
                <div class="form-group">
                    <form action="{{ route('artikel-update', $artikel->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <label class="m-2">Judul</label>
                        <input type="text" name="title" class="form-control m-2 @error('title') is-invalid @enderror"
                            placeholder="judul" value="{{ old('title', $artikel->title) }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label class="m-2">Gambar</label>
                        <input type="file" id="" class="form-control m-2" name="gambar">
                        <label class="m-2">Keterangan</label>
                        <Textarea name="description" cols="20" rows="4"
                            class="form-control m-2 @error('description') is-invalid @enderror summernote" placeholder="keterangan">{{ $artikel->description }}</Textarea>
                        @error('desccription')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <button type="submit" class="btn btn-danger mt-3 ">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
