<?php

class AdminController extends BaseController {

    public function get_news()
    {
    	if (Auth::check()) {
    		$roles = Auth::user()->type;

            if ($roles == '5') {
    	return View::make('admin.news_managment')
    	    ->with('roles', $roles)
    	    ->with('newss', News::all());
    } 
  }
}

	public function create_news()
	{
		if (Auth::check()) {
			$roles = Auth::user()->type;

            if ($roles == '5') {
		return View::make('admin.create_news')->with('roles', $roles);
	}
  }
}

	public function post_create_news()
	{
		News::create(array(
                 'title' => Input::get('title'),
                 'content' => Input::get('content')
			));

		return Redirect::to('news/index');
	}

    public function news_delete($newsId)
    {

       $news = News::findOrFail($newsId);
       $news->delete();

       return Redirect::back()->with('success', 'Your news post has been deleted.');
    }

    	public function get_dash() {

    		if (Auth::check()) {

            $roles = Auth::user()->type;

            if ($roles == '5')
             {
               return View::make('admin.dash')->with('roles', $roles);
             } else {

	           return Redirect::to('news/index')->with('danger', 'You either have insufficient permissions to access this page or your user credentials are not refreshed.');
                    }
             }
         }

}