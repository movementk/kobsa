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
            <section class="join">
                <div class="section-header">
                    <h4>회원가입</h4>
                </div>
                <div class="section-content">
                    <ol class="step-list">
                        <li>
                            <b>01</b>
                            <h5>약관동의</h5>
                        </li>
                        <li class="active">
                            <b>02</b>
                            <h5>정보입력</h5>
                        </li>
                        <li>
                            <b>03</b>
                            <h5>가입완료</h5>
                        </li>
                    </ol>
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
                                            <th rowspan="2"><label for="u-name">성명</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-name" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label>공개 <input type="checkbox"></label>
                                                    <label>비공개 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2"><label for="u-organization">생물안전위원회 소속 기관명</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-organization" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label>공개 <input type="checkbox"></label>
                                                    <label>비공개 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="essential"><label for="u-pw">비밀번호</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="password" id="u-pw" class="form-control">
                                                    <p class="note">
                                                        영문 대소문자/숫자/특수문자를 혼용하여 2종류 10~16자 또는 3종류 8~16자
                                                    </p>
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
                                            <th rowspan="2">소속기관</th>
                                            <td>
                                                <div class="form-group">
                                                    <ul class="check-list">
                                                        <li class="check-top"><label><input type="checkbox"> 생물안전위원회 소속기관과 동일</label></li>
                                                        <li><label><input type="checkbox"> 직접입력 <input type="text" class="form-control"></label></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label>공개 <input type="checkbox"></label>
                                                    <label>비공개 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2"><label for="u-position">직책</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-position" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label>공개 <input type="checkbox"></label>
                                                    <label>비공개 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2"><label for="u-phone">전화번호(핸드폰)</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-phone" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label>공개 <input type="checkbox"></label>
                                                    <label>비공개 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2"><label for="u-contact">전화번호(핸드폰)</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-contact" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label>공개 <input type="checkbox"></label>
                                                    <label>비공개 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2"><label for="u-mail">전자메일</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-mail" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label>공개 <input type="checkbox"></label>
                                                    <label>비공개 <input type="checkbox"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th rowspan="2">전문분야<small>(중복선택 가능)</small></th>
                                            <td>
                                                <div class="form-group">
                                                    <!--<input type="text" id="" class="form-control">-->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label>공개 <input type="checkbox"></label>
                                                    <label>비공개 <input type="checkbox"></label>
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