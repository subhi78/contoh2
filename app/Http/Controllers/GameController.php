<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('game.index');
}
public function tiktak()
{
    return view('game.tiktak');
}
public function gkb(){

    return view('game.gkb');
}
}
