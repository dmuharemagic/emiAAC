<?php

class SubController extends BaseController {

    public function get_online()
    {
        return View::make('aac.online');
    }

}