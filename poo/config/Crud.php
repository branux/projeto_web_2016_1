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

    private $table = "";
    private $con;

    function __construct($table) {
        $this->table = $table;
        $this->con = new conection();
        $this->con = $this->con->getConection();

        return $this->table;
    }

    public function select_db($where) {
        if ($where == NULL) {
            $sql = "SELECT * FROM $this->table";
        } else {
            $sql = "SELECT * FROM $this->table WHERE = $where";
        }
        $query = mysqli_query($this->con, $sql);
        if (!$result = mysqli_fetch_array($query)) {
            die("<center>Erro na Seleção de Dados " . '<br>Linha: ' . __LINE__
                    . "<br>" . mysqli_error() .
                    "<br> <a href='index.php'>Voltar ao Menu</a></center>");
        } else {
            return $result;
        }
    }

    public function insert_db($fields, $values) {
        $this->sql_insert = "INSERT INTO " . $this->table . " ($fields) VALUES ($values)";
        if (!$this->insert = mysqli_query($this->con, $this->sql_insert)) {
            
        } else {
            print "<script>location='index.php';</script>";
        }
    }

    public function update_db($fileds_values, $where = NULL) {
        if ($where) {
            $this->sql_update = "UPDATE  " . $this->table . " SET $$fileds_values WHERE $where";
        } else {
            $this->sql_update = "UPDATE  " . $this->table . " SET $$fileds_values";
        }

        if (!$this->update = mysqli_query($this->con, $this->sql_update)) {
            die("<center>Erro na atualização " . "<br>Linha: " . __LINE__ . "<br>" . mysqli_error($this->con) . "<br>
				<a href='index.php'>Voltar ao Menu</a></center>");
        } else {
            print "<center>Registro Atualizado com Sucesso!<br><a href='index.php'>Voltar ao Menu</a></center>";
        }
    }

    public function delete_db($where = NULL) {
        if ($where) {
            $this->sql_select = "SELECT * FROM " . $this->table . " WHERE $where";
            $this->sql_delete = "DELETE FROM " . $this->table . " WHERE $where";
        } else {
            $this->sql_select = "SELECT * FROM " . $this->table;
            $this->sql_delete = "DELETE FROM " . $this->table;
        }
        $sel = mysqli_query($this->con, $this->sql_sel);
        $regs = mysqli_num_rows($sel);

        if ($regs > 0) {
            if (!$this->delete = mysqli_query($this->con, $this->sql_delete)) {
                die("<center>Erro na exclusão " . '<br>Linha: ' . __LINE__ . "<br>" . mysqli_error($this->con) . "<br>
				<a href='index.php'>Voltar ao Menu</a></center>");
            } else {
                print "<center>Registro Excluído com Sucesso!<br><a href='index.php'>Voltar ao Menu</a></center>";
            }
        } else {
            print "<center>Registro Não encontrado!<br><a href='index.php'>Voltar ao Menu</a></center>";
        }
    }

    public static function get_Instance() {
        return new Crud();
    }

}
