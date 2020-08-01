<?php

    session_start(); //eh importante executar antes de tudo, para termos acesso a super global $_SESSION

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    echo '<hr>';

    //temos duas opces:

    //(1)remover indices do array de sessao
    //unset() funcao nativa php, serve para remover indices de qlqr array

    unset($_SESSION['x']); //tem inteligencia para remover o indice apenas se existir

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //(2)destruir a variavel de sessao
    //session_destroy() remove todos os indices contidos na super global $_SESSION

    session_destroy(); //a sessao sera destruida porem, somente na proxima requisicao teremos mais acessos as variaveis de sessao
    //forcar um redirecionamento


    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    */

    session_destroy();
    header('Location:index.php');
?>