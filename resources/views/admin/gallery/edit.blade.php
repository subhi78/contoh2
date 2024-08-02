@extends('admin.partials.main')

@section('container')

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3">
                <label for="">Cover</label>
                <form action="{{ route('gallery-deletecover', $posts->id) }}" method="post">
                    <button class="btn text-danger"><i class="fas fa-trash-alt"></i></button>
                    @csrf
                    @method('delete')
                </form>
                <img src="/cover/{{ $posts->cover }}" class="img-responsive border border-info p-1"
                    style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                <br>

                @if (count($posts->images) > 0)
                    <label for="">Images</label>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        @foreach ($posts->images as $img)
                            <div class="">
                                <form action="{{ route('gallery-deleteimage', $img->id) }}" method="post">
                                    <button class="btn text-danger"><i class="fas fa-trash-alt"></i></button>
                                    @csrf
                                    @method('delete')
                                </form>
                                <img src="/images/{{ $img->image }}" class="img-responsive border border-info p-1"
                                    style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                            </div>
                        @endforeach
                @endif
            </div>

        </div>


        <div class="col-lg-8">
            <div class="form-group">
                <form action="{{ route('gallery-update', $posts->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label class="m-2">Judul</label>
                    <input type="text" name="title" class="form-control m-2 @error('title') is-invalid @enderror"
                        placeholder="judul" value="{{ old('title', $posts->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label class="m-2">Keterangan</label>
                    <Textarea name="description" cols="20" rows="4"
                        class="form-control m-2 @error('description') is-invalid @enderror summernote" placeholder="keterangan">{{ $posts->description }}</Textarea>
                    @error('desccription')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label class="m-2">Cover</label>
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                    <label class="m-2">Images</label>
                    <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                    <button type="submit" class="btn btn-danger mt-3 ">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
