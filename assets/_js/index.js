$(document).ready(function(){
    carregaVitrine();
});

function carregaVitrine() {
    $('#carousel-vitrine').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        items: 1
    })
}