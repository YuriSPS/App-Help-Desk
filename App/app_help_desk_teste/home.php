<?php
    require_once("validador_acesso.php");

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App Help Desk - HOME</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <header id="cabecalho">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a href="#" class="navbar-brand">
                        <img src="logo.png" width="32" height="32" class="img-fluid">
                    </a>

                    <p class="mr-auto p-logo">App Help Desk</p>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="logoff.php" class="nav-link">SAIR</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <section id="area-menu">
            <div  class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Menu</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 d-flex justify-content-center">
                                        <a href="abrir_chamado.php">
                                            <img src="formulario_abrir_chamado.png" width="70" height="70" class="img-fluid">
                                        </a>
                                    </div>
                                    
                                    <div class="col-md-6 d-flex justify-content-center">
                                        <a href="consultar_chamado.php">
                                            <img src="formulario_consultar_chamado.png" width="70" height="70" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>