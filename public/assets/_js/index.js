$(document).ready(function(){
    carregaVitrine();
});

function carregaVitrine() {
    $('#carousel-vitrine').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1
    })
}