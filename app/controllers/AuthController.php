<?php

class AuthController extends BaseController {




	// get_login

    public function get_login()
    {

        if (Auth::check())
        {

            return Redirect::to('index')->with('success', 'You are already logged in!');
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
            'name'  => 'required|min:4',
            'password'  => 'required|min:4'
        );


        $validator = Validator::make($userdata, $rules);
        if ($validator->passes())
        {

            if (Auth::attempt($userdata))
            {

                return Redirect::to('index')->with('success', 'You have successfully logged in!');
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
                'name' => 'required|unique:accounts,name|min:4',
                'email' => 'required|unique:accounts,email|email',
                'password' => 'required|min:4'
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
}