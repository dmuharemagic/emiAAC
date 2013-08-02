<?php

class AuthController extends BaseController {


   //This code sucks, you know it and I know it.  
  //Move on and call me an idiot later.
  

    protected $layout = 'base';



	// get_login

    public function get_login()
    {

        if (Auth::check())
        {

            return Redirect::to('news/index')->with('danger', 'You are already logged in!');
        }

        return View::make('aac.login');
    }






      // post_login

    public function post_login()
    {
        
        $userdata = array(
            'name' => Input::get('acc'),
            'password' => Input::get('password')
        );

        
        $rules = array(
            'name'  => 'required|min:4|max:32',
            'password'  => 'required|min:4|max:255'
        );



           // Validate
        $validator = Validator::make($userdata, $rules);
        if ($validator->passes())
        {

            if (Auth::attempt($userdata))
            {

                return Redirect::to('news/index')->with('success', 'You have successfully logged in!');
            }
            else
            {
                
                return Redirect::to('login')->withErrors(array('password' => '<strong>Access Denied!</strong> Please provide valid authorization.'))->withInput(Input::except('password'));
            }
        }


        return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
    }






     // get_register

    public function get_register()
    {
       return View::make('aac.register');
    }




   
    public function post_register()
    {
            $input = Input::all();

            $rules = array(
                'name' => 'required|unique:accounts,name|min:4|AlphaNum',
                'email' => 'required|unique:accounts,email|email',
                'password' => 'required|min:4|AlphaNum',
                'password_confirm' => 'same:password'
            	);

      $validation = Validator::make($input, $rules);


      if ($validation->fails()) {

         return Redirect::to('register')->withErrors($validation);

      } else {

          $password = $input['password'];
          $password = Hash::make($password);
          
      	  $user = new User;
      	  $user->name = $input['name'];
      	  $user->email = $input['email'];
      	  $user->password = $password;
      	  $user->save();

      	   return Redirect::to('login')->with('succ', 'You have created your account successfully! You can now proceed and log in.');
      }

    }



     // get_logout

    public function get_logout()
    {

        Auth::logout();
        return Redirect::to('/')->with('success', 'You have successfully logged out!');

    }



    // create_character

    public function post_character()
    {
        $input = Input::all();

        $rules = array(
          'character_name' => 'required|unique:players,name|min:4|max:255|alpha',
          'sex' => 'required',
          'vocation' => 'required'
          );

        $validation = Validator::make($input, $rules);

        if ($validation->fails()) {

          return Redirect::to('account/managment/create_character')->withErrors($validation);
          
        } else {

             $player = new Player();
             $player->account_id = Auth::user()->id;
             $player->name = $input['character_name'];
             $player->sex = $input['sex'];
             $player->vocation = $input['vocation'];
             $player->town_id = $input['town'];

             // this is located mostly in the config.lua

             if(Input::has('town')) {

              // town 1 - just a test, you can add whatever position you want
                if(Input::get('town') == 1) {
                   $player->posx = '95';
                   $player->posy = '117';
                   $player->posz = '7'; 
                                            }

              // town 2 - just a test, you can add whatever position you want
                elseif(Input::get('town') == 2) {
                   $player->posx = '1000';
                   $player->posy = '1000';
                   $player->posz = '7';
                                                }
}
             $player->save();

          return Redirect::to('account/managment')->with('success', 'Your character has been created.');
        }
    }

    // delete_character

    public function delete_character($playerId)
    {

       $player = Player::findOrFail($playerId);
       $player->delete();

       return Redirect::back()->with('success', 'Your character has been deleted.');
    }

    // change_credentials

    public function change_credentials()
    {
      return View::make('aac.change_credentials');
    }
}