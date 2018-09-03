<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/membership.css">
</head>
<body class="sub membership">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/membership/_pageheader.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">            
            <section class="join modify">
                <div class="section-header">
                    <h4>회원 정보수정</h4>
                </div>
                <div class="section-content">
                    <article class="write-form">
                        <form action="#">
                            <div class="table-wrap">
                                <p class="essential">필수 입력 사항입니다.</p>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th class="essential"><label for="u-nickname">아이디(닉네임)</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-nickname" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-name">성명</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control">
                                                    <label>공개하기 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-organization">생물안전위원회 소속 기관명</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-organization" class="form-control">
                                                    <label>공개하기 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential">역할</th>
                                            <td>
                                                <div class="form-group">
                                                    <ul class="check-list">
                                                        <li><label><input type="checkbox"> 생물안전관리책임자 </label></li>
                                                        <li><label><input type="checkbox"> 생물안전관리자</label></li>
                                                        <li><label><input type="checkbox"> 위원</label></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>소속기관<small>(IBC 소속기관과 동일할 수 있으나 외부위원일 경우 소속기관 직접 입력)</small></th>
                                            <td>
                                                <div class="form-group">
                                                    <ul class="check-list">
                                                        <li class="check-top"><label><input type="checkbox"> 생물안전위원회 소속기관과 동일</label></li>
                                                        <li class="inline-content">
                                                            <label><input type="checkbox"> 직접입력</label>
                                                            <input type="text" class="form-control sr-only">
                                                        </li>
                                                    </ul>
                                                    <label>공개하기 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-position">직책</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-position" class="form-control">
                                                    <label>공개하기 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-phone">전화번호(핸드폰)</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-phone" class="form-control">
                                                    <label>공개하기 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-contact">전화번호(사무실)</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-contact" class="form-control">
                                                    <label>공개하기 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-mail">전자메일</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-mail" class="form-control">
                                                    <label>공개하기 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>전문분야<small>(중복선택 가능)</small></th>
                                            <td class="expertise">
                                                <div class="form-group">
                                                    <ul class="check-list">
                                                        <li><label><input type="checkbox"> 생명공학</label></li>
                                                        <li><label><input type="checkbox"> 분자생물학</label></li>
                                                        <li><label><input type="checkbox"> 세균학</label></li>
                                                        <li><label><input type="checkbox"> 바이러스학</label></li>
                                                        <li><label><input type="checkbox"> 진균학</label></li>
                                                        <li><label><input type="checkbox"> 약학</label></li>
                                                        <li><label><input type="checkbox"> 의학</label></li>
                                                        <li><label><input type="checkbox"> 수의학</label></li>
                                                        <li><label><input type="checkbox"> 동물학</label></li>
                                                        <li><label><input type="checkbox"> 식물학</label></li>
                                                        <li><label><input type="checkbox"> 곤충학</label></li>
                                                        <li><label><input type="checkbox"> 생물공정</label></li>
                                                        <li><label><input type="checkbox"> 시설분야</label></li>
                                                        <li><label><input type="checkbox"> 보건학</label></li>
                                                        <li><label><input type="checkbox"> 환경과학</label></li>
                                                        <li class="check-top inline-content">
                                                            <label><input type="checkbox"> 기타 (직접입력)</label>
                                                            <input type="text" class="form-control">
                                                        </li>
                                                    </ul>
                                                    <label>공개하기 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-gray" role="button">취소하기</a>
                                    <button type="submit" class="btn btn-md btn-orange">회원 가입하기</button>
                                </p>
                            </div>
                        </form>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>