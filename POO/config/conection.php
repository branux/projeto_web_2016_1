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
class conection
{//Depois tornar classe singleton

    private $db_host = 'l ocalhost'; // servidor
    private $db_user = 'root'; // usuario do banco
    private $db_pass = ''; // senha do usuario do banco
    private $db_name = 'webapp_db'; // nome do banco
    private $con;

    public function __construct()
    {
        //Levantar exceção
        if (!$this->connect()) {
            
        }
    }

    private function connect()
    { // estabelece conexao
        if ($this->isNotConnected()) {
            $myconn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            if ($myconn) {
                $seldb = mysqli_select_db($myconn, $this->db_name);
                if ($seldb) {
                    $this->con = $myconn;
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

    public function disconnect()
    { // fecha conexao
        if ($this->isConnected()) {
            if (mysqli_close($this->getConection())) {
                $this->con = null;
                return true;
            } else {
                return false;
            }
        }
    }

    public function getConection()
    {
        if ($this->isNotConnected()) {
            if ($this->connect()) {
                return $this->con;
            }
        }
    }

    public function isConnected()
    {
        return $this->con;
    }

    public function isNotConnected()
    {
        return !$this->isConnected();
    }
}
