@extends('admin.partials.main')
    @section('container')
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-11">
                    <div class="form-group">
                        <form action="{{ route('gallery-post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="m-2">Judul</label>
                            <input type="text" name="title"
                                class="form-control m-2 @error('title') is-invalid @enderror" placeholder="Judul"
                                value="{{ old('title') }}">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="m-2">Keterangan</label>
                            <Textarea name="description" cols="20" rows="4"
                                class="form-control m-2 @error('description') is-invalid @enderror summernote" placeholder="Keterangan">{{ old('description') }}</Textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="m-2">Cover Image</label>
                            <input type="file" id="input-file-now-custom-3"
                                class="form-control m-2 @error('cover') is-invalid @enderror" name="cover">
                            @error('cover')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label class="m-2">Images</label>
                            <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]"
                                multiple>

                            <button type="submit" class="btn btn-danger mt-3 ">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
