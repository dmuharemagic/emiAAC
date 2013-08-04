<?php

class AdminController extends BaseController {

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