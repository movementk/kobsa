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
                    <li class="active"><a href="/ibc/notice_list.php">공지사항</a></li>
					<li><a href="/ibc/faq_list.php">질의응답</a></li>
					<li><a href="/ibc/reference_list.php">자료실</a></li>
                </ul>
            </div>
            
            <section class="notice-view">
                <div class="section-header">
                    <h4>공지사항</h4>
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
                        <div class="btn-area">
							<p>
								<a href="#" class="btn btn-sm btn-white" role="button">이전글</a>
								<a href="#" class="btn btn-sm btn-white" role="button">다음글</a>
								<a href="/ibc/notice_list.php" class="btn btn-sm btn-sm-bl" role="button">목록</a>
							</p>
						</div>
                    </article>
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
											</li>
											<li>
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
											</li>
											<li>
												<div class="write">
													<div class="form-group">
														<textarea id="comment2" class="form-control" placeholder="댓글을 입력해 주세요"></textarea>
														<label for="comment2" class="sr-only"></label>
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
												<li><a href="#">댓글</a></li>
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
											<p>잘 보고 갑니다. 앞으로도 좋은 제안 부탁드립니다좋은제안이네요..잘 보고 갑니다. 앞으로도 좋은 제안 부탁드립니다~~~~잘 보고 갑니다. 앞으로도 좋은 제안 부탁드립니다좋은제안이네요..잘 보고 갑니다. 앞으로도 좋은 제안 부탁드립니다~~~~잘 보고 갑니다. 앞으로도 좋은 제안 부탁드립니다좋은제안이네요..잘 보고 갑니다. 앞으로도 좋은 제안 부탁드립니다~~~~</p>
											<ul class="modify-list">
												<li><a href="#">댓글</a></li>
												<li><a href="#">수정</a></li>
												<li><a href="#" class="delete">삭제</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</form>
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
					</article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>