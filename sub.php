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
                </p><br>
                <p>
                	<a href="#" class="btn btn-sm btn-white" role="button">이전글</a>
                	<a href="#" class="btn btn-sm btn-white" role="button">다음글</a>
                	<a href="#" class="btn btn-sm btn-sm-bl" role="button">목록</a>
                </p>
            </div>
            
            <br><br><br>
            
            <!-- 코멘트 작성 -->
            <h2 class="ex-title">코멘트 작성</h2>
            <article class="comment-area">
				<h3>토론의견 작성</h3>
				<form action="#">
					<div class="comment-write">
						<div class="write">
							<div class="form-group">
								<textarea id="comment" class="form-control" placeholder="댓글을 입력해 주세요"></textarea>
								<label for="comment" class="sr-only"></label>
								<button type="submit" class="btn btn-gray">등록</button>
							</div>
						</div>
						<p class="comment-num">총 <i>5</i>개의 의견이 있습니다.</p>
					</div>
					<div class="article-content">
						<ul class="comment-list">
							<li>
								<div class="info">
									<strong>xhdfhdlalwl</strong>
									<p class="date">2018.08.12</p>
								</div>
								<div class="details">
									<p>좋은 의견입니다.좋은 의견입니다.좋은 의견입니다.좋은 의견입니다.좋은 의견입니다.좋은 의견입니다.좋은 의견입니다.좋은 의견입니다.좋은 의견입니다.좋은 의견입니다.</p>
									<ul class="modify-list">
										<li><a href="#">댓글</a></li>
										<li><a href="#">수정</a></li>
										<li><a href="#" class="delete">삭제</a></li>
									</ul>
								</div>
								<ul class="reply">
									<li>
										<div class="reply-wrap">
											<div class="info">
												<strong>홍길동</strong>
												<p class="date">2018.08.12</p>
											</div>
											<div class="details">
												<p>좋아요</p>
												<ul class="modify-list">
													<li><a href="#">수정</a></li>
													<li><a href="#" class="delete">삭제</a></li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<div class="reply-wrap">
											<div class="info">
												<strong>고길동</strong>
												<p class="date">2018.08.12</p>
											</div>
											<div class="details">
												<p>잘 보고 갑니다. 앞으로도 좋은 제안 부탁드립니다좋은제안이네요..잘 보고 갑니다. 앞으로도 좋은 제안 부탁드립니다~~~~</p>
												<ul class="modify-list">
													<li><a href="#">수정</a></li>
													<li><a href="#" class="delete">삭제</a></li>
												</ul>
											</div>
										</div>	
									</li>
									<li>
										<div class="write">
											<div class="form-group">
												<textarea id="comment" class="form-control" placeholder="댓글을 입력해 주세요"></textarea>
												<label for="comment" class="sr-only"></label>
												<button type="submit" class="btn btn-gray">등록</button>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li>
								<div class="info">
									<strong>xhdfhdlalwl</strong>
									<p class="date">2018.08.12</p>
								</div>
								<div class="details">
									<p>좋은 의견입니다.</p>
									<ul class="modify-list">
										<li><a href="#">수정</a></li>
										<li><a href="#" class="delete">삭제</a></li>
									</ul>
								</div>
							</li>
							<li>
								<div class="info">
									<strong>xhdfhdlalwl</strong>
									<p class="date">2018.08.12</p>
								</div>
								<div class="details">
									<p>좋은 의견입니다.</p>
									<ul class="modify-list">
										<li><a href="#">수정</a></li>
										<li><a href="#" class="delete">삭제</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</form>
			</article>
            
            <br><br><br>
            
            <!-- sub-title -->
            <h2 class="ex-title">제목</h2>
            <h3 class="sub-title">설립 배경</h3>
            
            <br><br><br>
            
            <!-- table type-1 -->
            <h2 class="ex-title">테이블 type-1</h2>
            <div class="table-wrap">
				<table class="table-type-1">
					<thead>
						<tr>
							<th>구분</th>
							<th>성명</th>
							<th>소속</th>
							<th>직책</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>회장</td>
							<td>장원종</td>
							<td>건국대학교 의학전문대학원</td>
							<td>교수</td>
						</tr>
						<tr>
							<td>수석부회장</td>
							<td>차형철</td>
							<td>씨애치씨랩</td>
							<td>대표이사</td>
						</tr>
						<tr>
							<td rowspan="4">부회장</td>
							<td>김영득</td>
							<td>인덕대학교 </td>
							<td>교수</td>
						</tr>
						<tr>
							<td>김용학</td>
							<td>㈜녹십자이엠</td>
							<td>상무이사</td>
						</tr>
						<tr>
							<td>이명식</td>
							<td>㈜웃샘</td>
							<td>대표이사</td>
						</tr>
						<tr>
							<td>장경수</td>
							<td>부산가톨릭대학교</td>
							<td>교수</td>
						</tr>
						<tr>
							<td rowspan="2">감사</td>
							<td>김미나</td>
							<td>울산대학교</td>
							<td>교수</td>
						</tr>
						<tr>
							<td>오태권</td>
							<td>㈜셀리드</td>
							<td>연구소장</td>
						</tr>
					</tbody>
				</table>
			</div>
       		
       		<br><br><br>
       		
      		<!-- tab-menu -->
            <h2 class="ex-title">텝메뉴</h2>
			<nav class="tab-wrap">
				<div class="tab-menu">
					<ul>
						<li class="active"><a href="#">생물안전교육</a></li>
						<li><a href="#">생물안전관리</a></li>
					</ul>
				</div>
				<div class="sub-menu">
					<ul>
						<li class="on"><a href="#">민간용역사업</a></li>
						<li><a href="#">정부용역사업</a></li>
						<li><a href="#">국제용역사업</a></li>
						<li><a href="#">기업인증기준 제정</a></li>
					</ul>
				</div>
			</nav>
       		
       		<br><br><br>
       		
      		<!-- number-list -->
            <h2 class="ex-title">숫자 리스트</h2>
            <ol class="number-list">
            	<li>
            		<span>1</span>
            		<h3>제1회 생물안전·생물보안을 위한 국제 컨퍼런스 및 제1차 한국생물안전협회 연계회의</h3>
            		<p>
            			관련 공무원, 관련 분야 교수, 의생명과학 연구기관 연구원 및 생물안전관리 담당자, 시설 및 장비 엔지니어, 생물안전연구시설 컨설팅 및 관련 업계 종사자.
            		</p>
            		<small>(2009년 9월 14일)</small>
            	<li>
            		<span>2</span>
            		<h3>WHO 필리핀 NTRL(National Tuberculosis Reference Laboratory) BL3 실험실 인증 용역</h3>
            		<small>(2011년 10월 15일~2012년 4월 30일) </small>
            	</li>
            	<li>
            		<span>3</span>
            		<h3>International Biological Safety Workshop 국제 생물안전 워크숍</h3>
            		<small>
            			(실험실 생물안전 및 생물밀폐 엔지니어링, 생물안전 프로그램 개발을 포함하는 최신의 생물안전과 생물보안 기술 및 국제 동향) (2012년 7월 18일) 
            		</small>
            	</li>
            </ol>
            
            <br><br><br>
       		
      		<!-- attention -->
            <h2 class="ex-title">주의</h2>
            <dl class="s-attention">
            	<dt>관련법률</dt>
            	<dd>유전자변형생물체의 국가간 이동 등에 관한 법률 및 통합고시</dd>
            </dl>
            <dl class="attention">
            	<dt>생물관련 비전공자</dt>
            	<dd>생물안전관리자 자격증</dd>
            </dl>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
