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
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>