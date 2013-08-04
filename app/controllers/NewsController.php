<?php

class NewsController extends BaseController {

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

public function index()
{

 return View::make('admin.news_managment')->with('newss', $this->news->all());
}

public function create()
{

  return View::make('admin.create_news');
}

public function store()
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

public function delete($id)
{
 $news = $this->news->findOrFail($id);
 $news->delete();
 return Redirect::back()->with('success', 'Your news post has been deleted.');
}

/** ------------------------------------------
 *  Newsticker Functions
 *  ------------------------------------------
 */


}



