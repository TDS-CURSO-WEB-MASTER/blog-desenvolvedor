<?php 
require_once __DIR__. './../_acoes/login.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand m-0 p-2 text-blue" href="#">Blog <strong>Desenvolvedor</strong></a>
    <button class="navbar-toggler bg-blue p-2 m-2" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php 
                foreach (carregaMenu() as $value) {    
                    $url = base_url($value['caminho_modulo']);
                    echo "<li class=\"nav-item active\">
                            <a class=\"nav-link\" href=\"$url\">{$value['menu']} <span
                class=\"sr-only\">(current)</span></a>
            </li>";
            }
            ?>
        </ul>
        <ul class="list-unstyled my-2 my-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php echo carregaNomeUsuario() ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url('cms/_acoes/logout')?>">Logout</a>
                </div>
            </li>
        </ul>
        </form>
    </div>
</nav>