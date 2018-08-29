<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/organizations.css">
</head>
<body class="sub organizations">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/organizations/_pageheader.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <!-- lnb-list -->
            <div class="lnb-list">
                <ul>
                    <li class="active"><a href="/organizations/national_organization.php">국가 기관</a></li>
                    <li><a href="/organizations/domestic_organization.php">국내 기관</a></li>
					<li><a href="/organizations/foreign_organization.php">국외 기관</a></li>
                </ul>
            </div>
			<section class="national-organization organization">
				<div class="section-header">
					<h4>국가 기관</h4>
				</div>
				<div class="section-content">
					<ul class="organization-list">
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_national_list01.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									질병관리본부
									<a href="#"><i class="icon-home"></i></a>
								</h5>
								<small>(Korea Centers for  Disease Control  &amp; Prevention) </small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												질병관리본부_NewsLetter
												<a href="#"><i class="icon-export"></i></a>
											</dt>
											<dd>
												질병관리본부내 추진사업, 질병정보 소개
											</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt>
												자료실
												<a href="#"><i class="icon-export"></i></a>
											</dt>
											<dd>
												주간건강과질병, 홍보자료,  간행물(질병관리 백서), 일반자료,  혈액통계.
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_national_list02.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									국립보건연구원
									<a href="#"><i class="icon-home"></i></a>
								</h5>
								<small>(Korea National Institute of Health) </small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												생물안전소식지
												<a href="#"><i class="icon-export"></i></a>
											</dt>
											<dd>
												생물안전관련 기사 및 리뷰 소개, 고위험병 원체 정보, 생물안전Tip안내.
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_national_list03.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									미래창조과학부
									<a href="#"><i class="icon-home"></i></a>
								</h5>
								<small>(Ministry of Science, ICT &amp; Future Planning) </small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												시험·연구용 LMO정보시스템
												<a href="#"><i class="icon-export"></i></a>
											</dt>
											<dd>
												온라인을 통한 LMO민원처리와 안전관리, LMO관련 정보 제공, 효율적인 네트워크 구축.
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>