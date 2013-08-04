<?php

class AdminController extends BaseController {


    /**
     * News Repository
     *
     * @var News
     */
    protected $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

/** ------------------------------------------
 *  News Functions
 *  ------------------------------------------
 */

    public function get_news()
    {

    	return View::make('admin.news_managment')->with('newss', $this->news->all());
    }

    public function create_news()
    {

      return View::make('admin.create_news');
  }

  public function post_create_news()
  {
    $input = Input::all();

    $rules = array(
        'author' => 'required|min:4|max:255',
        'title' => 'required|unique:aac_news,title|min:4|max:255',
        'content' => 'required|unique:aac_news,content|min:10'
        );

    $validation = Validator::make($input, $rules);

    if ($validation->fails()) {

       return Redirect::back()->withErrors($validation);

   } else {

    News::create($input);
    return Redirect::to('news/index');
}
}

public function news_delete($newsId)
{
 $news = $this->news->findOrFail($newsId);
 $news->delete();
 return Redirect::back()->with('success', 'Your news post has been deleted.');
}


/** ------------------------------------------
 *  Dashboard Functions
 *  ------------------------------------------
 */

public function get_dash() 
{
 return View::make('admin.dash');
}


/** ------------------------------------------
 *  Player Functions
 *  ------------------------------------------
 */

public function admin_players()
{
            // in progress

    $roles = Auth::user()->type;
    $players = Player::all();
    return View::make('admin.players')->with('players', $players);             
}

public function ban_players()
{
            // in progress

    $players = Player::all();
    return View::make('admin.ban');           
}

public function violations()
{
            // in progress

    $players = Player::all();
    return View::make('admin.violations');
}

public function namelock_players()
{
            // in progress

    $players = Player::all();
    return View::make('admin.namelock');            
}

}