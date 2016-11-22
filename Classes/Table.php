<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Classes;

/**
 * Description of Table
 *
 * @author utente
 */
trait Table {
    
    private $conn = '';
    private $database = '';
    private $user = '';
    private $password = '';
    private $table = '';
    
    static function init($conn, $database, $user, $password, $table){
        $this->conn = $conn;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
        $this->table = $table;
    }
    
    static function loadFromDb($id){
        
        $istance = null;
        
        
        return $istance;
    }
}
