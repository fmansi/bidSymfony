$(document).ready(function(){
    //Chamada Slider
    $('.slider').slider();

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();

    // Chamada select destinos
    $('select').material_select();

    var swiper = new Swiper('.swiper-container', { // HTML element selector
        slidesPerView: "auto", // How many slides do we want per view? You can specify a number
        spaceBetween: 11, // Space between the slides
        freeMode: false, // Free rolling slider
        loop: true, // Swiper loops your slides, and there is no ending point
        loopedSlides: 8, // Safe option which needs to be set if you use slidesPerView: 'auto'
        autoplay: 4500,
        autoplayDisableOnInteraction: false,
        pagination: '.swiper-pagination'
    });
});