<?php

class sprint
{
    public $name;
    public $duration; //total time
    public $stories = array(); //all tasks on project
    public $countdown; //time remaining
    public $doAddStory = false;

    public function __construct($name, $duration) {
        $this->name = $name ?? '';
        $this->duration =  $duration ?? 0;
    }

    public function add_story($args=[]) {
        //$this->doAddStory = true;
        $this->stories[] = new story($args);
    }

    public function startSprint($duration) {
        $this->countdown = $duration;
    }

    public function alertTime() {

    }

}