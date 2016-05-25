<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of crud
 *
 * @author linsmar
 */
class crud_pdo  {
        
    public function selectDB($sql, $params = null, $class = null) {
        $query = $this->connect()->prepare($sql);
        $query->execute($params);

        if (isset($class)) {
            $rs = $query->fetchAll(PDO::FETCH_CLASS, $class) or die(print_r($query->errorInfo(), true));
        } else {
            $rs = $query->fetchAll(PDO::FETCH_OBJ) or die(print_r($query->errorInfo(), true));
        }
        self::__destruct();
        return $rs;
    }

    /* Método insert que insere valores no banco de dados e retorna o último id inserido */

    public function insertDB($sql, $params = null) {
        $conexao = $this->connect();
        $query = $conexao->prepare($sql);
        $query->execute($params);
        $rs = $conexao->lastInsertId() or die(print_r($query->errorInfo(), true));
        self::__destruct();
        return $rs;
    }

    /* Método update que altera valores do banco de dados e retorna o número de linhas afetadas */

    public function updateDB($sql, $params = null) {
        $query = $this->connect()->prepare($sql);
        $query->execute($params);
        $rs = $query->rowCount() or die(print_r($query->errorInfo(), true));
        self::__destruct();
        return $rs;
    }

    /* Método delete que excluí valores do banco de dados retorna o número de linhas afetadas */

    public function deleteDB($sql, $params = null) {
        $query = $this->connect()->prepare($sql);
        $query->execute($params);
        $rs = $query->rowCount() or die(print_r($query->errorInfo(), true));
        self::__destruct();
        return $rs;
    }
}
