<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/ibc.css">
</head>
<body class="sub ibc">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ibc/_pageheader.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content" class="common-view">
        <div class="container">
            <!-- lnb-list -->
            <div class="lnb-list">
                <ul>
                    <li><a href="/ibc/ibc_member.php">IBC위원목록</a></li>
                    <li><a href="/ibc/notice_list.php">공지사항</a></li>
					<li><a href="/ibc/faq_list.php">FAQ</a></li>
					<li class="active"><a href="/ibc/reference_list.php">자료실</a></li>
                </ul>
            </div>
            
            <section class="reference-view">
                <div class="section-header">
                    <h4>자료실</h4>
                </div>
                <div class="section-content">
                    <article class="board-view">
                        <div class="view-head">
                            <h5>[공지]생물안전시설 기업인증기준(안) 검토의견 제출 안내</h5>
                            <ul>
                                <li>
                                    <dl>
                                        <dt>조회</dt>
                                        <dd>1,524</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>작성일</dt>
                                        <dd>2017.06.12</dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                        <div class="view-content">
                            안녕하세요 한국생물안전협회입니다.<br><br>
                            우리 협회는 생물안전 전문기업(회원사)의 기술력
                            향상과 공공성 확보를 위하여 생물안전 시설 분야별
                            기업인증 기준을 마련하고자 합니다. <br><br>
                            첨부와 같이 생물안전 시설 시공, 유지관리 및 검증, 
                            멸균 및 검증 분야의 기업 인증기준(안)을 
                            제시하오니 관련 기관 및 전문가 여러분께서 검토 
                            의견을 적극 제출해주시기 바랍니다.<br><br>
                            검토의견을 수렴하여 2018년 연내에 생물안전 시설 
                            기업 인증기준 최종 공지 할 예정입니다.<br><br>
                            검토의견 제출 안내<br>
                            제출기간 : 2018년 4월 23일 ~ 7월 20일까지 
                            제출방법 : 첨부 '검토의견서' 양식에 작성하여 
                            kobsa@hanmail.net 메일 접수 
                            관련문의 : 협회 메일 또는 070-4607-2910 <br><br>
                            첨부 : 협회 공문, 기준(안), 검토의견서 양식<br><br>
                            감사합니다.
                        </div>
                        <dl class="attach">
                            <dt>첨부파일</dt>
                            <dd>
                                <ul>
                                    <li><a href="#">첨부된 파일명.pdf</a></li>
                                    <li><a href="#">첨부된 파일명.doc</a></li>
                                    <li><a href="#">첨부된 파일명.hwp</a></li>
                                </ul>
                            </dd>
                        </dl>
                        <div class="page-link">
                            <ul>
                                <li class="prev">
                                    <dl>
                                        <dt>이전글</dt>
                                        <dd>
                                            <a href="#">협회 '생물안전관리자' 민간자격증 안내</a>
                                        </dd>
                                    </dl>
                                </li>
                                <li class="next">
                                    <dl>
                                        <dt>다음글</dt>
                                        <dd>
                                            <a href="#">[KOBSA] 정회원 가입 안내</a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <div class="btn-area">
                        <p>
                            <a href="/ibc/reference_list.php" class="btn btn-md btn-blue" role="button">목록</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>