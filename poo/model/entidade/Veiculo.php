<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of veiculo
 *
 * @author linsmar
 */
require_once '../repositorio/VeiculoRepo.php';

class Veiculo extends VeiculoRepo
{

    public $tipo;
    public $marca;
    public $modelo;
    public $ano;
    public $cor;
    public $placa;
    public $renavan;
    public $chassi;

}
