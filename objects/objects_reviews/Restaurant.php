<?php

class Restaurant {

    private $name;  //access modifier could be public, private, or inherited.

    public function __construct($name) {
        $this->$name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName() {
        $this->name = $name;
    }
}