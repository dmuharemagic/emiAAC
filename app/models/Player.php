<?php

class Player extends Eloquent {


    protected $table = 'players';

    protected $fillable = array('char_name', 'sex');
    public $timestamps = true;

     public function user() {
        return $this->belongsTo('User');
    }
}