(function($){
    // mobile nav 관련
    $(document).on('click','#header .btn-nav', function(){
        $('body').addClass('nav-extend');
    });
    $(document).on('click', '#nav .btn-close, #nav .backdrop', function(){
        $('body').removeClass('nav-extend');
    });

    // mobile nav 메뉴 관련
    $(document).on('click', '#nav .nav-body ul > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });

    // web gnb 관련
    $(document).on('mouseenter','#gnb', function(){
        $('body').addClass('opened');
    });
    $(document).on('mouseleave','#header .header-wrap', function(){
        $('body').removeClass('opened');
    });

    // 메인 화면 resize 1200 클레스 제거
    $(window).on('load resize', function() {
        var conWidth = $('body').width();
        /*console.log(conWidth);*/
        if (conWidth >= 1199) {
            $('body').removeClass("nav-extend");
        }
    });
})(jQuery);