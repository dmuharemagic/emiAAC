<?php

class CharactersController extends BaseController
{
    public function all()
    {
        // show all characters
    }

    public function detail($name)
    {   
        
        $player = Player::where('name', '=', $name)->first();
        return View::make('aac.test')->with('player', $player);
    }

    public function search()
    {
        $name = Input::get('search-term');
        $searchResult = Player::where('name', '=', $name)->get();
        return View::make('aac.search')->with('searchResult', $searchResult);
    }
}