<?php
 session_start();
 require_once __DIR__.'./../_connect/database.php';
 ?>
<!doctype html>
<html lang="pt-br">

<head>
    <?php require_once __DIR__.'./../content/_head.php'?>
    <title>Faça seu login</title>
</head>
<body>
    <div class="container">
        <div class="row align-items-center" style="height: calc(100vh - 10vh);">
            <div class="offset-lg-4 col-lg-4 offset-lg-4">
                <form method="POST" action="<?php echo base_url('cms/_acoes/login')?>" class="form-login border border-info">
                    <h2 class="text-center">Login Form</h2>
                    <div class="row">
                        <div class="col-lg form-group">
                            <label for="login">Login </label>
                            <input type="text" name="login" class="form-control" id="login" aria-describedby="emailHelp"
                                placeholder="nome.ultimosobrenome" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control"
                                autocomplete="nocomplete" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <button type="submit" class="btn btn-block btn-info">Envia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="_acoes/logout" class="btn btn-primary">Deslogar</a>
    <?php
        require_once __DIR__. './../content/_js.php'; 
    ?>
</body>

</html>