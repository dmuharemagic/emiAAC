<?php

class News extends Eloquent {

    protected $table = 'aac_news';

    protected $fillable = array('author', 'title', 'content');
    public $timestamps = true;
}