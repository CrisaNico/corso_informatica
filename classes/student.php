<?php

require_once "person.php";
require_once "digitaluser.php";

class Student implements Person{
    use DigitalUser;
    
    private $name;
    private $age;
    private $courses = array();
    
    public function getCourses(){
        return $this->courses;
    }
    
    public function addCourse(Course $s){
        return array_push($this->courses,$s);
    }
    
    public function resetCourses(){
        
    }
    
    function getName() {
        return $this->name;
    }
    
    function setName($name) {
        $this->name=$name;
    }
    
    function getAge() {
        return $this->age;
    }
    
    function setAge($age) {
        $this->age=$age;
    }
    
    public function __construct($name,$age,$email,$courses=[]) {
        $this->name=$name;
        $this->age=$age;
        $this->email=$email;
        $this->courses=$courses;
    }
    
    public function __toString(){
        
    }
}
