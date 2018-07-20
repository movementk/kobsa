<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- Main Content Start -->
    <main id="content">
        <div class="jumbotron">
            <div class="visual-slider">
                <div class="details">
                    <img src="/assets/image/main/bg_md_jumbo.jpg" class="d-none d-md-block d-xl-none jumbo-bg img-fluid" alt="">
                    <img src="/assets/image/main/bg_xl_jumbo.jpg" class="d-none d-xl-block jumbo-bg img-fluid" alt="">
                    <div class="v-align">
                        <div class="table-box">
                            <div>
                                <small>생물안전분야의 밝은 미래</small>
                                <h2>
                                    For a better future in the field of biosecurity
                                </h2>
                                <p>
                                    한국생물안전협회는 국내 생물안전에 대한 법률적
                                    요구에 대응하고, 선진화를 통하여 관련산업의 지속적
                                    발전을 위해 힘쓰고 있습니다
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="d-none d-md-block">
                    <img src="/assets/image/main/img_md_slider01.jpg" class="d-md-block d-xl-none img-fluid" alt="">
                    <img src="/assets/image/main/img_xl_slider01.jpg" class="d-none d-xl-block img-fluid" alt="">
                </figure>
            </div>
            <div class="visual-slider">
                <div class="details">
                    <img src="/assets/image/main/bg_md_jumbo.jpg" class="d-none d-md-block d-xl-none jumbo-bg img-fluid" alt="">
                    <img src="/assets/image/main/bg_xl_jumbo.jpg" class="d-none d-xl-block jumbo-bg img-fluid" alt="">
                    <div class="v-align">
                        <div class="table-box">
                            <div>
                                <small>생물안전분야의 밝은 미래</small>
                                <h2>
                                    For a better future in the field of biosecurity
                                </h2>
                                <p>
                                    한국생물안전협회는 국내 생물안전에 대한 법률적
                                    요구에 대응하고, 선진화를 통하여 관련산업의 지속적
                                    발전을 위해 힘쓰고 있습니다
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="d-none d-md-block">
                    <img src="/assets/image/main/img_md_slider01.jpg" class="d-md-block d-xl-none img-fluid" alt="">
                    <img src="/assets/image/main/img_xl_slider01.jpg" class="d-none d-xl-block img-fluid" alt="">
                </figure>
            </div>
            <div class="visual-slider">
                <div class="details">
                    <img src="/assets/image/main/bg_md_jumbo.jpg" class="d-none d-md-block d-xl-none jumbo-bg img-fluid" alt="">
                    <img src="/assets/image/main/bg_xl_jumbo.jpg" class="d-none d-xl-block jumbo-bg img-fluid" alt="">
                    <div class="v-align">
                        <div class="table-box">
                            <div>
                                <small>생물안전분야의 밝은 미래</small>
                                <h2>
                                    For a better future in the field of biosecurity
                                </h2>
                                <p>
                                    한국생물안전협회는 국내 생물안전에 대한 법률적
                                    요구에 대응하고, 선진화를 통하여 관련산업의 지속적
                                    발전을 위해 힘쓰고 있습니다
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="d-none d-md-block">
                    <img src="/assets/image/main/img_md_slider01.jpg" class="d-md-block d-xl-none img-fluid" alt="">
                    <img src="/assets/image/main/img_xl_slider01.jpg" class="d-none d-xl-block img-fluid" alt="">
                </figure>
            </div>
        </div>
        <div class="container">
            
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
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

            // visual slider
            $(window).ready(function(){
                $('.jumbotron').slick({
                    fade: true,
                    infinite: true,
                    speed: 1000,
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
        })(jQuery);
    </script>
</body>
</html>