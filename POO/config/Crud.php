<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Crud
 *
 * @author linsmar
 */
require_once 'conection.php';
class Crud {
   private $conn;
   function __construct() {
       $this->$conn = new conection();
   }

    //put your code here
    public function select_db($script) {
        
    }

    public function insert_db($script) {
        $this->conn->connect();
        
        
    }

    public function update_db($script){
        
    }

    public function delete_db($script) {
        
    }
    
    public static function get_Instance(){
        return new Crud();
    }

}
