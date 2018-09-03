<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/membership.css">
</head>
<body class="sub membership">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/membership/_pageheader.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">            
            <section class="success">
                <div class="section-header">
                    <h4>회원가입</h4>
                </div>
                <div class="section-content">
                    <article>
                        <h5>회원가입이 <strong>완료</strong> 되었습니다.</h5>
                        <p>
                            회원가입이 완료되었습니다.<br>
                            로그인 후 다양한 서비스를 이용하실 수 있습니다.
                        </p>
                        <div class="btn-area">
                            <p>
                                <a href="/" class="btn btn-md btn-gray" role="button">홈으로</a>
                                <a href="/membership/login.php" class="btn btn-md btn-orange" role="button">로그인 하기</a>
                            </p>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>