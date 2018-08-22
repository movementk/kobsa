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
					<li><a href="#">찾아오시는길</a></li>
				</ul>
			</div>
		</div>
		<section class="private">
			<div class="container">
				<div class="section-header">
					<h4>주요사업</h4>
				</div>
				<div class="section-content">
					<nav class="tab-wrap">
						<div class="tab-menu">
							<ul>
								<li><a href="/introduce/professional.php">생물안전교육</a></li>
								<li class="active"><a href="#">생물안전관리</a></li>
							</ul>
						</div>
						<div class="sub-menu">
							<ul>
								<li class="on"><a href="/introduce/private.php">민간용역사업</a></li>
								<li><a href="#">정부용역사업</a></li>
								<li><a href="#">국제용역사업</a></li>
								<li><a href="#">기업인증기준 제정</a></li>
							</ul>
						</div>
					</nav>
					<article>
						<div class="article-header">
							<h3 class="sub-title">민간용역사업</h3>
						</div>
						<div class="article-content">
							<ol class="number-list">
								<li>
									<span>1</span>
									<h3>삼성전자종합기술원 BL2+ 연구시설 생물안전 운영에 대한 현장 점검 용역 </h3>
									<small> (2010년 11월 12일~12월 10일)</small>
								</li><li>
									<span>2</span>
									<h3>고려대학교 의과대학 생물안전3등급 연구시설 설계·시공 컨설팅 및 검증(IQ, OP) 검토 용역</h3>
									<small> (2011년 9월 15일~2014년 11월 30일)</small>
								</li>
								<li>
									<span>3</span>
									<h3>고려대학교의료원 ABL3연구시설 URS 컨설팅 용역 </h3>
									<small>
										(2014년 9월 ~ 2015년 4월) 
									</small>
								</li>
								<li>
									<span>4</span>
									<h3>고려대학교의료원 ABL3연구시설 설계,시공 및 검증 컨설팅 용역 </h3>
									<small>
										(2015년 10월 ~ 시설인증 완료)
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