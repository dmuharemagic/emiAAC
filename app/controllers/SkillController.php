<?php

class SkillController extends BaseController {

    public function index()
    {
        $skills = Skill::with('players')->get();

        return View::make('aac.test', array('skills' => $skills));
    }

}