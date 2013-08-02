<?php
class MainController extends BaseController {



    public function get_index()
    {
    	if (Auth::check())
{

        $roles = Auth::user()->type;

        return View::make('aac.index')
                ->with('newss', News::all())
                ->with('roles', $roles);
        
    
} else {

return View::make('aac.index')->with('newss', News::all());

}
}

    public function archive_index()
    {
    	return View::make('aac.news_archive');
    }

}