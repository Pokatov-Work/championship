<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Tournament;

class ContentController extends Controller
{
    public function index(){

        $gamesCat = Game::all();

        foreach ($gamesCat as $game){
            $tournaments[$game->id] = [
                'img' => $game->img,
                'name' => $game->name,
                'tournamentList' => Tournament::getTournamentCategoryGame($game->id),
            ];
        }

        return view('index', ['data' => $tournaments]);
    }

    public function tournaments() {
        $game = Game::all();

        return view('tournaments', ['data' => $game]);
    }

    public function getPage($path='/') {
//        dd($path);
        return view('dota-2');
    }
}
