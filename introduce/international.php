<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introduce.css">
</head>
<body class="sub introduce">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/introduce/_pageheader.php'); ?>
    
    <!-- Sub Content Start -->
	<main id="content">
		<div class="container">
			<!-- lnb-list -->
			<div class="lnb-list">
				<ul>
					<li><a href="/introduce/greeting.php">협회장 인사말</a></li>
					<li><a href="/introduce/association.php">협회소개</a></li>
					<li><a href="/introduce/member.php">회원사소개</a></li>
					<li><a href="/introduce/organization.php">조직구성</a></li>
					<li class="active"><a href="/introduce/professional.php">주요사업</a></li>
					<li><a href="/introduce/location.php">찾아오시는길</a></li>
				</ul>
			</div>
		</div>
		<section class="international">
			<div class="container">
				<div class="section-header">
					<h4>주요사업</h4>
				</div>
				<div class="section-content">
					<nav class="tab-wrap">
						<div class="tab-menu">
							<ul>
								<li><a href="/introduce/professional.php">생물안전교육</a></li>
								<li class="active"><a href="/introduce/private.php">생물안전관리</a></li>
							</ul>
						</div>
						<div class="sub-menu">
							<ul>
								<li><a href="/introduce/private.php">민간용역사업</a></li>
								<li><a href="/introduce/government.php">정부용역사업</a></li>
								<li class="on"><a href="/introduce/international.php">국제용역사업</a></li>
								<li><a href="/introduce/company_confirm.php">기업인증기준 제정</a></li>
							</ul>
						</div>
					</nav>
					<article>
						<div class="article-header">
							<h3 class="sub-title">국제용역사업</h3>
						</div>
						<div class="article-content">
							<ol class="number-list">
								<li>
									<span>1</span>
									<h3>제1회 생물안전·생물보안을 위한 국제 컨퍼런스 및 제1차 한국생물안전협회 연계회의  </h3>
									<small>(2009년 9월 14일) </small>
								</li><li>
									<span>2</span>
									<h3>WHO 필리핀 NTRL(National Tuberculosis Reference Laboratory) BL3 실험실 인증 용역 </h3>
									<small> (2011년 10월 15일~2012년 4월 30일)</small>
								</li>
								<li>
									<span>3</span>
									<h3>International Biological Safety Workshop 국제 생물안전 워크숍</h3>
									<small>
										(실험실 생물안전 및 생물밀폐 엔지니어링, 생물안전 프로그램 개발을 포함하는 최신의 생물안전과 생물보안 기술 및 국제 동향)
									</small>
								</li>
								<li>
									<span>4</span>
									<h3>WHO 필리핀 NTRL(National Tuberculosis Reference Laboratory) BL3 실험실 재인증 용역 </h3>
									<small>
										(2015년 10월 ~ 2017년 4월) 
									</small>
								</li>
							</ol>
						</div>
					</article>
				</div>
			</div>
		</section>
	</main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>