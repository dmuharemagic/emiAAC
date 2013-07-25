<?php

class SubController extends BaseController {

    public function get_online()
    {
        return View::make('aac.online');
    }

    public function get_managment()
    {
       $account = Auth::user();
       return View::make('aac.managment')->with('account',$account);
    }

    public function get_character()
    {
    	return View::make('aac.create_character');
    }


    public function players()
    {
       $account = Auth::user();
       return View::make('aac.test')->with('account',$account);
    }
}