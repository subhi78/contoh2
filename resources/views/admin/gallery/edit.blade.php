<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Humas</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('plugins/bootstrap.min.css') }}">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Admin-lte -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- Jquery -->
    <script script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>


    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }

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
                    <form action="{{ route('gallery-update', $posts->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <label class="m-2">Judul</label>
                        <input type="text" name="title"
                            class="form-control m-2 @error('title') is-invalid @enderror" placeholder="judul"
                            value="{{ old('title', $posts->title) }}">
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
                        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]"
                            multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    </div>

    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
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

</body>

</html>
