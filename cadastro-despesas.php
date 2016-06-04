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
                                                    <li><a href="cadastro_aluno.php">Dados da Criança</a></li>
                                                    <li><a href="cadastro_paimae.php">Pai/Mãe e Responsável</a></li>
                                                    <li><a href="cadastro-imoveis.php">Imóveis</a></li>
                                                    <li><a href="cadastro-veiculos.php">Veículos</a></li>
                                                    <li><a href="cadastro-saude.php">Saúde</a></li>
                                                    <li class="active"><a href="cadastro-despesas.php">Despesas</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div id="despesas" class="tab-pane fade  in active">
                                                <form action="?"  method="post">
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="agua">Água</label>
                                                                <input type="text" name="agua" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="agua">Luz</label>
                                                                <input type="text" name="agua" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="telefone">Telefone</label>
                                                                <input type="text" name="telefone" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="alimentacao">Alimentação</label>
                                                                <input type="text" name="alimentacao" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="aluguel">Aluguel</label>
                                                                <input type="text" name="aluguel" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="financiamento">Financiamento(casa)</label>
                                                                <input type="text" name="financiamento" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="transporte">Transporte</label>
                                                                <input type="text" name="transporte" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="educacao">Educação</label>
                                                                <input type="text" name="educacao" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="financiamento_veiculo">Financiamento(veículo)</label>
                                                                <input type="text" name="financiamento_veiculo" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="plano_saude">Plano de Saúde</label>
                                                                <input type="text" name="plano_saude" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="despesas">Outras despesas</label>
                                                                <input type="text" name="despesas" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-6 col-xs-6">
                                                                <label for="renda">Total de Renda Familiar(R$)</label>
                                                                <input type="text" name="renda" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-6 col-xs-6">
                                                                <label for="membros">Total de Membros da Família</label>
                                                                <input type="text" name="membros" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 col-xs-6">
                                                                <label for="renda_percapta">Renda Per Capta(R$)</label>
                                                                <input type="text" name="renda_percapta" class="form-control border-input">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12 col-xs-12 text-right">
                                                                <button class="btn btn-primary">Salvar</button>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>

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
