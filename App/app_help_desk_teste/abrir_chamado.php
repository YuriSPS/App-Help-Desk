<?php
    require_once("validador_acesso.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App Help Desk - Abrir Chamado</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/estilo.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    </head>

    <body>
        <header id="cabecalho">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <!-- LOGO -->
                    <a href="" class="navbar-brand">
                    <img src="logo.png" width="32" height="32" class="img-fluid mr-auto">
                    </a>

                    <p class="p-logo mr-auto">App Help Desk</p>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="logoff.php" class="nav-link">SAIR</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <section id="area_chamado">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- INICIO CARD -->
                        <div class="card">
                            <div class="card-header">Abertura chamado</div>
                            <!-- INICIO CARD-BODY -->
                            <div class="card-body">
                                <form action="registra_chamado.php" method="post">

                                    <!-- TITULO DO FORMULARIO -->
                                    <div class="form-group">
                                        
                                        <label for="">Titulo</label>
                                        <input name="titulo" type="text" class="form-control" placeholder="Titulo">
                                    </div>
                                    <!-- FIM TITULO DO FORMULARIO -->

                                    <!-- CATEGORIA DO FORMULARIO -->
                                    <div class="form-group">
                                        <label for="">Categoria</label>
                                        <select name="categoria" class="form-control">
                                            <option>Criacao Usuario</option>
                                            <option>Impressora</option>
                                            <option>Hardware</option>
                                            <option>Software</option>
                                            <option>Rede</option>
                                        </select>
                                    </div>
                                    <!-- FIM CATEGORIA DO FORMULARIO -->
                                    
                                    <!-- INICIO DESCRICAO DO FORMULARIO -->
                                    <div class="form-group">
                                        <label for="">Descricao</label>
                                        <textarea name="descricao" class="form-control" name="" id="" cols="30" rows="3"></textarea>
                                    </div>
                                    <!-- FIM DESCRICAO DO FORMULARIO -->

                                    <div class="row">
                                        <!-- BOTAO VOLTAR -->
                                        <div class="col-md-6">
                                            <a href="home.php" class="btn btn-lg btn-warning btn-block">
                                                Voltar
                                            </a>    
                                        </div>

                                        <!-- BOTAO ABRIR CHAMADO -->
                                        <div class="col-md-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                            <!-- FIM CARD-BODY -->
                        </div>
                        <!-- FIM CARD -->
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>