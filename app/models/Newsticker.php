<?php

class Newsticker extends Eloquent {

    protected $table = 'aac_newsticker';

    protected $fillable = array('label', 'content');
    public $timestamps = true;
}