<?php

class AdminController extends BaseController {

// news
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
        $input = Input::all();

        $rules = array(
                'title' => 'required|unique:aac_news,title|min:4|max:255',
                'content' => 'required|unique:aac_news,content|min:10'
                );

        $validation = Validator::make($input, $rules);

      if ($validation->fails()) {

         return Redirect::back()->withErrors($validation);

      } else {

        $news = new News;
        $news->title = $input['title'];
        $news->content = $input['content'];
        $news->save();


		return Redirect::to('news/index');
        }
	}

    public function news_delete($newsId)
    {

       $news = News::findOrFail($newsId);
       $news->delete();

       return Redirect::back()->with('success', 'Your news post has been deleted.');
    }

//dash
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


         //players

         public function admin_players()
         {

            if (Auth::check()) {

            $roles = Auth::user()->type;
            $players = Player::all();

            if ($roles == '5')
             {
               return View::make('admin.players')
                        ->with('roles', $roles)
                        ->with('players', $players);
             } else {

               return Redirect::to('news/index')->with('danger', 'You either have insufficient permissions to access this page or your user credentials are not refreshed.');
                    }
             }
         }

         public function ban_players()
         {
            // in progress
            if (Auth::check()) {

            $roles = Auth::user()->type;
            $players = Player::all();

            if ($roles == '5')
             {
            return View::make('admin.ban');
            } else {

               return Redirect::to('news/index')->with('danger', 'You either have insufficient permissions to access this page or your user credentials are not refreshed.');
                    }
             }
         }

         public function violations()
         {
            // in progress
            if (Auth::check()) {

            $roles = Auth::user()->type;
            $players = Player::all();

            if ($roles == '5')
             {
            return View::make('admin.violations');
            } else {

               return Redirect::to('news/index')->with('danger', 'You either have insufficient permissions to access this page or your user credentials are not refreshed.');
                    }
             }
         }

         public function namelock_players()
         {
                        // in progress
            if (Auth::check()) {

            $roles = Auth::user()->type;
            $players = Player::all();

            if ($roles == '5')
             {
            return View::make('admin.namelock');
            } else {

               return Redirect::to('news/index')->with('danger', 'You either have insufficient permissions to access this page or your user credentials are not refreshed.');
                    }
             }
         }

}