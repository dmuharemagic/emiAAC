<?php

class SubController extends BaseController {

    public function get_online()
    {
        $results = Player::where('online', 1)->get();
        return View::make('aac.online')->with('results', $results);
    }

    public function get_managment()
    {
       $account = Auth::user();
       return View::make('aac.managment')->with('account', $account);
    }

    public function get_character()
    {
    	return View::make('aac.create_character');
    }

    public function highscores()
    {
        $players = Player::orderBy('experience','desc')->get();
        return View::make('aac.highscores')->with('players', $players);
    }

    public function recover_password()
    {
        return View::make('aac.password_recover');
    }
}
