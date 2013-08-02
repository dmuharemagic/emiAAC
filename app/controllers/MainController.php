<?php
class MainController extends BaseController {

    public function get_index()
    {
        return View::make('aac.index');
    }

    public function archive_index()
    {
    	return View::make('aac.news_archive');
    }

}