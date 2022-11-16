<?php
include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAZEN 마이페이지</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <style type="text/css">
        .tmp{
            width:200px;
            margin:auto;
            text-align:left;
            font-size:25px;
            line-height:2;
        }
    </style>
</head>
<body>
<?php include "../inc/header_sub.php"; ?>
<?php/*  include "../inc/search.php";  */?>
<?php include "../inc/speed_bar.php"; ?>
<?php include "../inc/speed_menu.php"; ?>

<h1>마이페이지</h1>
<div class="tmp">
    <p>내 적립금 : </p>
    <p><a href="#">[주문내역 조회]</a></p>
    <p><a href="member_info.php">[회원 정보]</a></p>
    <p><a href="#">[관심 상품]</a></p>
    <p><a href="#">[구매적립금]</a></p>
    <p><a href="#">[맞춤상담]</a></p>
    <p><a href="#">[쿠폰]</a></p>
    <p><a href="#">[게시물 관리]</a></p>
    <p><a href="#">[배송 주소록 관리]</a></p>
</div>

<?php include "../inc/footer.php"; ?>

</body>
</html>