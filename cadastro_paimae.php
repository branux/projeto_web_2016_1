<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type='text/javascript' src='js/cep.js'></script>

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <title>Sistema de Matrícula</title>
    <?php
    include("includes/head.php")
    ?>

</head>
<body>

    <div class="wrapper">
        <?php
        include("includes/lateral.php");

        ?>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">Cadastro Socioeconômico</a>
                    </div>
                    <?php
                    include("includes/menu_usuarios.php")
                    ?>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">

                            <div class="card">
                                <div class="header">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li><a href="cadastro-socioeconomico.php">Grupo Familiar</a></li>
                                                <li><a href="cadastro_aluno.php">Dados da Criança</a></li>
                                                <li class="active"><a href="cadastro_paimae.php">Pai/Mãe e Responsável</a></li>
                                                <li><a href="cadastro-imoveis.php">Imóveis</a></li>
                                                <li><a href="cadastro-veiculos.php">Veículos</a></li>
                                                <li><a href="cadastro-saude.php">Saúde</a></li>
                                                <li><a href="cadastro-despesas.php">Despesas</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div id="mae" class="tab-pane fade in active">
                                        <div class="header">
                                            <h4 class="title">Dados do Responsável</h4>
                                        </div>
                                        <form action="controller/familiar/inserir.php"  method="post" name="familiar">
                                            <div class="content">
                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-3">
                                                        <label>Parentesco</label>
                                                        <select name="parentesco" class="form-control border-input" required>
                                                            <option value="">Selecione</option>
                                                            <?php 
                                                            include "controller/parentesco/listar.php";
                                                            while($row_parentesco = mysqli_fetch_array($result)){
                                                                echo '<option value="'.$row_parentesco['id'].'">'.$row_parentesco['descricao'].'</option>';
                                                            }

                                                            ?>

                                                        </select>
                                                    </div>
                                                    <div class="col-sm-9 col-xs-9 form-inline">
                                                        <label>Situação do Responsável</label><br>
                                                        <label class="checkbox-inline">
                                                            <input type="radio" name="situacao"  onclick="document.familiar.situacao_descricao.disabled=true" value="1" checked> Presente
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="radio" name="situacao"  onclick="document.familiar.situacao_descricao.disabled=true" value="2"> Falecido
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="radio" name="situacao"  onclick="document.familiar.situacao_descricao.disabled=true" value="3"> Separado
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="radio" name="situacao"  onclick="document.familiar.situacao_descricao.disabled=false; document.familiar.situacao_descricao.focus();" value="4"> Outros
                                                        </label>
                                                        
                                                        <div class="form-group">
                                                            <input type="text" name="situacao_descricao" disabled="disabled" class="form-control border-input col-sm-2">
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-4">
                                                        <label for="data_nascimento">Data Nascimento</label>
                                                        <input type="date" name="data_nascimento" class="form-control border-input" required>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-4">
                                                        <label for="sexo">Sexo</label>
                                                        <select name="sexo"  class="form-control border-input" required>
                                                            <option value="">Selecine</option>
                                                            <option value="M">Masculino</option>
                                                            <option value="S">Feminino</option>
                                                        </select>
                                                    </div>
                                                </div>




                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-6">
                                                        <label for="nome">Nome</label>
                                                        <input type="text" name="nome" class="form-control border-input">
                                                    </div>
                                                    <div class="col-sm-3 col-xs-3">
                                                        <label for="certidao">CPF</label>
                                                        <input type="text" name="certidao" class="form-control border-input">
                                                    </div>
                                                    <div class="col-sm-3 col-xs-3">
                                                        <label for="rg">Identidade</label>
                                                        <input type="text" name="rg" class="form-control border-input">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-4">
                                                        <label for="cep">CEP</label>
                                                        <input type="text" name="cep" id="cep" class="form-control border-input">
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <label for="logradouro">Logradouro</label>
                                                        <input type="text" name="logradouro" id="logradouro" class="form-control border-input">
                                                    </div>
                                                    <div class="col-sm-2 col-xs-2">
                                                        <label for="num">Número</label>
                                                        <input type="text" name="numero" id="numero" class="form-control border-input">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4 col-xs-4">
                                                        <label for="bairro">Bairro</label>
                                                        <input type="text" name="bairro" id="bairro" class="form-control border-input">
                                                    </div>
                                                    <div class="col-sm-8 col-xs-8">
                                                        <label for="ref">Ponto de Referência</label>
                                                        <input type="text" name="ponto_de_referencia" class="form-control border-input">
                                                    </div>
                                                    



                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3 col-xs-3">
                                                        <label for="tel">Telefone Residencial</label>
                                                        <input type="text" name="tel" class="form-control border-input">
                                                    </div>
                                                    <div class="col-sm-3 col-xs-3">
                                                        <label for="cel">Celular</label>
                                                        <input type="text" name="cel" class="form-control border-input">
                                                    </div>


                                                    <div class="col-sm-2 col-xs-2" >
                                                        <label for="estado">Estado</label>
                                                        <select name="estado" id="estado" class="form-control border-input" required>
                                                            <option value="">Selecione</option>
                                                            <?php 
                                                            include "includes/_conexao.php";
                                                            $result_uf = mysqli_query($con, "SELECT * FROM estado");
                                                            if(mysqli_num_rows($result_uf) == 0){

                                                                echo '<option value="">100 dados</option>';
                                                            }else{
                                                                while($row_uf = mysqli_fetch_array($result_uf)){
                                                                    echo '<option value="'.$row_uf['id'].'">'.$row_uf['nome'].'</option>';
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>


                                                    <div class="col-sm-4 col-xs-4" >
                                                        <label for="cidade">Cidade</label>
                                                        <select name="cidade" id="cidade" class="form-control border-input" required>
                                                            <option value="">Selecione</option>
                                                            <?php 
                                                            include "includes/_conexao.php";
                                                            $result_uf = mysqli_query($con, "SELECT * FROM cidade");
                                                            if(mysqli_num_rows($result_uf) == 0){

                                                                echo '<option value="">100 dados</option>';
                                                            }else{
                                                                while($row_uf = mysqli_fetch_array($result_uf)){
                                                                    echo '<option value="'.$row_uf['id'].'">'.$row_uf['nome'].'</option>';
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-xs-12 text-right">
                                                        <button class="btn btn-primary">Salvar</button>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>

                                            </div>
                                            <hr>
                                        </form>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="header">
                                                <h4 class="title">Cadastros</h4>
                                            </div>
                                            <div class="content table-responsive table-full-width">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <th>Nome</th>
                                                        <th>Tipo</th>
                                                        <th>Situação</th>
                                                    </thead>
                                                    <tbody>

                                                     <?php 
                                                     include "includes/_conexao.php";
                                                     $result_fm = mysqli_query($con, "select  p.nome, pt.descricao , f.situacao from familiar f inner join pessoa p on f.id_pessoa = p.id inner join parentesco pt on pt.id = f.id_parentesco");

                                                     while($row_fm = mysqli_fetch_array($result_fm)){

                                                        if($row_fm['situacao'] == 1)
                                                            $situacao = 'Presente';
                                                        else if($row_fm['situacao'] == 2)
                                                            $situacao = 'Falecido';
                                                        else if($row_fm['situacao'] == 3)
                                                            $situacao = 'Separado';
                                                        else
                                                            $situacao = $row_fm['situacao'];

                                                        echo "<tr>";
                                                        echo '<td> <a href="#">'.$row_fm['nome'] ."</a></td>";
                                                        echo "<td> ".$row_fm['descricao'] ."</td>";
                                                        echo "<td> ".$situacao."</td>";
                                                        echo "</tr>";
                                                    }

                                                    ?>

                                                </tr>
                                            </tbody>
                                            <div class="clearfix"></div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include("includes/scripts.php");
?>
<script type="text/javascript">
    $(document).ready(function () {
        $("#add_familiar").click(function () {
            $('#familiar').last().after($('#familiar').clone().prepend("<hr>"));
        });
        $("#add_imovel").click(function () {
            $('#imovel').last().after($('#imovel').clone().prepend("<hr>"));
        });
        $("#add_veiculo").click(function () {
            $('#veiculo').last().after($('#veiculo').clone().prepend("<hr>"));
        });
        $("#add_pessoa").click(function () {
            $('#pessoa').last().after($('#pessoa').clone().prepend("<hr>"));
        });
    });
</script>
<script>setAtivoMenuLateral("cadastro");</script>

</body>

</html>
