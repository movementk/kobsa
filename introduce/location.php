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
					<li><a href="/introduce/professional.php">주요사업</a></li>
					<li class="active"><a href="/introduce/location.php">찾아오시는길</a></li>
				</ul>
			</div>
		</div>
		<section class="location">
			<div class="container">
				<div class="section-header">
					<h4>찾아오시는길</h4>
				</div>
				<div class="section-content">
					<article class="info">
						<div class="maps">
							<img src="/assets/images/introduce/img_maps.jpg" class="img-fluid" alt="지도">
						</div>
						<div class="details">
							<h5>한국생물안전협회</h5>
							<p>서울시 송파구 오금로 58, 918호 (신천동, 잠실 I-SPACE) (05510)</p>
							<ul>
								<li class="call">
									<dl>
										<dt>전화번호</dt>
										<dd>
											<a href="tel:07046072910">070-4607-2910</a>
										</dd>
									</dl>
								</li>
								<li class="fax">
									<dl>
										<dt>팩스</dt>
										<dd>02-2282-2910</dd>
									</dl>
								</li>
								<li class="mail">
									<dl>
										<dt>Email</dt>
										<dd>
											<a href="mailto:kobsa@hanmail.net">kobsa@hanmail.net</a>
										</dd>
									</dl>
								</li>
							</ul>
						</div>
					</article>
					<div class="public-transpor">
						<h3 class="sub-title">대중교통</h3>
						<article class="subway">
							<h4>지하철</h4>
							<ul>
								<li>
									<span class="line-2">2</span>
									잠실역 9번 출구 <i>&#40;도보 6분&#41;</i>
								</li>
								<li>
									잠실나루역 3번출구<i>&#40;도보 8분&#41;</i>
								</li>
								<li>
									<span class="line-8">8</span>
									뭉촌토성역 4번출구 <i>&#40;도보 6분&#41;</i>
								</li>
							</ul>
						</article>
						<article class="bus">
							<h4>버스</h4> 
							<ul>
								<li>
									<h5>잠실나루역 하자</h5>
									<small>&#40;24129&#41; 196m</small>
									<dl>
										<dt class="bl">간선</dt>
										<dd>342</dd>
										<dt class="gr">지선</dt>
										<dd>3318, 3319, 3412, 4318</dd>
										<dt class="dk-gr"></dt>
										<dd>16, 30-3, 30-5</dd>
									</dl>
								</li>
							</ul>
						</article>
					</div>
				</div>
			</div>
		</section>
	</main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>