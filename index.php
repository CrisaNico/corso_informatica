<?php



error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function($class_name) {
    require_once $class_name.".php";  
});

use Classes\Student as Student;
use Classes\Course as Course;
use Classes\Person as Person;
use Classes\DigitalUser as DigitalUser;


$student1 = new Student("Nico", "22", "nico_crisa@outlook.com");

echo $student1;


echo "<br>";
echo "<br>";
echo "<br>";

$Corso1 = new Course("Informatica", "850");

$student1->addCourse($Corso1);
echo $student1;
