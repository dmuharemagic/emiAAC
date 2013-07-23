<?php

class Player extends Eloquent {


    protected $table = 'players';

    protected $fillable = array('char_name', 'sex');
    public $timestamps = false;

     public function user() {
        return $this->belongsTo('User');
    }
}