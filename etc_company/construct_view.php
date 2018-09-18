<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/etc_company.css">
</head>
<body class="sub etc-company">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/etc_company/_pageheader.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <!-- lnb-list -->
            <div class="lnb-list">
                <ul>
                    <li class="active"><a href="/etc_company/construct_list.php">설계,시공</a></li>
                    <li><a href="#">유지보수</a></li>
					<li><a href="#">장비,소모품</a></li>
					<li><a href="#">멸균</a></li>
                    <li><a href="#">기타</a></li>
                </ul>
            </div>
            
            <section class="construct-view">
                <div class="section-header">
                    <h4>설계, 시공</h4>
                </div>
                <div class="section-content">
                    <article>
                    	<div class="article-header">
                    		<h5>우정바이오 구제역센터 실험동물실 공간 멸균 검증</h5>
                    	</div>
                    	<div class="article-content">
                    		<figure>
                    			<img src="/assets/images/etc_company/img_construct_view_md01.jpg" class="img-fluid d-block d-xl-none" alt="">
                    			<img src="/assets/images/etc_company/img_construct_view_xl01.jpg" class="img-fluid d-none d-xl-block" alt=""> 
                    		</figure>
                    		<div class="table-wrap">
                    			<table class="table">
                    				<tbody>
                    					<tr>
                    						<th>발주기관 / 위치</th>
                    						<td>협회 '생물안전관리자' 민간자격증 안내</td>
                    					</tr>
                    					<tr>
                    						<th>수행기업/ 담당자</th>
                    						<td>(주)우정바이오 / 홍길동</td>
                    					</tr>
                    					<tr>
                    						<th>시설등급</th>
                    						<td>BSL3/4/2</td>
                    					</tr>
                    					<tr>
                    						<th>수행규모 /<br class="d-sm-block d-md-none d-xl-none"> 공간 + 장비(A)</th>
                    						<td>BSC, 댓수 or Pass chamber 댓수</td>
                    					</tr>
                    					<tr>
                    						<th>수행규모 /<br class="d-sm-block d-md-none d-xl-none"> 공간 + 장비(C)</th>
                    						<td>면적 m3</td>
                    					</tr>
                    					<tr>
                    						<th>수행규모 /<br class="d-sm-block d-md-none d-xl-none"> 공간 + 장비(D)</th>
                    						<td>면적 m3</td>
                    					</tr>
                    					<tr>
                    						<th>수행년도(기간)</th>
                    						<td>2018년 8월 3일</td>
                    					</tr>
                    					<tr>
                    						<th>시설(용역)<br class="d-sm-block d-md-none d-xl-none"> 특이사항</th>
                    						<td>(BL3 이상은 내용에 따라 비공개)</td>
                    					</tr>
                    				</tbody>
                    			</table>
                    			<div class="btn-area">
                    				<p>
                    					<a href="#" class="btn btn-xs btn-white" role="button">이전글</a>
										<a href="#" class="btn btn-xs btn-white" role="button">다음글</a>
                    				</p>
                    				<p>
                    					<a href="/etc_company/construct_list.php" class="btn btn-sm btn-sm-bl" role="button">목록</a>
                    					<a href="#" class="btn btn-sm btn-sm-bl" role="button">수정</a>
                    					<a href="#" class="btn btn-sm btn-sm-bl" role="button">삭제</a> 
                    				</p>
                    			</div>
                    		</div>
                    	</div>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>