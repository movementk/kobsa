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
            <section class="confirm">
                <div class="section-header">
                    <h4>아이디/비밀번호찾기</h4>
                    <p>회원 가입시 입력하신 이름 &amp; 이메일 주소를 입력해주세요 </p>
                </div>
                <div class="section-content">
                    <form action="#">
                        <div class="login-form">
                            <div class="form-group">
                                <input type="text" id="u-name" class="form-control" placeholder="이름을 입력하세요">
                                <label for="u-name" class="sr-only">이름 입력</label>
                                <input type="email" id="u-mail" class="form-control" placeholder="이메일 주소를 입력하세요">
                                <label for="u-mail" class="sr-only">이메일 입력</label>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="button" class="btn btn-lg btn-orange">확인</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>