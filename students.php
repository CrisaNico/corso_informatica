<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register(function($class_name) {
    require_once $class_name.".php";  
});

use Classes\Student as Student;

try{
    $connessione =
            new PDO(
                    "mysql:dbname=corso_informatica;host=127.0.0.1",
                    "admin","admin");
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());

}

$connessione->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC);
$result = $connessione->query("SELECT * FROM student");

//echo json_encode($result->fetchAll());


$result = $connessione->prepare("SELECT * FROM student WHERE id = :id LIMIT 1");

$id = 1;
$result->execute(array(
    ":id" => $id
));

echo "Prova prepare()";
echo "<br>";
while($riga = $result->fetch()){
    echo "Nome Studente: " . $riga["name"];
    echo "<br>";
    echo "Età: " . $riga["age"];
}