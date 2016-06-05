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
                            <a class="navbar-brand" href="#">Início</a>
                        </div>
                        <?php
                            include("includes/menu_usuarios.php")
                        ?>
                    </div>
                </nav>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <a href="pre-matricula.php">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <div class="icon-big icon-warning text-center">
                                                        <i class="ti-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="numbers">
                                                        <p>realizar uma nova</p>
                                                        Pré-Matrícula
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <hr />
                                                <div class="stats">
                                                    <i class="ti-reload"></i> 27 Pré-matrículas cadastradas
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <a href="efetivar-matricula.php">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <div class="icon-big icon-danger text-center">
                                                        <i class="ti-stamp"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="numbers">
                                                        <p>Efetivar uma</p>
                                                        Matrícula
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <hr />
                                                <div class="stats">
                                                    <i class="ti-calendar"></i> Faltam 3 dias
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <a href="alunos-matriculados.php">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <div class="icon-big icon-success text-center">
                                                        <i class="ti-id-badge"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="numbers">
                                                        <p>Consultar dados dos alunos</p>
                                                        Matriculados
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <hr />
                                                <div class="stats">
                                                    <i class="ti-bar-chart"></i> 145 Alunos regularmente matriculados
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <a href="turmas.php">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-xs-5">
                                                    <div class="icon-big icon-info text-center">
                                                        <i class="ti-layout-list-thumb"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xs-7">
                                                    <div class="numbers">
                                                        <p>Visualizar a lista de</p>
                                                        Turmas
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <hr />
                                                <div class="stats">
                                                    <i class="ti-reload"></i> Faltam 3 dias
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
    </body>


</html>
