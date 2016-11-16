<?php



namespace Classes;

class Student implements Person{
    use DigitalUser;
    
    private $name;
    private $age;
    private $courses;
    
    
    
    
    public function getCourses(){
        return $this->courses;
    }
    
    public function addCourse(Course $course){
        return array_push($this->courses,$course);
    }
    
    public function resetCourses(){
        //$this->courses=array();
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
        $stringA="";
        foreach($this->courses as $course){
            $stringA.="<br>".$course;
            
    }
        return "Nome: $this->name Età:$this->age Corso di appartenenza: $stringA";
    }
}
