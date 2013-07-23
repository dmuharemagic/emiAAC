<?php
class MainController extends BaseController {

    public function get_index()
    {
        return View::make('aac.index');
    }

}