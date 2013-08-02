<?php

class News extends Eloquent {

    protected $table = 'aac_news';

    protected $fillable = array('title', 'content');
    public $timestamps = true;

}