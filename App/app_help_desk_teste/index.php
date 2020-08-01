<?php
    if(isset($_GET['login'])){
        // echo ($_GET['login']);
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App Help Desk - Inicio</title>
        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

        <header id="cabecalho">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a href="" class="navbar-brand">
                        <img src="logo.png" width="32" height="32";>
                    </a>
                    <p class="mr-auto p-logo">App Help Desk</p>
                </div>
            </nav>
        </header>

        <section id="home-login">
            <div class="container">
                <div class="row area-login">
                    <div class="col-md-4 m-auto">
                        <!-- Inicio da area de login -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4 mt-1">Login</h4>

                                <form action="valida_login.php" method="post">
                                    <div class="form-group">
                                        <label>E-mail:</label>
                                        <input name="email" class="form-control" type="email" placeholder="E-mail">
                                    </div>

                                    <div class="form-group">
                                        <label>Senha:</label>
                                        <input name="senha" class="form-control" type="password" placeholder="Senha">
                                    </div>

                                    <?php
                                        if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                                    ?>

                                    <div class="">
                                        <p class="text-info">Usuario ou senha invalido(s)</p>
                                    </div>

                                    <? } ?>

                                    <?php
                                        if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
                                    ?>

                                    <div class="">
                                        <p class="text-info">Faca login antes de acessar as paginas protegidas</p>
                                    </div>

                                    <? } ?>

                                    <div class="form-group">
                                        <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                        <!-- Fim da area de login -->
                    </div>
                </div>
            </div>
        </section>
        
    </body>
</html>