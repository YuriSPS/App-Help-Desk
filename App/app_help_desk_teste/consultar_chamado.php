<?
    require_once("validador_acesso.php");
?>

<?php

    //criacao do array que ira conter os chamados
    $chamados = array();

    // abrir o arquivo.txt , o parametro 'r' serve apenas para leitura do arquivo que queremos abrir, no caso do 'a' seria para gravar um arquivo.
    $arquivo = fopen('../../app_help_desk/arquivo.txt', 'r');

    // vamos percorrer o arquivo.txt enquanto houver registros(linhas) a serem recuperados
    while(!feof($arquivo)){ //funcao que percorrer determinado arquivo lendo todas as linhas ate encontrar o END OF FILE(final do arquivo).

        //recuperando registros contido no arquivo.txt
        $registro = fgets($arquivo);
        $chamados[] = $registro;
    }

    //fechar o arquivo aberto
    fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App Help Desk - Consultar Chamado</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
        <header id="cabecalho">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <!-- LOGO -->
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

        <section id="area_consultar_chamado">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- INICIO CARD -->
                        <div class="card">
                                <div class="card-header">Consulta de Chamado</div>

                            <!-- INICIO CARD-BODY -->
                                <div class="card-body">
                                    <? foreach($chamados as $chamado) { ?>
                                        <?
                                            $chamado_dados  = explode('#', $chamado);

                                            if($_SESSION['perfil_id'] == 2){
                                                //so vamos exibir o chamado criado pelo proprio usuario
                                                if ($_SESSION['id'] != $chamado_dados[0]) {
                                                    continue;
                                                }
                                            }

                                            if(count($chamado_dados) < 4){
                                                continue;
                                            }
                                        ?> 
                                        
                                    <div class="card-body bg-light card-border">
                                        <div class="card-title"><h5> <? echo $chamado_dados[1]; ?> </h5></div>
                                        <div class="card-subtitle text-muted"><h6>   <? echo $chamado_dados[2]; ?>   </h6></div>
                                        <div class="card-text"> <? echo $chamado_dados[3]; ?> </div>
                                    </div>  
                                    
                                    <? } ?>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="home.php" class="btn btn-lg btn-warning btn-block">
                                                Voltar
                                            </a>    
                                        </div>
                                    </div>

                                </div>
                            <!-- FIM CARD-BODY -->     
                        </div>
                            

                        </div>
                        <!-- FIM CARD -->
                    </div>
                </div>
            </div>
        </section>


    </body>
</html>