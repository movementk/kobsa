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
					<li class="active"><a href="/introduce/organization.php">조직구성</a></li>
					<li><a href="/introduce/professional.php">주요사업</a></li>
					<li><a href="#">찾아오시는길</a></li>
				</ul>
			</div>
		</div>
		<section class="organization">
			<div class="container">
				<div class="section-header">
					<h4>조직구성</h4>
				</div>
				<div class="section-content">
					<figure>
						<img src="/assets/images/introduce/img_organization_sm.jpg" class="d-md-none d-xl-none img-fluid" alt="조직도">
						<img src="/assets/images/introduce/img_organization_md.jpg" class="d-none d-md-block d-xl-none img-fluid" alt="조직도">
						<img src="/assets/images/introduce/img_organization_xl.jpg" class="d-none d-xl-block img-fluid" alt="조직도">
						<figcaption class="sr-only">
							<ol>
								<li>
									<h1>회장</h1>
									<ul>
										<li>감사</li>
										<li>고문</li>
									</ul>
									<ul>
										<li>이사회</li>
										<li>운영위원회</li>
									</ul>
								</li>
								<li>
									부회장
									<ul>
										<li>사무국</li>
										<li>
											전문위원회
											<ul>
												<li>자문 위원회</li>
												<li>총무 위원회</li>
												<li>교육 위원회</li>
												<li>기술 위원회</li>
												<li>대외협력위원회</li>
												<li>홍보 위원회</li>
											</ul>
										</li>
									</ul>
								</li>
							</ol>
						</figcaption>
					</figure>
					<div class="table-wrap">
						<h3 class="sub-title">구성원 소개</h3>
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
									<td>수석<br class="d-md-none d-xl-none">부회장</td>
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
									<td rowspan="9">이사</td>
									<td>권용일</td>
									<td>신한대학교</td>
									<td>교수</td>
								</tr>
								<tr>
									<td>문창호</td>
									<td>군산대학교</td>
									<td>교수</td>
								</tr>
								<tr>
									<td>박동일</td>
									<td>㈜하나지엔씨</td>
									<td>대표이사</td>
								</tr>
								<tr>
									<td>성제경</td>
									<td>서울대학교</td>
									<td>교수</td>
								</tr>
								<tr>
									<td>여명석</td>
									<td>서울대학교</td>
									<td>교수</td>
								</tr>
								<tr>
									<td>윤홍익</td>
									<td>㈜가교테크</td>
									<td>대표이사</td>
								</tr>
								<tr>
									<td>홍찬형</td>
									<td>㈜우정바이오</td>
									<td>이사</td>
								</tr>
								<tr>
									<td>강지영</td>
									<td>서울대병원</td>
									<td>실장</td>
								</tr>
								<tr>
									<td>배찬원</td>
									<td>태왕사이언스</td>
									<td>이사</td>
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
				</div>
			</div>
		</section>
	</main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>