@extends('partials.mainnsummernote')

@section('content')
    <div class="container-fluid p-4 ">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <h3 class="text-center">{{ $post->title }}</h3>

                <div>
                    {!! $post->description !!}
                </div>


            </div>
        </div>
    </div>
@endsection
