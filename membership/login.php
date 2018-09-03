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
            <section class="login">
                <div class="section-header">
                    <h4>로그인</h4>
                </div>
                <div class="section-content">
                    <form action="#">
                        <div class="login-form">
                            <div class="form-group">
                                <input type="text" id="u-id" class="form-control" placeholder="아이디를 입력하세요">
                                <label for="u-id" class="sr-only">아이디 입력</label>
                                <input type="password" id="u-pw" class="form-control" placeholder="비밀번호를 입력하세요">
                                <label for="u-pw" class="sr-only">비밀번호 입력</label>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="button" class="btn btn-lg btn-orange">로그인</button>
                                </p>
                            </div>
                            <ul class="list-user">
                                <li>
                                    <div class="form-group">
                                        <label><input type="checkbox">아이디 저장</label>
                                    </div>
                                </li>
                                <li><a href="#">회원가입</a></li>
                                <li><a href="#">아이디/비밀번호 찾기</a></li>
                            </ul>
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