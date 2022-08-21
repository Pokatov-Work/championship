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
        $page = Game::where('name', $path)->first();

        $pageData = Game::find($page->id)->tournaments;
//dd($pageData);
        return view('detail', [
            'page' => $page,
            'data' => $pageData
            ]);
    }
}
