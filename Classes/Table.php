<?php



namespace Classes;

use Configs\Database;

trait Table {
    
    private $conn = '';
    private $database = '';
    private $user = '';
    private $password = '';
    private $table = '';
    
    private $instance = null;
    
    /**
     * Initialize all paramerets required to connect database
     * 
     * @param type $conn
     * @param type $database
     * @param type $user
     * @param type $password
     * @param type $table
     */
    static function __construct($conn, $user, $password, $table){
        $this->conn = $conn;
        $this->user = $user;
        $this->password = $password;
        $this->table = $table;
    }
    
    function get($id){
        $this->instance = new \PDO ($this->conn, $this->user, $this->password);
        $stmt= $this->prepare("SELECT * FROM $this->table WHERE id = :id");
        $stmt->execute([":id"=>$id]);
    }
    
    abstract static function loadFromDb($id);
    
    abstract static function removeFromDb($id);
}
