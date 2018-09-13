<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/etc_company.css">
</head>
<body class="sub etc-company">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- page-header -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/etc_company/_pageheader.php'); ?>
    
    <!-- Sub Content Start -->
    <main id="content">
        <div class="container">
            <!-- lnb-list -->
            <div class="lnb-list">
                <ul>
                    <li class="active"><a href="/etc_company/construct_list.php">설계,시공</a></li>
                    <li><a href="#">유지보수</a></li>
					<li><a href="#">장비,소모품</a></li>
					<li><a href="#">멸균</a></li>
                    <li><a href="#">기타</a></li>
                </ul>
            </div>
            
            <section class="construct-write">
                <div class="section-header">
                    <h4>설계, 시공</h4>
                </div>
                <div class="section-content">
                    <article class="write-form">
                        <form action="#">
                            <div class="table-wrap">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th><label for="u-title">제목</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-title" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="ordering-agency">발주기관 / 위치</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="ordering-agency" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-corporation">수행기업 / 담당자</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-corporation" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-class">시설등급</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-class" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="equipment-1">수행규모 / 공간 + 장비(A)</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="equipment-1" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="equipment-2">수행규모 / 공간 + 장비(B)</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="equipment-2" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="equipment-3">수행규모 / 공간 + 장비(C)</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="equipment-3" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="period">수행년도(기간)</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="period" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="remarks">시설(용역) 특이사항</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="remarks" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-content">내용</label></th>
                                            <td>
                                                <div class="form-group">
                                                    <textarea id="u-content" class="form-control"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>첨부파일</th>
                                            <td class="attach">
                                                <div class="form-group">
                                                    <input type="text" class="form-control file" id="txt2" name="txt2" readonly>
                                                    <label for="txt2" class="sr-only">업로드된 파일명</label>
                                                    <input type="button" value="파일첨부" onclick="document.getElementById('file2').click();">
                                                    <input type="file" id="file2" name="file2" onchange="document.getElementById('txt2').value = this.value">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-md btn-gray" role="button">취소하기</a>
                                    <button type="submit" class="btn btn-md btn-orange">등록하기</button>
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