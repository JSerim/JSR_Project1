<link rel="stylesheet" type="text/css" href="../../css/admin_header.css">
<script type="text/javascript" src="../../js/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="../../js/header.js"></script>
<header id="header" class="header">

    <div class="header_bottom">
        <h1 class="logo"><a href="admin_index.php">TEAZEN</a></h1>
        <h2 class="hide">관리자 메뉴</h2>
        <nav class="admin_nav">
            <ul class="admin_gnb_wrap">
                <li class=""><a href="../../index.php">홈페이지 바로 가기</a></li>
                <li><a href="../members/list.php">회원관리</a></li>
                <li><a href="../notice/list.php">공지사항</a></li>
                <li><a href="../board/list.php">Q&A</a></li>
                <li><a href="../products/list.php">상품관리</a></li>
                <li><a href="../event/list.php">이벤트</a></li>
            </ul>
        </nav>
    </div>
    
    <div class="header_top">
        <h2 class="hide">사용자메뉴</h2>
        <ul class="top_menu_wrap">
            <li class="top_m1"><a href="#">검색</a></li>
            <li class="top_m2"><a href="#">장바구니</a></li>
            <?php if(!$s_idx){ ?> 
            <!-- 로그인 전 -->
                <li class="top_m4"><a href="../members/join.php">회원가입</a></li>
                <li class="top_m5"><a href="../login/login.php">로그인</a></li>
            <?php } else if($s_id == "admin"){ ?>
            <!-- 관리자 로그인 -->
                <span class="prt_name"><?php echo $s_name; ?>님, 안녕하세요.</span>
                <li class="logout"><a href="../login/logout.php">로그아웃</a></li>
                <li class="top_m3"><a href="../members/mypage.php">마이페이지</a></li>
                <li class="admin_page"><a href="../admin_index.php">[관리자 페이지]</a></li>
            <?php } else { ?>
            <!-- 로그인 후 -->
                <span class="prt_name"><?php echo $s_name; ?>님, 안녕하세요.</span>
                <li class="logout"><a href="../login/logout.php">로그아웃</a></li>
                <li class="top_m3"><a href="../members/mypage.php">마이페이지</a></li>
            <?php }; ?>
            <li class="top_m6"><a href="#">언어선택</a>
                <ul class="language">
                    <li class="ko"><a href="#">한국어</a></li>
                    <li class="en"><a href="#">ENGLISH</a></li>
                    <li class="chn"><a href="#">中文</a></li>
                </ul>
            </li>
        </ul>

        <h2 class="hide">SNS</h2>
        <ul class="sns_wrap">
            <li class="sns1"><a href="https://www.youtube.com/channel/UCtLQoziaflVeOgx2SDE0HeA/videos">유튜브</a></li>
            <li class="sns2"><a href="https://www.instagram.com/teazenofficial/">인스타그램</a></li>
            <li class="sns3"><a href="https://www.facebook.com/TEAZEN/">페이스북</a></li>
            <li class="sns4"><a href="https://blog.naver.com/teazen_mkt">네이버</a></li>
            <li class="sns5"><a href="https://pf.kakao.com/_cqxkMxl">카카오톡</a></li>
        </ul>
    </div>
</header>