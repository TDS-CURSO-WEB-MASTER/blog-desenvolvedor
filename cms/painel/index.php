<?php 
require_once __DIR__. './../_acoes/login.php';
?>
<!doctype html>
<html lang="pt-br">

<head>
    <?php require_once base_root('content/_head.php')?>
    <title>Painel do Desenvolvedor</title>
</head>

<body>
    <?php require_once base_root('cms/content/_nav.php')?>
    <?php
    print_r('<pre>');
    print_r($_SESSION);
    ?>
    <?php require_once base_root('content/_footer.php')?>
</body>

</html>