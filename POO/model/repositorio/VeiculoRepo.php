<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of repository
 *
 * @author linsmar
 */
require_once 'config/Crud.php';
require_once 'Repositorio.php';

class VeiculoRepo implements Repositorio {

    private $crud;
    protected $id;

    public function delete() {
        $sql = "DELETE FROM veiculo WHERE id= $this->id";
    }

    public function select($id) {
        $sql = "SELECT * FROM veiculo WHERE id = $id";
    }

    public function select_all() {
        $sql = "SELECT * FROM veiculo";
    }

    public function insert() {
        //Criar SQL 
        $sql = "INSERT INTO veiculo (placa) VALUES ('$this->placa')";
        $this->id = $this->crud->insert_db($sql);
    }

    public function update() {
        $sql = "UPDATE veiculo SET tipo = $this->tipo, "
                . "modelo = $this->modelo, "
                . "ano = $this->ano, "
                . "cor = '$this->cor', "
                . "placa = '$this->placa', "
                . "renavan = '$this->renavan', "
                . "chassi = '$this->chassi' "
                . "WHERE id = $this->id";

        $this->crud->update_db($sql);
    }

    function __construct() {
        $this->crud = Crud::get_Instance();
    }

}
