<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
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
                                                    <li class="active"><a href="cadastro-socioeconomico.php">Grupo Familiar</a></li>
                                                    <li><a href="cadastro_aluno.php">Dados da Criança</a></li>
                                                    <li><a href="cadastro_paimae.php">Pai/Mãe e Responsável</a></li>
                                                    <li><a href="cadastro-imoveis.php">Imóveis</a></li>
                                                    <li><a href="cadastro-veiculos.php">Veículos</a></li>
                                                    <li><a href="cadastro-saude.php">Saúde</a></li>
                                                    <li><a href="cadastro-despesas.php">Despesas</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div id="grupo" class="tab-pane fade in active">
                                            <div class="content">
                                                <form action="?"  method="post">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-xs-8 form-inline">
                                                            <label>Situação conjugal dos pais:</label><br>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="situacao" value="1"> Casado
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="situacao" value="1"> Solteiro
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="situacao" value="1"> Outros
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-4">
                                                            <div class="form-group">
                                                                <label>Aluno reside com:</label><br>
                                                                <input type="text" name="residencia" class="form-control border-input" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xs-12 form-inline">
                                                            <label>Residência:</label><br>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="situacao" value="1"> Própria
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="situacao" value="1"> Alugada
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="situacao" value="1"> Cedida
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="situacao" value="1"> Financiada
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4 col-xs-4">
                                                            <div class="form-group">
                                                                <label>Valor do Aluguel:</label><br>
                                                                <input type="text" name="aluguel:" class="form-control border-input" >
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-4">
                                                            <div class="form-group">
                                                                <label>Valor da Prestação de Financiamento:</label><br>
                                                                <input type="text" name="aluguel:" class="form-control border-input" >
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 col-xs-4">
                                                            <div class="form-group">
                                                                <label>Propriedade cedida por:</label><br>
                                                                <input type="text" name="proprietario" class="form-control border-input" >
                                                            </div>
                                                        </div>
                                                    </div>                                                       
                                                    <h4 class="title">
                                                        Grupo Familiar
                                                        <a href="#" id="add_familiar" class="btn-mais" title="Adicionar familiar">[+] Adicionar familiar</a>
                                                    </h4>
                                                    <br>
                                                    <div id="familiar">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Nome Completo</label>
                                                                    <input type="text" name="Nome" class="form-control border-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Parentesco</label>
                                                                    <input type="text" name="parentesco" class="form-control border-input" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label>Idade</label>
                                                                    <input type="text" name="idade" class="form-control border-input" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Escolaridade</label>
                                                                    <input type="text" name="escolaridade" class="form-control border-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Estado Civil</label>
                                                                    <input type="text" name="estado_civil" class="form-control border-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Cargo/Função</label>
                                                                    <input type="text" name="cargo" class="form-control border-input">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Renda(R$)</label>
                                                                    <input type="text" name="renda" class="form-control border-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12 col-xs-12 text-right">
                                                            <button class="btn btn-primary">Salvar</button>
                                                        </div>
                                                    </div>
                                                </form>
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
