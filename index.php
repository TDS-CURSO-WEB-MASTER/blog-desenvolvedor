<?php 
    /* 
    * https://www.php.net/manual/pt_BR/function.require-once.php 
    * https://www.php.net/manual/pt_BR/function.include-once.php
    * https://www.php.net/manual/pt_BR/language.constants.predefined.php
    */
    require_once __DIR__. './_connect/database.php';
    /* 
    * require __DIR__.'./../_connect/database.php'; 
    * include_once __DIR__.'./../_connect/database.php';
    * include __DIR__.'./../_connect/database.php'; 
    */ 
?>
<!doctype html>
<html lang="pt-br">

<head>
    <?php require_once __DIR__.'./content/_head.php'?>
</head>
<link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />

<body>
    <?php require_once __DIR__.'./content/_nav.php'?>
    <!-- SEÇÃO VITRINE -->
    <section id="vitrine">
        <div id="carousel-vitrine" class="owl-carousel owl-theme">
            <div class="item"><img src="assets/_images/Layer 12.png" class="img-fluid" /></div>
            <div class="item"><img src="assets/_images/Layer 12.png" class="img-fluid" /></div>
        </div>
    </section>
    <!-- SEÇÃO VITRINE -->
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg pb-4">
                    <div class="noticia d-block overflow-hidden" style="height: 250px;">
                        <img src="assets/_images/Layer 3.png" class="img-fluid" />
                    </div>
                    <h4 class="pt-serif-regular">Donec elementum dui semper, pretium dui quis, pretium nisl. Nunc
                        quis ornare odio.</h4>
                </div>
                <div class="col-lg pb-4">
                    <div class="noticia d-block overflow-hidden" style="height: 250px;">
                        <img src="assets/_images/Layer 4.png" class="img-fluid" />
                    </div>
                    <h4 class="pt-serif-regular">Maecenas quis lobortis nunc. Nullam sit amet augue vel odio congue
                        vulputate a ut nisi.</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="noticia d-block overflow-hidden" style="height: 400px;">
                        <span class="categoria"
                            style="background-color: rgba(<?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, 0.75)">Teste</span>
                        <img src="assets/_images/Layer 11.png" class="img-object-fit" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg pb-4">
                    <div class="noticia d-block overflow-hidden" style="height: 250px;">
                        <span class="categoria"
                            style="background-color: rgba(<?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, 0.75)">Teste</span>
                        <img src="assets/_images/Layer 5.png" class="img-object-fit" />
                    </div>
                    <h4 class="pt-serif-regular">Donec elementum dui semper, pretium dui quis, pretium nisl. Nunc quis
                        ornare odio.</h4>
                    <small>11 September 2016 | <a href="#">John Doe</a></small>
                </div>
                <div class="col-lg pb-4">
                    <div class="noticia d-block overflow-hidden" style="height: 250px;">
                        <span class="categoria"
                            style="background-color: rgba(<?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, 0.75)">Teste</span>
                        <img src="assets/_images/Layer 7.png" class="img-object-fit" />
                    </div>
                    <h4 class="pt-serif-regular">Maecenas quis lobortis nunc. Nullam sit amet augue vel odio congue
                        vulputate a ut nisi.</h4>
                    <small>11 September 2016 | <a href="#">John Doe</a></small>
                </div>
                <div class="col-lg pb-4">
                    <div class="noticia d-block overflow-hidden" style="height: 250px;">
                        <span class="categoria"
                            style="background-color: rgba(<?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, 0.75)">Teste</span>
                        <img src="assets/_images/Layer 6.png" class="img-object-fit" />
                    </div>
                    <h4 class="pt-serif-regular">Sed arcu ipsum, convallis quis porttitor bibendum, convallis non enim.
                    </h4>
                    <small>11 September 2016 | <a href="#">John Doe</a></small>
                </div>
            </div>
            <div class="row">
                <div class="col-lg pb-4">
                    <div class="noticia d-block overflow-hidden" style="height: 250px;">
                        <span class="categoria"
                            style="background-color: rgba(<?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, 0.75)">Teste</span>
                        <img src="assets/_images/Layer 8.png" class="img-object-fit" />
                    </div>
                    <h4 class="pt-serif-regular">Donec elementum dui semper, pretium dui quis, pretium nisl.</h4>
                    <small>11 September 2016 | <a href="#">John Doe</a></small>
                </div>
                <div class="col-lg pb-4">
                    <div class="noticia d-block overflow-hidden" style="height: 250px;">
                        <span class="categoria"
                            style="background-color: rgba(<?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, 0.75)">Teste</span>
                        <img src="assets/_images/Layer 9.png" class="img-object-fit" />
                    </div>
                    <h4 class="pt-serif-regular">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                        posuere cubilia Curae.</h4>
                    <small>11 September 2016 | <a href="#">John Doe</a></small>
                </div>
                <div class="col-lg pb-4">
                    <div class="noticia d-block overflow-hidden" style="height: 250px;">
                        <span class="categoria"
                            style="background-color: rgba(<?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, <?php echo rand('0', '255')?>, 0.75)">Teste</span>
                        <img src="assets/_images/Layer 10.png" class="img-object-fit" />
                    </div>
                    <h4 class="pt-serif-regular">Sed arcu ipsum, convallis quis porttitor bibendum, convallis non enim.
                    </h4>
                    <small>11 September 2016 | <a href="#">John Doe</a></small>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg pb-4">
                    <div class="noticia d-block overflow-hidden" style="height: 250px;">
                        <img src="assets/_images/Layer 4 copy.png" class="img-fluid" />
                    </div>
                    <h4 class="pt-serif-regular">Donec elementum dui semper, pretium dui quis, pretium nisl. Nunc
                        quis
                        ornare odio.</h4>
                    <small>11 September 2016 | <a href="#">John Doe</a></small>
                </div>
                <div class="col-lg pb-4">
                    <div class="noticia d-block overflow-hidden" style="height: 250px;">
                        <img src="assets/_images/Layer 3 copy.png" class="img-fluid" />
                    </div>
                    <h4 class="pt-serif-regular">Maecenas quis lobortis nunc. Nullam sit amet augue vel odio congue
                        vulputate a ut nisi.</h4>
                    <small>11 September 2016 | <a href="#">John Doe</a></small>
                </div>
            </div>
        </div>
    </section>
    <?php require_once __DIR__.'./content/_secao-newsletter.php' ?>
    <?php require_once __DIR__.'./content/_footer.php'?>
    <script type="text/javascript" src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/_js/index.js"></script>
</body>

</html>