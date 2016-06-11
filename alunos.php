<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
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
                            <a class="navbar-brand" href="#">Alunos</a>
                        </div>
                        <?php
                            include("includes/menu_usuarios.php")
                        ?>
                    </div>
                </nav>
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-plain">
                                    <div class="content table-full-width">
                                        <form role="form">
                                            <div class="form-group">
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <label for="nome">Nome do aluno</label>
                                                    <input class="form-control" id="nome" placeholder="Digite aqui o nome do aluno"/>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 text-center">
                                                    <br>
                                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Buscar</button>

                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="header">
                                        <i><p class="category">Resultados da busca para "joao":</p></i>
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped">
                                            <thead>
                                            <th>Foto</th>
                                            <th>Matrícula</th>
                                            <th>Nome</th>
                                            <th>Idade</th>
                                            <th>Telefone</th>
                                            <th>Observação</th>
                                            <th>Ações</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </td>
                                                    <td>1</td>
                                                    <td>Joao da Silva</td>
                                                    <td>8 anos</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                    <td><button type="button" class="btn btn-info">Visualizar</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </td>
                                                    <td>1</td>
                                                    <td>Joao dos Santos</td>
                                                    <td>8 anos</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                    <td><button type="button" class="btn btn-info">Visualizar</button></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </td>
                                                    <td>1</td>
                                                    <td>Joao Ferreira</td>
                                                    <td>8 anos</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                    <td><button type="button" class="btn btn-info">Visualizar</button></td>
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

        <?php
        include("includes/scripts.php");
        ?>
        <script>setAtivoMenuLateral("alunos");</script>
    </body>


</html>
