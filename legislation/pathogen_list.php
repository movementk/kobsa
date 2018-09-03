<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/legislation.css">
</head>
<body class="sub legislation">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/legislation/_pageheader.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content" class="common-list">
        <div class="container">
            <!-- lnb-list -->
            <div class="lnb-list">
                <ul>
                    <li class="space"><a href="/legislation/guide_list.php">국내외 법규, 지침,<br class="d-md-none">가이드라인</a></li>
                    <li><a href="/legislation/workshop_list.php">KOBSA 교육자료</a></li>
                    <li><a href="/legislation/technology_list.php">KOBSA 기술 ∙ 동향</a></li>
                    <li class="active"><a href="/legislation/pathogen_list.php">병원체 / 등급시설</a></li>
                </ul>
            </div>
            
            <section class="pathogen-list">
                <div class="section-header">
                    <h4>병원체 / 등급시설</h4>
                </div>
                <div class="section-content">
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
                    <article class="board-list">
                        <div class="board-head d-none d-xl-block">
                            <ul>
                                <li class="num">No.</li>
                                <li class="subject">제목</li>
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
                                            <a href="/legislation/pathogen_view.php">
                                                A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                            </a>
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
                                            <a href="/legislation/pathogen_view.php">
                                                A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                            </a>
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
                                            <a href="/legislation/pathogen_view.php">
                                                A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                            </a>
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
                                            <a href="/legislation/pathogen_view.php">
                                                A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                            </a>
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
                                            <a href="/legislation/pathogen_view.php">
                                                A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                            </a>
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
                                            <a href="/legislation/pathogen_view.php">
                                                A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                            </a>
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
                                            <a href="/legislation/pathogen_view.php">
                                                A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                            </a>
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
                                            <a href="/legislation/pathogen_view.php">
                                                A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                            </a>
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
                                            <a href="/legislation/pathogen_view.php">
                                                A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                            </a>
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
                                            <a href="/legislation/pathogen_view.php">
                                                A-PBA(아시아-태평양생물안전협회) 13차 정기 생물안전컨퍼런스 안내
                                            </a>
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
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>