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
                            <a class="navbar-brand" href="#">Turmas</a>
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
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <label for="ano">Ano</label>
                                                    <select class="form-control" id="ano">
                                                        <option>2017</option>
                                                        <option>2016</option>
                                                        <option>2015</option>
                                                        <option>2014</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label for="turma">Turma</label>
                                                    <select class="form-control" id="turma">
                                                        <option>Turma 1</option>
                                                        <option>Turma 2</option>
                                                        <option>Turma 3</option>
                                                        <option>Turma 4</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 text-center">
                                                    <br>
                                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Exibir</button>

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
                                        <h4 class="title">Turma 1 - 2017</h4>
                                        <p class="category">Descrição da turma 1.</p>
                                    </div>
                                    <div class="content table-responsive table-full-width">
                                        <table class="table table-striped">
                                            <thead>
                                            <th>Matrícula</th>
                                            <th>Nome</th>
                                            <th>Idade</th>
                                            <th>Telefone</th>
                                            <th>Observação</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nome Sobrenome</td>
                                                    <td>8</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Nome Sobrenome</td>
                                                    <td>8</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Nome Sobrenome</td>
                                                    <td>8</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Nome Sobrenome</td>
                                                    <td>8</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Nome Sobrenome</td>
                                                    <td>8</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Nome Sobrenome</td>
                                                    <td>8</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Nome Sobrenome</td>
                                                    <td>8</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Nome Sobrenome</td>
                                                    <td>8</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Nome Sobrenome</td>
                                                    <td>8</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Nome Sobrenome</td>
                                                    <td>8</td>
                                                    <td>1234-5678</td>
                                                    <td>Alguma coisa</td>
                                                </tr>
                                            </tbody>
                                            <div class="clearfix"></div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center">
                                <button type="button" class="btn btn-info btn-fill btn-wd btn-lg">Alterar turma</button>
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
