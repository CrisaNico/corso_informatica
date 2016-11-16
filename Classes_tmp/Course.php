<?php
namespace Classes;

class Course{
    
    private $name;
    private $hours;
    
    public function __construct($name,$hours) {
        $this->name=$name;
        $this->hours=$hours;
    }
    
    public function __toString() {
        return "Corso: $this->name Orario: $this->hours";
    }
    
}