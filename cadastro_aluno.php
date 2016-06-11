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
                                                    <li><a href="cadastro-socioeconomico.php">Grupo Familiar</a></li>
                                                    <li class="active"><a href="cadastro_aluno.php">Dados da Criança</a></li>
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
                                        <div id="crianca" class="tab-pane fade in active">
                                            <div class="header">
                                                <h4 class="title">Motivo da Solicitação</h4>
                                            </div>
                                            <div class="content">
                                                <form action="controller/aluno/incluir.php"  method="post">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xs-12 form-inline">
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="motivo" value="1"> Baixa Renda
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="motivo" value="1"> Dificuldade Financeira
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="motivo" value="1"> Desemprego
                                                            </label>
                                                            <label for="motivo" class="checkbox-inline">Outro</label>
                                                            <div class="form-group">
                                                                <input type="text" name="motivo" class="form-control border-input col-sm-2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-2 col-xs-2">
                                                            <label for="matricula">Matrícula</label>
                                                            <input type="text" name="matricula" class="form-control border-input">
                                                        </div>
                                                        <div class="col-sm-8 col-xs-8">
                                                            <label for="nome">Nome</label>
                                                            <input type="text" name="nome" class="form-control border-input">
                                                        </div>
                                                        <div class="col-sm-2 col-xs-2">
                                                            <label for="ano">Ano em 2015</label>
                                                            <input type="text" name="ano" class="form-control border-input">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-2 col-xs-2">
                                                            <label for="turno">Turno</label>
                                                            <input type="text" name="turno" class="form-control border-input">
                                                        </div>
                                                        <div class="col-sm-2 col-xs-2">
                                                            <label>Classificação</label><br>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="classi" value="vet"> Vet
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="classi" value="nov"> Nov
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6">
                                                            <label for="certidao">Certidão de Nascimento</label>
                                                            <input type="text" name="certidao" class="form-control border-input">
                                                        </div>
                                                        <div class="col-sm-2 col-xs-2">
                                                            <label for="idade">Idade</label>
                                                            <input type="text" name="idade" class="form-control border-input">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-xs-12 text-right">
                                                            <button class="btn btn-primary">Salvar</button>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
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

    </body>

</html>
