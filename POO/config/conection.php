<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author linsmar
 */
class conection {//Depois tornar classe singleton

    private $db_host = 'l ocalhost'; // servidor
    private $db_user = 'root'; // usuario do banco
    private $db_pass = ''; // senha do usuario do banco
    private $db_name = 'webapp_db'; // nome do banco
    private $con = false;

    public function connect() { // estabelece conexao
        if (!$this->con) {
            $myconn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            if ($myconn) {
                $seldb = mysqli_select_db($myconn, $this->db_name);
                if ($seldb) {
                    $this->con = true;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return true;
        }
    }

    public function disconnect() { // fecha conexao
        if ($this->con) {
            if (mysqli_close()) {
                $this->con = false;
                return true;
            } else {
                return false;
            }
        }
    }

}
