<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require './model/veiculo/Veiculo.php';
?>
<html>
    <head>
        <title>WebApp - Ínicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $veiculo = new veiculo();
        
        $veiculo->tipo = 1;
        $veiculo->marca = 1;
        $veiculo->modelo = 1;
        $veiculo->ano = 2016;
        $veiculo->cor = 'Prata';
        $veiculo->placa = 'OVC-8045';
        $veiculo->renavan = '123867434';
        $veiculo->chassi = 'A855HY2D5H1F5D1A5S';
        
        $veiculo->insert();
        
        echo $veiculo->id;
        
        ?>
        <div>
            <a href=1"view/veiculo/exibir.php">Veiculo</a>
        </div>
    </body> 
</html>
