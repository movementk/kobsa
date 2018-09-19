<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/ibc.css">
</head>
<body class="sub membership">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ibc/_pageheader.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <section class="pw-confirm">
                <div class="section-header">
                    <h4>비밀번호 확인</h4>
                    <p>개인정보를 보호하기위해 비밀번호를 한번 더 확인합니다.</p>  
                </div>
                <div class="section-content">
                    <form action="#">
                        <div class="login-form">
                            <div class="form-group">
                                <input type="password" id="u-pw" class="form-control" placeholder="비밀번호를 입력해주세요">
                                <label for="u-pw" class="sr-only">비밀번호 입력</label>
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