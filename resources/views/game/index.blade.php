<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="conatiner-fluid">
        <div class="text-center">
            <h1>Game</h1>
        </div>
        <div class="row text-center mt-5">
            <div class="col">
                <a href="{{ route('tiktak') }}">
                    <img src="{{ asset('img/tiktak.png') }}" alt="tiktak" width="100">
                    <br>
                </a>
                <h5>Tik-Tak</h5>
            </div>
            <div class="col">
                <a href="{{ route('gkb') }}">
                    <img src="{{ asset('img/gkb.png') }}" alt="gkb" width="100">
                </a>
                <h5>Gunting Kertas Batu</h5>
            </div>
            <div class="col">3
            </div>
        </div>
    </div>
</body>

</html>
