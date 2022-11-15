<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAZEN Q&A</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/qa.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/search.css">
    <link rel="stylesheet" type="text/css" href="../css/speed_bar.css">
    <link rel="stylesheet" type="text/css" href="../css/speed_menu.css">
    <!-- JS -->
    <script type="text/javascript" src="../js/header.js"></script>
    <script type="text/javascript" src="../js/search.js"></script>
    <script type="text/javascript" src="../js/speed_bar.js"></script>
    <script type="text/javascript" src="../js/speed_menu.js"></script>
</head>
<body>
    <?php include "../inc/header.php"; ?>
    <?php include "../inc/speed_bar.php"; ?>
    <?php include "../inc/speed_menu.php"; ?>

    <main id="content" class="content">

        <section class="qa_section">
            <div class="row_line">
                <h2 class="qa_title">상품Q&A</h2>
                <p class="qa_title_txt">상품에 대한 문의를 남겨주세요.</p>
            </div>

            <form name="qa_form" method="get" action="">
                <fieldset class="qa_form_wrap">
                    <legend class="hide">상품찾기</legend>
                    <div class="item_cf_wrap">
                        <p class="item_cf_txt"><span>* </span><label for="item_cf_id">상품분류</label></p>
                        <select class="item_cf_cls" name="item_cf_nm" id="item_cf_id">
                            <option value="" disabled>상품을 선택하세요.</option>
                            <option value="item_cf1">콤부차</option>
                            <option value="item_cf2">유기농 새싹보리</option>
                            <option value="item_cf3">기능성 TEA 스틱형</option>
                            <option value="item_cf4">종이티백</option>
                            <option value="item_cf5">피라미드 티백</option>
                            <option value="item_cf6">잎차</option>
                            <option value="item_cf7">TEA분말/음료믹스</option>
                            <option value="item_cf8">티젠 선물세트</option>
                            <option value="item_cf9">티웨어/소품</option>
                            <option value="item_cf10">카페사업자몰</option>
                        </select>
                    </div>
                    <div class="sc_word_wrap">
                        <p class="sc_word_txt"><span>* </span><label for="sc_word1_id">검색어</label></p>
                        <select class="sc_word1_cls" name="sc_word1_nm" id="sc_word1_id">
                            <option value="sc_word1_1">일주일</option>
                            <option value="sc_word1_2">한달</option>
                            <option value="sc_word1_3">세달</option>
                            <option value="sc_word1_4">전체</option>
                        </select>
                        <select class="sc_word2_cls" name="sc_word2_nm" id="sc_word2_id">
                            <option value="sc_word2_1">제목</option>
                            <option value="sc_word2_2">내용</option>
                            <option value="sc_word2_3">글쓴이</option>
                            <option value="sc_word2_4">아이디</option>
                            <option value="sc_word2_5">상품정보</option>
                        </select>
                        <input type="text" class="sc_word_cls" name="sc_word_nm" id="sc_word_id">
                        <button type="button" class="find_bt_cls" name="find_bt_nm" id="find_bt_id">찾기</button>
                    </div>
                    <a href="#" class="writing_bt">글쓰기</a>
            </form>
            
            <table class="qa_table_cls" cellpadding="0" cellspacing="0" >
                <caption class="hide">상품Q&A</caption>
                <thead class="thead_cls">
                    <th class="th1">번호</th>
                    <th class="th2">상품정보</th>
                    <th class="th3">제목</th>
                    <th class="th4">작성자</th>
                    <th class="th5">작성일</th>
                    <th class="th6">조회</th>
                </thead>
                <tbody class="tbody_cls">
                    <tr class="tr1">
                        <td class="td1">3</td>
                        <td class="td2">
                            <img src="images/qa_img3.jpg" alt="콤부차파인애플이미지">
                        </td>
                        <td class="td3">
                            <p class="td3_p1">티젠 콤부차 파인애플 10스틱×3박스 (보틀증정)</p>
                            <p class="td3_p2">물온도</p>
                            <span class="lock">비밀글</span>
                            <span class="new">새로운글</span>
                        </td>
                        <td class="td4">흥성***</td>
                        <td class="td5">2022-09-01<br>09:56:55</td>
                        <td class="td6">0</td>
                    </tr>
                    <tr class="tr2">
                        <td class="td1">2</td>
                        <td class="td2">
                            <img src="images/qa_img2.jpg" alt="자몽쏙이미지">
                        </td>
                        <td class="td3">
                            <p class="td3_p1">티젠 자몽쏙 30스틱입 대용량팩</p>
                            <p class="td3_p2">자몽쏙 카페인함량</p>
                            <span class="lock">비밀글</span>
                            <span class="new">새로운글</span>
                        </td>
                        <td class="td4">DH****</td>
                        <td class="td5">2022-08-30<br>13:01:38</td>
                        <td class="td6">0</td>
                    </tr>
                    <tr class="tr3">
                        <td class="td1">1</td>
                        <td class="td2">
                            <img src="" alt="">
                        </td>
                        <td class="td3">
                            <span class="answer">답장</span>
                            <p class="td3_p">자몽쏙 카페인함량</p>
                            <span class="lock">비밀글</span>
                            <span class="new">새로운글</span>
                        </td>
                        <td class="td4">티젠몰</td>
                        <td class="td5">2022-08-30<br>13:16:15</td>
                        <td class="td6">0</td>
                    </tr>
                </tbody>
            </table>
            <div class="movelist">
                <p class="before"><a href="#">이전</a></p>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href="#">9</a>
                <a href="#">10</a>
                <p class="next"><a href="#">다음</a></p>
            </div>
        </section>

    </main>

<?php include "../inc/footer.php"; ?>


</body>
</html>