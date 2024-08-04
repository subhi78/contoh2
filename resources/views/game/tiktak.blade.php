<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tic-Tac-Toe</title>
    <link rel="stylesheet" href="{{ asset('css/tiktak.css') }}" />
</head>

<body>
    <div class="turn_container">
        <h3>Turn For</h3>
        <div class="turn_box align">X</div>
        <div class="turn_box align">O</div>
        <div class="bg"></div>
    </div>

    <div class="main_grid">
        <div class="box align">0</div>
        <div class="box align">1</div>
        <div class="box align">2</div>
        <div class="box align">3</div>
        <div class="box align">4</div>
        <div class="box align">5</div>
        <div class="box align">6</div>
        <div class="box align">7</div>
        <div class="box align">8</div>
    </div>
    <h1 id="results"></h1>
    <button id="play_again">Play Again</button>
    <script src="{{ asset('js/tiktak.js') }}"></script>
</body>

</html>
