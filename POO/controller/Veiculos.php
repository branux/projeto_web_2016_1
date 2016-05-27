<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Veiculo
 *
 * @author Linsmar
 */
include 'model/entidade/Veiculo.php';

class Veiculos extends MyController
{

    private $veiculo;

    function __construct()
    {
        $this->veiculo = new Veiculo();
    }

    public function index()
    {
        $allVeiculos = $this->veiculo->select_all();
    }

    public function getPost()
    {
        $this->veiculo->id = $_POST["ipt_id"];
        $this->veiculo->tipo = $_POST["ipt_tipo"];
        $this->veiculo->marca = $_POST["ipt_marca"];
        $this->veiculo->modelo = $_POST["ipt_modelo"];
        $this->veiculo->ano = $_POST["ipt_ano"];
        $this->veiculo->cor = $_POST["ipt_cor"];
        $this->veiculo->placa = $_POST["ipt_placa"];
        $this->veiculo->renavan = $_POST["ipt_renavan"];
        $this->veiculo->chassi = $_POST["ipt_chassi"];
    }

    public function insert()
    {
        $this->getPost();
        $this->veiculo->insert();
    }

    public function update()
    {
        $this->getPost();
        $this->veiculo->update();
    }

    public function delete()
    {
        $this->veiculo->delete();
    }
}
