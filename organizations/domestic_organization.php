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
                    <li><a href="/organizations/national_organization.php">국가 기관</a></li>
                    <li class="active"><a href="/organizations/domestic_organization.php">국내 기관</a></li>
					<li><a href="/organizations/foreign_organization.php">국외 기관</a></li>
                </ul>
            </div>
			<section class="domestic-organization organization">
				<div class="section-header">
					<h4>국내 기관</h4>
				</div>
				<div class="section-content">
					<ul class="organization-list">
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_domestic_list01.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									한국바이오협회
									<a href="http://www.koreabio.org" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(Korea Biotechnology Industry Organization)</small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												BWCNEWS : 생물무기금지협약 정보지
												<a href="http://www.bwckorea.or.kr/main.do" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												생물무기협약관련 국제회의 동향, 국내외 대응 동향 및 관련 이슈 소개. 
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_domestic_list02.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									한국생명공학연구원
									<a href="http://www.kribb.re.kr" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(Korea Research Institute of Bioscience and Biotechnology)</small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												생명공학동향 
												<a href="http://www.bioin.or.kr/board.do?cmd=list&bid=tech" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												국내외 BT동향의 최신 자료 제공
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_domestic_list03.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									한국바이오안정성 정보센터
									<a href="http://www.biosafety.or.kr" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(Korea Biosafety Clearing House)</small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												KBCH 발간자료
												<a href="#" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												유전자변형생물체에 대한 모든 자료. BIOSAFETY, 바이오안정성백서, 기타간행물 
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_domestic_list04.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									한국실험동물학회
									<a href="http://www.kalas.or.kr/" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(Korean Association For Laboratory Animal Science)</small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												사업내용
												<a href="http://www.kalas.or.kr/" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												실험동물 및 동물실험에 관한 정보교환, 관련 학술지 발간, 실험동물기술사 인증 등 주요사업 진행 
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_domestic_list05.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									한국MSDS시험원
									<a href="http://www.msdskorea.com" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(Korea MSDS Testing Lab) </small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												사업내용
												<a href="http://www.msds.re.kr/" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												KOLAS(Korea Laboratory Accreditation Scheme)인정을 위한 교육 및 지도,  안정도 평가 및 국제적합성평가 제공. 
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