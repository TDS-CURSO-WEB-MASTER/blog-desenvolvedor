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
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg pb-4">
                    <img src="assets/_images/Layer 3.png" class="img-fluid" />
                </div>
                <div class="col-lg pb-4">
                    <img src="assets/_images/Layer 4.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="d-block overflow-hidden" style="height: 400px;">
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
                    <div class="d-block overflow-hidden" style="height: 250px;">
                        <img src="assets/_images/Layer 5.png" class="img-object-fit" />
                    </div>
                </div>
                <div class="col-lg pb-4">
                    <div class="d-block overflow-hidden" style="height: 250px;">
                        <img src="assets/_images/Layer 7.png" class="img-object-fit" />
                    </div>
                </div>
                <div class="col-lg pb-4">
                    <div class="d-block overflow-hidden" style="height: 250px;">
                        <img src="assets/_images/Layer 6.png" class="img-object-fit" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg pb-4">
                    <div class="d-block overflow-hidden" style="height: 250px;">
                        <img src="assets/_images/Layer 8.png" class="img-object-fit" />
                    </div>
                </div>
                <div class="col-lg pb-4">
                    <div class="d-block overflow-hidden" style="height: 250px;">
                        <img src="assets/_images/Layer 9.png" class="img-object-fit" />
                    </div>
                </div>
                <div class="col-lg pb-4">
                    <div class="d-block overflow-hidden" style="height: 250px;">
                        <img src="assets/_images/Layer 10.png" class="img-object-fit" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg pb-4">
                    <img src="assets/_images/Layer 3 copy.png" class="img-fluid" />
                </div>
                <div class="col-lg pb-4">
                    <img src="assets/_images/Layer 4 copy.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <section id="newsletter">
        <div class="jumbotron jumbotron-fluid bg-transparent text-center mb-0">
            <div class="container">
                <h3 class="display-4 text-white">Newsletter</h3>
                <p class="text-white">Donec elementum dui semper, pretium dui quis, pretium nisl</p>
                <div class="row">
                    <div class="offset-lg-3 col-lg-6 offset-lg-3">
                        <div class="input-group mb-3 agrupamento-newsletter">
                            <input type="text" class="form-control" placeholder="email@example.com"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-newsletter btn-light" type="button"
                                    id="button-addon2">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once __DIR__.'./../content/_footer.php'?>
    <script type="text/javascript" src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/_js/index.js"></script>
</body>

</html>