<!-- Header -->
<header id="header">
    <div class="container-fluid">
        <div class="header-wrap">
            <h1 class="logo">
                <a href="/"><img src="/assets/images/logo.jpg" alt="한국생물안전협회"></a>
            </h1>
            <div class="quick">
                <div class="pathogen-search">
                    <a href="#" class="btn btn-pathogen" data-toggle="modal" data-target="#pathogenModal" role="button">병원체 검색</a>
                </div>
                <div class="top-menu d-none d-xl-block">
                    <ul>
                        <li><a href="#">LOGIN</a></li>
                        <li><a href="#">JOIN</a></li>
                    </ul>
                    <div class="global-search">
                        <form action="#">
                            <div class="form-group d-none">
                                <input type="text" id="global-search" class="form-control" placeholder="검색어를 입력하세요">
                                <label for="global-search" class="sr-only">전체검색</label>
                            </div>
                            <a href="javascript:;" class="btn btn-search default-btn" role="button">
                                <i class="icon-search-1">
                                    <span class="sr-only">검색하기</span>
                                </i>
                            </a>
                            <button type="submit" class="btn btn-search event-btn">
                                <i class="icon-search-1">
                                    <span class="sr-only">검색하기</span>
                                </i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <nav id="gnb" class="d-none d-xl-block">
                <ul>
                    <li>
                        <a href="/introduce/greeting.php">협회소개</a>
                        <ul>
                            <li><a href="/introduce/greeting.php">협회장 인사말<span></span></a></li>
                            <li><a href="/introduce/association.php">협회소개<span></span></a></li>
                            <li><a href="/introduce/member.php">회원사소개<span></span></a></li>
                            <li><a href="/introduce/organization.php">조직구성<span></span></a></li>
                            <li><a href="/introduce/professional.php">주요사업<span></span></a></li>
                            <li><a href="/introduce/location.php">찾아오시는길<span></span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/legislation/guide_list.php">법령, 자료실</a>
                        <ul>
                            <li><a href="/legislation/guide_list.php">국내외 법규,<br> 지침, 가이드라인<span></span></a></li>
                            <li><a href="/legislation/workshop_list.php">KOBSA 워크샵 자료<span></span></a></li>
                            <li><a href="/legislation/technology_list.php">KOBSA 기술 자료<span></span></a></li>
                            <li><a href="/legislation/pathogen_list.php">병원체 / 등급시설<span></span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/trend/notification_list.php">공지 및 동향</a>
                        <ul>
                            <li><a href="/trend/notification_list.php">공지사항<span></span></a></li>
                            <li><a href="/trend/bulletin_list.php">게시판<span></span></a></li>
                            <li><a href="/trend/faq_list.php">FAQ<span></span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">관련기관</a>
                        <ul>
                            <li><a href="#">정부기관, 협회 등<span></span></a></li>
                            <li><a href="#">국내외 동향<span></span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">생물안전 전문기업소개</a>
                        <ul>
                            <li><a href="#">설계, 시공 전문<span></span></a></li>
                            <li><a href="#">시설 유지보수전문<span></span></a></li>
                            <li><a href="#">장비 및 소모품 전문<span></span></a></li>
                            <li><a href="#">멸균 및 검증 전문<span></span></a></li>
                        </ul>
                    </li>
                    <li class="ibc">
                        <a href="/ibc/ibc_member.php" role="button">IBC네트워크</a>
                        <ul>
                            <li><a href="/ibc/ibc_member.php">IBC위원목록</a></li>
                            <li><a href="/ibc/notice_list.php">공지사항</a></li>
                            <li><a href="/ibc/faq_list.php">질의응답</a></li>
                            <li><a href="/ibc/reference_list.php">자료실</a></li>
                        </ul>
                    </li>
                </ul>
                <!--<div class="ibc">
                    <a href="/ibc/ibc_member.php" class="btn btn-ibc" role="button">IBC네트워크</a>
                </div>-->
            </nav>
            <button type="button" class="btn btn-nav d-xl-none">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="sr-only">네비열기</span>
            </button>
        </div>
    </div>
</header>

<!-- nav -->
<nav id="nav">
    <div class="backdrop"></div>
    <div class="nav-wrap">
        <div class="nav-head">
            <div class="nav-top">
                <form action="#">
                    <div class="nav-global-search">
                        <div class="form-group">
                            <input type="text" id="nav-global-search" class="form-control" placeholder="검색어를 입력하세요">
                            <label for="nav-global-search" class="sr-only">검색영역</label>
                        </div>
                        <button type="submit" class="btn nav-btn-search">
                            <i class="icon-search-1">
                                <span class="sr-only">검색버튼</span>
                            </i>
                        </button>
                    </div>
                </form>
                <button type="button" class="btn btn-close">
                    <img src="/assets/images/btn_close.jpg" alt="">
                    <span class="sr-only">네비닫기</span>
                </button>
            </div>
            <div class="member">
                <ul>
                    <li><a href="#">로그인</a></li>
                    <li><a href="#">회원가입</a></li>
                </ul>
            </div>
        </div>
        <div class="nav-body">
            <ul>
                <li>
                    <a href="#">협회소개</a>
                    <ul>
                        <li><a href="/introduce/greeting.php">협회장 인사말</a></li>
                        <li><a href="/introduce/association.php">협회소개</a></li>
                        <li><a href="/introduce/member.php">회원사소개</a></li>
                        <li><a href="/introduce/organization.php">조직구성</a></li>
                        <li><a href="/introduce/professional.php">주요사업</a></li>
                        <li><a href="/introduce/location.php">찾아오시는길</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">법령, 자료실</a>
                    <ul>
                        <li><a href="/legislation/guide_list.php">국내외 법규, 지침, 가이드라인</a></li>
                        <li><a href="/legislation/workshop_list.php">KOBSA 워크샵 자료</a></li>
                        <li><a href="/legislation/technology_list.php">KOBSA 기술 자료</a></li>
                        <li><a href="/legislation/pathogen_list.php">병원체 / 등급시설</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">공지 및 동향</a>
                    <ul>
                        <li><a href="/trend/notification_list.php">공지사항</a></li>
                        <li><a href="/trend/bulletin_list.php">게시판</a></li>
                        <li><a href="/trend/faq_list.php">FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">관련기관</a>
                    <ul>
                        <li><a href="#">정부기관, 협회 등</a></li>
                            <li><a href="#">국내외 동향</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">생물안전 전문기업소개</a>
                    <ul>
                        <li><a href="/etc_company/construct_list.php">설계, 시공 전문</a></li>
                        <li><a href="#">시설 유지보수전문</a></li>
                        <li><a href="#">장비 및 소모품 전문</a></li>
                        <li><a href="#">멸균 및 검증 전문</a></li>
                    </ul>
                </li>
                <li class="ibc">
                    <a href="/ibc/ibc_member.php">IBC네트워크</a>
                </li>
            </ul>
        </div>
    </div>
</nav>