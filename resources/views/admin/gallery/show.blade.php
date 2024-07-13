
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="">{{ $posts->title }}</h1>
    @if ($posts)
    <article class="my-2">
        {!! $posts->description !!}
    </article>

    <p>cover</p>
    <img src="/cover/{{ $posts->cover }}" class="img-responsive border border-info p-1"
    style="max-height: 100px; max-width: 100px;" alt="" srcset="">

    <p>gabar</p>
    @foreach ($posts->images as $img)
    <div class="">
        <img src="/images/{{ $img->image }}" class="img-responsive border border-info p-1"
            style="max-height: 100px; max-width: 100px;" alt="" srcset="">
    </div>
@endforeach
@else
    <p>salah</p>
@endif
</body>
</html>
