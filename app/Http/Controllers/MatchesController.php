<?php

namespace App\Http\Controllers;

use App\Match;

class MatchesController extends Controller
{
    public function index(){
        $matches = Match::whereNull('result_1')->get();;
        $results = Match::whereNotNull('result_1')->get();;

        return view('front.matches', compact('matches', 'results'));
    }
}
