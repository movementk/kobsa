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
            <section class="terms">
                <div class="section-header">
                    <h4>회원가입</h4>
                </div>
                <div class="section-content">
                    <ol class="step-list">
                        <li class="active">
                            <b>01</b>
                            <h5>약관동의</h5>
                        </li>
                        <li>
                            <b>02</b>
                            <h5>정보입력</h5>
                        </li>
                        <li>
                            <b>03</b>
                            <h5>가입완료</h5>
                        </li>
                    </ol>
                    <article class="consent">
                        <div class="agreement">
                            <div class="consent-head">
                                <h6>이용약관</h6>
                                <label><input type="checkbox"> 약관동의</label>
                            </div>
                            <div class="consent-body">
                                내용입력
                            </div>
                        </div>
                        <div class="privacy">
                            <div class="consent-head">
                                <h6>개인정보 수집·이용</h6>
                                <label><input type="checkbox"> 약관동의</label>
                            </div>
                            <div class="consent-body">
                                내용입력
                            </div>
                        </div>
                        <label class="check-all"><input type="checkbox"> 전체 동의하기</label>
                    </article>
                    <article class="classification">
                        <ul class="row">
                            <li class="col-12 col-md-6">
                                <div class="general-member">
                                    <div class="icon-images">
                                        <figure>
                                            <img src="/assets/images/membership/ico_general_member.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="details">
                                        <h6>일반회원</h6>
                                        <p>
                                            개인회원 가입을 원하시면<br class="d-xl-none">
                                            선택해주세요
                                        </p>
                                        <div class="btn-area">
                                            <p>
                                                <a href="/membership/join.php" class="btn btn-orange btn-md" role="button">회원가입</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-12 col-md-6">
                                <div class="ibc-member">
                                    <div class="icon-images">
                                        <figure>
                                            <img src="/assets/images/membership/ico_ibc_member.jpg" alt="">
                                        </figure>
                                    </div>
                                    <div class="details">
                                        <h6>IBC 회원</h6>
                                        <p>
                                            IBC 기업회원 가입을<br class="d-xl-none">
                                            원하시면 선택해주세요
                                        </p>
                                        <div class="btn-area">
                                            <p>
                                                <a href="/membership/join.php" class="btn btn-blue btn-md" role="button">회원가입</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>