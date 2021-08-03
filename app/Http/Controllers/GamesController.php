<?php

namespace App\Http\Controllers;

use App\Game;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('front.games', compact('games'));
    }
}
