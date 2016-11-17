<?php

namespace Classes;

class Teacher{

    private $name;
    private $age;
    private $course;

    public function __construct($name,$age,$email,$course=null) {
        $this->name=$name;
        $this->age=$age;
        $this->email=$email;
        $this->course=$course;
    }

    public function __toString() {
        return "Nome: $this->nome Età: $this->age Email: $this->email Corso: $this->course";
    }

    public function getCourse(){
        return $this->courses;
    }

    public function setCourse(Course $course){
        $this->course = $course;
    }

    public function getSchool(){

    }

    public function setSchool(School $stud){
        
    }


}