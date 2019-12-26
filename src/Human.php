<?php

class Human
{
    public $name;
    public $hobbies = [];

    public function __construct($name="", $hobbies= [])
    {
        $this->name =$name;
        $this->hobbies = $hobbies;
    }

    public function hasHobby(String $hobby) : bool
    {
        return in_array($hobby, $this->hobbies);
    }

    public function insertHobby(String $hobby)
    {
        $this-> hobbies[] = $hobby;
    }

    public function setName(String $name)
    {
        $this->name = $name;
    }
}