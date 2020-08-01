<?php
    session_start(); //eh importante executar antes de tudo, para termos acesso a super global $_SESSION
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM' ){
    header('Location: index.php?login=erro2');
    }
    
    
?>