(function($){
    // visual slider
    $(window).ready(function(){
        $('.jumbotron').slick({
            fade: true,
            autoplay: true,
            autoplaySpeed: 7000,
            arrows: true,
            dots: true,
            prevArrow: '<button class="slick-prev" type="button"><i class="icon-left"></i></button>',
            nextArrow: '<button class="slick-next" type="button"><i class="icon-right"></i></button>'
        });
    });
    $('.jumbotron').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide.visual-slider').removeClass('action');
        setTimeout(function (){ 
            $('.slick-active.visual-slider').addClass('action'); 
        });
    });
    $('.jumbotron').on('init', function(event,slick){
        setTimeout(function(){ 
            $('.slick-active.visual-slider').addClass('action'); 
        });
    });

    // partner-slider
    $(window).ready(function(){
        $('.partner-slider').slick({
            dots: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplay: true,
            autoplaySpeed: 7000,
            arrows: false,
            responsive: [
                {
                breakpoint: 992,
                settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        autoplay: true,
                        autoplaySpeed: 2000,
                    }
                },
                {
                breakpoint: 768,
                settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        autoplay: true,
                        autoplaySpeed: 2000,
                    }
                }
            ]
        });
    });
})(jQuery);