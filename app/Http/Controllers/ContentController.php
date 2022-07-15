<?php


namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Tournament;

class ContentController extends Controller
{
    public function index(){

        $gamesCat = Game::all();

        foreach ($gamesCat as $game){
            $tournament[$game->id] = [
                'img' => $game->img,
                'name' => $game->name,
                'tournament' => Tournament::getTournamentCategoryGame($game->id),
            ];
        }
//        echo "<pre>";
//        print_r($tournament);
//        echo "</pre>";
//        die();
//        dd($tournament);
        return view('index', ['data' => $tournament]);
    }

    public function tournaments() {
        $game = Game::all();

        return view('tournaments', ['data' => $game]);
    }

    public function getPage($path='/') {
        dd($path);
    }
}
