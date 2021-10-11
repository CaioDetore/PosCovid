jQuery(document).ready(function($)
{
    //FIXED HEADER
    window.onscroll = function() 
    {
        if(window.pageYOffset > 0) {
            $('#header').addClass("active");
        } else {
            $('#header').removeClass("active");
        }
    };

    //OWL
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: false,
        autoplayTimeout: 6000,
        dots: true,
        lazyLoad: true,
        nav: false,
        responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 2,
        },
        },
    });

});