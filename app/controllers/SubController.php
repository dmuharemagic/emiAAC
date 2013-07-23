<?php

class SubController extends BaseController {

    public function get_online()
    {
        return View::make('aac.online');
    }

    public function get_managment()
    {
    	return View::make('aac.managment');
    }

    public function get_character()
    {
    	return View::make('aac.create_character');
    }

}