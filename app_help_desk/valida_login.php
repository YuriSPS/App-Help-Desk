<?php

    session_start(); //eh importante executar antes de tudo, para termos acesso a super global $_SESSION

    // $_SESSION['x'] = 'Oi, sou um valor de sessao!'; criando um indice e associando o valor ao indice 

    //variavel que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'ADM', 2 => 'Usuario');

    //usuarios pre-cadastrados no sistema
    $usuarios_app = array(
        array('id' => 1 , 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2 , 'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 1),
        array('id' => 3 , 'email' => 'jose@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2),
        array('id' => 4 , 'email' => 'maria@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2),
        
    );

    foreach ($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }     
    }

    if ($usuario_autenticado) {
        echo 'Usuario autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
       header('Location: index.php?login=erro'); //a funcao nativa header espera um parametro location(que sera a pagina de um site)e esta ira forcar a ir para esta pagina
    }

    // print_r($_POST);
    // echo '<br>';

    // echo $_POST['email'];
    // echo '<br>';
    // echo $_POST['senha'];
?>