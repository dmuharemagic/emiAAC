<?php

class Player extends Eloquent {

    protected $table = 'players';
    protected $fillable = array('name', 'sex', 'town_id');
    public $timestamps = false;

}