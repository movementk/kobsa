<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body class="sub">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- page-header -->
    <div class="page-header">
        <small>협회소개</small>
        <h3 class="page-title">ASSOCIATION<br class="d-md-none"> INTRODUCE</h3>
    </div>
    
    <!-- Sub Content Start -->
    <main id="content" class="">
        <div class="container">
            <section>
                <!-- 서브 공통 페이지 타이틀 -->
                <div class="section-header">
                    <h4>국내외 법규, 지침, 가이드라인</h4>
                </div>
                <!-- 서브 공통 페이지 내용 -->
                <div class="section-content">
                    
                </div>
            </section>
            
            <!-- 검색영역 -->
            <h2 class="ex-title">검색영역</h2>
            <div class="search-form">
                <form action="#">
                    <div class="form-group">
                        <select class="form-control">
                            <option>선택</option>
                        </select>
                        <input type="text" id="board-search" class="form-control" placeholder="검색어를 입력해주세요">
                        <label for="board-search" class="sr-only">검색어입력</label>
                    </div>
                    <button type="submit" class="btn sub-search">
                        <i class="icon-search-1">
                            <span class="sr-only">검색버튼</span>
                        </i>
                    </button>
                </form>
            </div>
            
            <br><br><br>
            
            <!-- 페이징 -->
            <h2 class="ex-title">페이징</h2>
            <nav class="paging" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item first">
                        <a class="page-link" href="#" aria-label="Previous">
                            <i class="icon-angle-double-left">
                                <span class="sr-only">첫번째페이지</span>
                            </i>
                        </a>
                    </li>
                    <li class="page-item prev">
                        <a class="page-link" href="#" aria-label="Previous">
                            <i class="icon-angle-left">
                                <span class="sr-only">이전페이지</span>
                            </i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item next">
                        <a class="page-link" href="#" aria-label="Next">
                            <i class="icon-angle-right">
                                <span class="sr-only">다음페이지</span>
                            </i>
                        </a>
                    </li>
                    <li class="page-item last">
                        <a class="page-link" href="#" aria-label="Next">
                            <i class="icon-angle-double-right">
                                <span class="sr-only">마지막페이지</span>
                            </i>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <br><br><br>
            
            <!-- 게시판 리스트 -->
            <h2 class="ex-title">게시판 리스트</h2>
            <article class="board-list">
                <div class="board-head d-none d-xl-block">
                    <ul>
                        <li class="num">No.</li>
                        <li class="subject">제목</li>
                        <li class="attach">첨부파일</li>
                        <li class="date">등록일</li>
                        <li class="hit">조회</li>
                    </ul>
                </div>
                <div class="board-body">
                    <ol>
                        <li>
                            <ul>
                                <li class="d-none d-xl-block num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                    </a>
                                </li>
                                <li class="d-none d-xl-block attach">
                                    <p class="icon-attach">
                                        <img src="/assets/images/sub/icon_attach.gif" alt="첨부파일 아이콘">
                                    </p>
                                </li>
                                <li class="date">
                                    <dl>
                                        <dt class="d-xl-none">등록일</dt>
                                        <dd>2017-08-01</dd>
                                    </dl>
                                </li>
                                <li class="hit">
                                    <dl>
                                        <dt class="d-xl-none">조회수</dt>
                                        <dd>123</dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="d-none d-xl-block num">123</li>
                                <li class="subject">
                                    <a href="#">
                                        A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                    </a>
                                </li>
                                <li class="d-none d-xl-block attach">
                                    <p class="icon-attach">
                                        <img src="/assets/images/sub/icon_attach.gif" alt="첨부파일 아이콘">
                                    </p>
                                </li>
                                <li class="date">
                                    <dl>
                                        <dt class="d-xl-none">등록일</dt>
                                        <dd>2017-08-01</dd>
                                    </dl>
                                </li>
                                <li class="hit">
                                    <dl>
                                        <dt class="d-xl-none">조회수</dt>
                                        <dd>123</dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </article>
            
            <br><br><br>
            
            <!-- 게시판 뷰 -->
            <h2 class="ex-title">게시판 뷰</h2>
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
            
            <br><br><br>
            
            <!-- 버튼종류 -->
            <h2 class="ex-title">버튼 종류</h2>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-md btn-blue" role="button">버튼1</a>
                </p>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
