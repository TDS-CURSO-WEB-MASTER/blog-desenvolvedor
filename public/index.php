<?php 
    /* 
    * https://www.php.net/manual/pt_BR/function.require-once.php 
    * https://www.php.net/manual/pt_BR/function.include-once.php
    * https://www.php.net/manual/pt_BR/language.constants.predefined.php
    */
    require_once __DIR__. './../_connect/database.php';
    /* 
    * require __DIR__.'./../_connect/database.php'; 
    * include_once __DIR__.'./../_connect/database.php';
    * include __DIR__.'./../_connect/database.php'; 
    */ 
    ?>
<!doctype html>
<html lang="pt-br">
<?php require_once __DIR__.'./../content/_head.php'?>
<link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />

<body>
    <?php require_once __DIR__.'./../content/_nav.php'?>
    <!-- SEÇÃO VITRINE -->
    <section id="vitrine">
        <div id="carousel-vitrine" class="owl-carousel owl-theme">
            <div class="item">
                <img src="assets/_images/Layer 12.png" class="img-fluid" />
            </div>
        </div>
    </section>
    <!-- SEÇÃO VITRINE -->
    <?php require_once __DIR__.'./../content/_footer.php'?>
    <script type="text/javascript" src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/_js/index.js"></script>
</body>

</html>