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
                    <li><a href="/organizations/domestic_organization.php">국내 기관</a></li>
					<li class="active"><a href="/organizations/foreign_organization.php">국외 기관</a></li>
                </ul>
            </div>
			<section class="foreign-organization organization">
				<div class="section-header">
					<h4>국외 기관</h4>
				</div>
				<div class="section-content">
					<ul class="organization-list">
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_foreign_list01.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									미국 질병관리본부 
									<a href="http://www.cdc.gov" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(CDC, Centers for Disease Control and Prevention) </small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												Biosafety in Microbiological and Biomedical Laboratories(BMBL)
												<a href="https://www.cdc.gov/biosafety/publications/bmbl5/" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												의·생명연구실험실 종사자들의 안전과 건강 을 위한 가이드 제공. 
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_foreign_list02.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									미국 국립보건원 
									<a href="http://www.nih.gov" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(NIH, National Institutes of Health) </small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												소개
												<a href="https://www.nih.gov/" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												 의료와 건강 관련 정책을 총괄 행정기관. 
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_foreign_list03.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									미국생물안전협회 
									<a href="http://www.absa.org" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(ABSA, American Biological Safety Association)</small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												사업내용
												<a href="http://www.absa.org/" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												Biosafety Professional 훈련 및 양성, 자격제도 운영(CBSP, RBP) 
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_foreign_list04.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									유럽생물안전협회
									<a href="http://www.ebsaweb.eu" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(EBSA, European Biosafety Association) </small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												사업내용
												<a href="http://www.ebsaweb.eu/" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												실험실 바이오리스크관리 기준 CWA15793 개발, 유럽내 물안전 네트워크 구성. 
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_foreign_list05.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									아시아-환태평양 생물안전협회 
									<a href="http://www.a-pba.org" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(A-PBA, Asia-Pacific Biosafety Association)</small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												Resource:A-PBA E-Newsletters
												<a href="http://www.a-pba.org/resources_content.aspx?i=2" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												Technical Paper 리뷰, 실험실 handling A-PBA Course &amp; Event 소개.
											</dd>
										</dl>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="items">
								<figure>
									<img src="/assets/images/organizations/img_foreign_list06.jpg" alt="">
								</figure>
							</div>
							<div class="details">
								<h5>
									국제생물안전협회
									<a href="http://www.internationalbiosafety.org" target="_blank"><i class="icon-home"></i></a>
								</h5>
								<small>(IFBA, International Federation of Biosafety Association) </small>
								<ul class="dot-list">
									<li>
										<dl>
											<dt>
												사업내용
												<a href="http://www.internationalbiosafety.org/" target="_blank"><i class="icon-export"></i></a>
											</dt>
											<dd>
												광범위한 중요 생물안전이슈 논의, 생물안전 지식, 정보 등 공유. 
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