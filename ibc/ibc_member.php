<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/ibc.css">
</head>
<body class="sub ibc">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/ibc/_pageheader.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <!-- lnb-list -->
            <div class="lnb-list">
                <ul>
                    <li class="active"><a href="/ibc/ibc_member.php">IBC위원목록</a></li>
                    <li><a href="/ibc/notice_list.php">공지사항</a></li>
					<li><a href="/ibc/faq_list.php">FAQ</a></li>
					<li><a href="/ibc/reference_list.php">자료실</a></li>
                </ul>
            </div>
            
            <section class="ibc-member">
                <div class="section-header">
                    <h4>IBC위원목록</h4>
                </div>
                <div class="section-content">
                    <ul>
                        <li>
                            <div>
                                <h5>
                                    <a href="#" data-toggle="modal" data-target="#memberPopup">
                                        홍길동 <small>회장</small>
                                    </a>
                                </h5>
                                <p>content</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h5>
                                    <a href="#" data-toggle="modal" data-target="#memberPopup">
                                        홍길동 <small>회장</small>
                                    </a>
                                </h5>
                                <p>content</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h5>
                                    <a href="#" data-toggle="modal" data-target="#memberPopup">
                                        홍길동 <small>회장</small>
                                    </a>
                                </h5>
                                <p>content</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h5>
                                    <a href="#" data-toggle="modal" data-target="#memberPopup">
                                        홍길동 <small>회장</small>
                                    </a>
                                </h5>
                                <p>content</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h5>
                                    <a href="#" data-toggle="modal" data-target="#memberPopup">
                                        홍길동 <small>회장</small>
                                    </a>
                                </h5>
                                <p>content</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </main>
    
    <!-- member-popup -->
    <div class="modal fade member-popup" id="memberPopup" tabindex="-1" role="dialog" aria-labelledby="memberPopupTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="memberPopupTitle">IBC위원목록</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-wrap">
                    	<table class="table">
                    		<tbody>
                    			<tr>
                    				<th>아이디(닉네임)</th>
                    				<td>홍길동</td>
                    			</tr>
                    			<tr>
                    				<th>성명</th>
                    				<td>홍길동</td>
                    			</tr>
                    			<tr>
                    				<th>생물안전위원회<br> 소속 기관명</th>
                    				<td>생물안전관리책임자 </td>
                    			</tr>
                    			<tr>
                    				<th>역할</th>
                    				<td>생물안전관리책임자생물안전관리책임자 </td>
                    			</tr>
                    			<tr>
                    				<th>소속기관</th>
                    				<td>우정바이오</td>
                    			</tr>
                    			<tr>
                    				<th>직책</th>
                    				<td>과장</td>
                    			</tr>
                    			<tr>
                    				<th>전화번호(핸드폰)</th>
                    				<td><a href="tel:01012134567">010-1213-4567</a></td>
                    			</tr>
                    			<tr>
                    				<th>전화번호(사무실)</th>
                    				<td><a href="tel:021234567">02-123-4567</a></td>
                    			</tr>
                    			<tr>
                    				<th>전자메일</th>
                    				<td><a href="mailto:bbb123@naver.com">bbb123@naver.com</a></td>
                    			</tr>
                    			<tr>
                    				<th>전문분야</th>
                    				<td>환경과학, 시설분야</td>
                    			</tr>
                    		</tbody>
                    	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>