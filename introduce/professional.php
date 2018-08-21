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
		<section class="professional">
			<div class="container">
				<div class="section-header">
					<h4>주요사업</h4>
				</div>
				<div class="section-content">
					 <nav class="lnb-menu">
					 	<ul>
					 		<li></li>
					 	</ul>
					 </nav>
				</div>
			</div>
		</section>
	</main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>