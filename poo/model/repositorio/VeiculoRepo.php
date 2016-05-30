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
require_once '../../config/Crud.php';

class VeiculoRepo {

    private $crud;
    protected $id;
    private $table = "veiculo";

    public function __construct() {
        $this->crud = new Crud($this->table);
    }

    public function insert() {
        $fields = "tipo, modelo, ano, cor, placa, renavan, chassi";
        $values = "$this->tipo, "
                . "$this->modelo, "
                . "$this->ano, "
                . "'$this->cor', "
                . "'$this->placa', "
                . "'$this->renavan', "
                . "'$this->chassi'";

        $this->crud->insert_db("$fields", "$values");
    }

    public function update() {
        $set = "tipo = $this->tipo, "
                . "modelo = $this->modelo, "
                . "ano = $this->ano, "
                . "cor = '$this->cor', "
                . "placa = '$this->placa', "
                . "renavan = '$this->renavan', "
                . "chassi = '$this->chassi' ";
        $where = "id = $this->id";

        $this->crud->update_db("$set", "$where");
    }

    public function delete() {
        $where = "id = $this->id";

        $this->crud->delete_db("$where");
    }

    public function select() {
        $where = "id = $this->id";
        //Fazer mapeamento do objeto
        return $this->crud->select_db($where);
    }

    public function select_all() {
        //Fazer mapeamento dos objetos
        return $this->crud->select_db();
    }

}
