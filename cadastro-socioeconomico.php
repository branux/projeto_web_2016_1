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
                                                <form action="?"  method="post">
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
                                        <div id="mae" class="tab-pane fade">
                                            <div id="crianca" class="tab-pane fade in active">
                                                <div class="header">
                                                    <h4 class="title">Dados da Mãe</h4>
                                                </div>
                                                <form action="?"  method="post">
                                                    <div class="content">

                                                        <div class="row">
                                                            <div class="col-sm-12 col-xs-12 form-inline">
                                                                <label>Situação da Mãe</label><br>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" name="situacao" value="1"> Presente
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" name="situacao" value="1"> Falecido
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" name="situacao" value="1"> Separado
                                                                </label>
                                                                <label for="motivo" class="checkbox-inline">Outros</label>
                                                                <div class="form-group">
                                                                    <input type="text" name="situacao" class="form-control border-input col-sm-2">
                                                                </div>
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
                                                                <label for="matricula">Identidade</label>
                                                                <input type="text" name="matricula" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 col-xs-6">
                                                                <label for="endereco">Endereço</label>
                                                                <input type="text" name="endereco" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-2 col-xs-2">
                                                                <label for="num">Número</label>
                                                                <input type="text" name="num" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="bairro">Bairro</label>
                                                                <input type="text" name="bairro" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-8 col-xs-8">
                                                                <label for="ref">Ponto de Referência</label>
                                                                <input type="text" name="ref" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="cep">CEP</label>
                                                                <input type="text" name="cep" class="form-control border-input">
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
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="cidade">Cidade</label>
                                                                <input type="text" name="cidade" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-2 col-xs-2">
                                                                <label for="estado">Estado</label>
                                                                <input type="text" name="estado" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>

                                                    </div>
                                                    <hr>
                                                    <div class="header">
                                                        <h4 class="title">Dados do Pai</h4>
                                                    </div>
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xs-12 form-inline">
                                                                <label>Situação do Pai</label><br>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" name="situacao" value="1"> Presente
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" name="situacao" value="1"> Falecido
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" name="situacao" value="1"> Separado
                                                                </label>
                                                                <label for="motivo" class="checkbox-inline">Outros</label>
                                                                <div class="form-group">
                                                                    <input type="text" name="situacao" class="form-control border-input col-sm-2">
                                                                </div>
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
                                                                <label for="matricula">Identidade</label>
                                                                <input type="text" name="matricula" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 col-xs-6">
                                                                <label for="endereco">Endereço</label>
                                                                <input type="text" name="endereco" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-2 col-xs-2">
                                                                <label for="num">Número</label>
                                                                <input type="text" name="num" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="bairro">Bairro</label>
                                                                <input type="text" name="bairro" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-8 col-xs-8">
                                                                <label for="ref">Ponto de Referência</label>
                                                                <input type="text" name="ref" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="cep">CEP</label>
                                                                <input type="text" name="cep" class="form-control border-input">
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
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="cidade">Cidade</label>
                                                                <input type="text" name="cidade" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-2 col-xs-2">
                                                                <label for="estado">Estado</label>
                                                                <input type="text" name="estado" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>

                                                    </div>
                                                    <hr>
                                                    <div class="header">
                                                        <h4 class="title">Dados do Responsável</h4>
                                                    </div>
                                                    <div class="content">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xs-12 form-inline">
                                                                <label>Situação do Pai</label><br>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" name="situacao" value="1"> Presente
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" name="situacao" value="1"> Falecido
                                                                </label>
                                                                <label class="checkbox-inline">
                                                                    <input type="radio" name="situacao" value="1"> Separado
                                                                </label>
                                                                <label for="motivo" class="checkbox-inline">Outros</label>
                                                                <div class="form-group">
                                                                    <input type="text" name="situacao" class="form-control border-input col-sm-2">
                                                                </div>
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
                                                                <label for="matricula">Identidade</label>
                                                                <input type="text" name="matricula" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6 col-xs-6">
                                                                <label for="endereco">Endereço</label>
                                                                <input type="text" name="endereco" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-2 col-xs-2">
                                                                <label for="num">Número</label>
                                                                <input type="text" name="num" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="bairro">Bairro</label>
                                                                <input type="text" name="bairro" class="form-control border-input">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-8 col-xs-8">
                                                                <label for="ref">Ponto de Referência</label>
                                                                <input type="text" name="ref" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="cep">CEP</label>
                                                                <input type="text" name="cep" class="form-control border-input">
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
                                                            <div class="col-sm-4 col-xs-4">
                                                                <label for="cidade">Cidade</label>
                                                                <input type="text" name="cidade" class="form-control border-input">
                                                            </div>
                                                            <div class="col-sm-2 col-xs-2">
                                                                <label for="estado">Estado</label>
                                                                <input type="text" name="estado" class="form-control border-input">
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
                                        <div id="grupo" class="tab-pane fade">
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
                                                        <h4 class="title">
                                                            Imóveis Alugados:
                                                            <a href="#" id="add_imovel" class="btn-mais" title="Adicionar imóvel">[+] Adicionar imóvel</a>
                                                        </h4>
                                                        <br>
                                                        <div id="imovel">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Tipo do imóvel</label>
                                                                        <input type="text" name="tipo_imovel" class="form-control border-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Quantidade</label>
                                                                        <input type="text" name="quantidade" class="form-control border-input" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Valor do Aluguel(R$)</label>
                                                                        <input type="text" name="valor_aluguel" class="form-control border-input" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <h4 class="title">
                                                            Veículos:
                                                            <a href="#" id="add_veiculo" class="btn-mais" title="Adicionar veículo">[+] Adicionar veículo</a>
                                                        </h4>
                                                        <br>
                                                        <div id="veiculo">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Marca/Modelo</label>
                                                                        <input type="text" name="veiculo" class="form-control border-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Ano de fabricação</label>
                                                                        <input type="text" name="ano" class="form-control border-input" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Uso Comercial</label>
                                                                        <input type="text" name="comercial" class="form-control border-input" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Uso Passeio</label>
                                                                        <input type="text" name="passeio" class="form-control border-input" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <h4 class="title">
                                                            Condições de Saúde:
                                                            <a href="#" id="add_pessoa" class="btn-mais" title="Adicionar veículo">[+] Adicionar pessoa</a>
                                                        </h4>
                                                        <br>
                                                        <div id="pessoa">
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label>Nome</label>
                                                                        <input type="text" name="nome_saude" class="form-control border-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>Tipo de Doença</label>
                                                                        <input type="text" name="tipo_saude" class="form-control border-input" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Medicação contínua</label>
                                                                        <select name="medicao_saude" class="form-control border-input">
                                                                            <option value="0">Não</option>
                                                                            <option value="1">Sim</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label>Despesa Mensal(R$)</label>
                                                                        <input type="text" name="despesa_saude" class="form-control border-input" >
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
                                        <div id="despesas" class="tab-pane fade">
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
