<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author linsmar
 */
interface Repositorio {

    //put your code here
    public function select($script);

    public function select_all($script);

    public function insert($script);

    public function update($script);

    public function delete($script);
}
