<?php
include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAZEN 로그인</title>
    <script type="text/javascript" src="../js/jquery-3.6.1.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/search.css">
    <link rel="stylesheet" type="text/css" href="../css/speed_bar.css">
    <link rel="stylesheet" type="text/css" href="../css/speed_menu.css">
    <!-- JS -->
    <script type="text/javascript" src="../js/login.js"></script>
    <script type="text/javascript" src="../js/search.js"></script>
    <script type="text/javascript" src="../js/speed_bar.js"></script>
    <script type="text/javascript" src="../js/speed_menu.js"></script>
</head>
<body>
<?php include "../inc/header_sub.php"; ?>
<?php include "../inc/speed_bar.php"; ?>

<main id="content" class="content">
    <?php include "../inc/speed_menu.php"; ?>
    <section class="login">
        <h2 class="login_title">로그인</h2>

        <form name="login_form" method="post" action="login_ok.php" onsubmit="return login_form_check()">
        
            <fieldset class="login_form_wrap">
                <legend class="hide">로그인 정보 입력</legend>
                <p class="userid"><input type="text" class="u_id" name="u_id" id="u_id" placeholder="아이디" autofocus></p>
                <p class="userpw"><input type="text" class="pwd" name="pwd" id="pwd" placeholder="비밀번호 (영문, 숫자, 특수문자 조합)"></p>
                <label class="saveid"><input type="checkbox" class="saveid_cls" name="saveid_nm" id="saveid_id">아이디 저장</label><br>
                <span class="btn"><button type="submit" class="login_btn_cls" name="login_btn_nm" id="login_btn_id">로그인</button></span>

                <div class="find_join_wrap">
                    <p class="find_id"><a href="#">아이디찾기</a></p>
                    <p class="find_pw"><a href="#">비밀번호찾기</a></p>
                    <p class="join"><a href="../members/join.php">회원가입</a></p>
                </div>

                <div class="other_login">
                    <a href="#" class="other_login1"><span class="kakao_login"></span><p>카카오<br>로그인</p></a>
                    <a href="#" class="other_login2"><span class="naver_login"></span><p>네이버<br>로그인</p></a>
                    <a href="#" class="other_login3"><span class="facebook_login"></span><p>페이스북<br>로그인</p></a>
                </div>

                <a href="#"><p class="nonmb_ordercheck">비회원 주문조회</p></a>
        </form>
    </section>
</main>

<?php include "../inc/footer.php"; ?>

</body>
</html>