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
                                                <li class="active"><a href="cadastro-veiculos.php">Veículos</a></li>
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
                                                <h4 class="title">
                                                    Veículos:
                                                    <a href="#" id="add_veiculo" class="btn-mais" title="Adicionar veículo">[+] Adicionar veículo</a>
                                                </h4>
                                                <br>
                                                <div id="veiculo">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tipo</label>
                                                                <select name="slc_tipo" class="form-control border-input">
                                                                    <option value="">Selecione</option>
                                                                    <option value="1">Carro</option>
                                                                    <option value="2">Moto</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Marca</label>
                                                                <select name="slc_marca" class="form-control border-input" required>
                                                                    <!-- Select deverá carregar as informações da tabela de marca -->
                                                                    <option value="">Selecione</option>
                                                                    <option value="1">Fiat</option>
                                                                    <option value="2">Ford</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Modelo</label>
                                                                <select id="slc_modelo" name="slc_modelo" class="form-control border-input" required>
                                                                    <!-- Select deverá carregar as informações da tabela de marca -->
                                                                    <option value="">Selecione</option>
                                                                    <option value="1">Ka</option>
                                                                    <option value="2">Fiesta</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Ano de fabricação</label>
                                                                <input type="number" name="ipt_ano" class="form-control border-input" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Cor</label>
                                                                <input type="text" name="ipt_cor" class="form-control border-input" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Placa</label>
                                                                <input type="text" name="ipt_placa" class="form-control border-input" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Renavan</label>
                                                                <input type="text" name="ipt_renavan" class="form-control border-input" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Chassi</label>
                                                                <input type="text" name="ipt_chassi" class="form-control border-input" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-6 form-inline">
                                                            <label>Uso</label><br>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="uso" value="1"> Comercial
                                                            </label>
                                                            <label class="checkbox-inline">
                                                                <input type="radio" name="uso" value="1"> Passeio
                                                            </label>
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

</body>

</html>
