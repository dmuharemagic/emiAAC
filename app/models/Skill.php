<?php

class Skill extends Eloquent {

protected $table = 'player_skills';

    public function players() {
        return $this->belongsToMany('Player', 'player_skills', 'player_id', 'skillid')
                    ->withPivot('value', 'count');
    }

}