<?php

class CharactersController extends BaseController
{
    public function all()
    {
        // show all characters
    }

    public function detail($name)
    {   
        
        // find character by name & show detail for example
        return View::make('aac.test');
    }

    public function search()
    {
        $name = Input::get('search-term');
        $searchResult = Player::where('name', '=', $name)->get();
        return View::make('aac.test')->with('searchResult', $searchResult);
    }
}