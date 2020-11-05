<?php 
    session_start();
    require_once __DIR__.'./../../_connect/database.php';
    require_once __DIR__.'./menu.php';

    $base_url   = base_url();

    $login = isset($_POST['login']) ? $_POST['login'] : false;
    $senha = isset($_POST['senha']) ? md5(DBEscape($_POST['senha'])) : false;

    $result = DBSelect('usuarios', "WHERE login = '{$login}' AND senha = '{$senha}' AND ativo = 'S'");
    
    if (!empty($_POST) || !isset($_SESSION)) {
        $_SESSION['usuario_id']     = $result[0]['usuario_id'];
        $_SESSION['login']          = $result[0]['login'];
        $_SESSION['senha']          = $result[0]['senha'];
        $_SESSION['nome']           = $result[0]['nome'];
        $_SESSION['sobre_nome']     = $result[0]['sobre_nome'];
        
        header("Location: {$base_url}cms/painel/");
    }else{
        if(!$_SESSION['login'] && !$_SESSION['senha']){
            header("Location: {$base_url}cms/");
        }
    }
    
    function carregaNomeUsuario(){
        $nome = $_SESSION['nome'] ? $_SESSION['nome'] : '';
        return $nome;
    }
    
?>