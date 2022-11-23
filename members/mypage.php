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
    <link rel="stylesheet" type="text/css" href="../css/mypage.css">
    <script type="text/javascript">
        $(document).ready(function(){
            $(".mypage_list a").hover(function(){
            $(this).css({boxShadow:"4px 4px 5px -3px"});
            },function(){
                $(this).css({boxShadow:"none"});
            });
        });
    </script>
</head>
<body>

<?php include "../inc/header_sub.php"; ?>
<?php include "../inc/speed_bar.php"; ?>

<main id="content" class="content">
    <?php include "../inc/speed_menu.php"; ?>
    <section class="mypage_section">

        <div class="title_box">
            <span class="green_box"></span><h2 class="mypage_title">마이페이지</h2>
        </div>

        <div class="mypage_wrap">
            <ul class="mypage_list">
                <li>
                    <a href="#" class="my_order">
                        주문내역 조회
                        고객님께서 주문하신 상품의주문내역을 확인하실 수 있습니다.
                    </a>
                </li>
                <li>
                    <a href="#" class="my_consult">
                        1대1 맞춤상담
                        고객님의 궁금하신 문의 사항에 대하여1대1 맞춤상담 내용을 확인하실 수 있습니다.
                    </a>
                </li>
                <li>
                    <a href="member_info.php" class="my_profile">
                        회원 정보
                        회원이신 고객님의 개인정보를 관리하는 공간입니다.
                    </a>
                </li>
                <li>
                    <a href="#" class="my_coupon">
                        쿠폰
                        고객님이 보유하고 계신 쿠폰내역을 보여드립니다.
                    </a>
                </li>
                <li>
                    <a href="#" class="my_wishlist">
                        관심 상품
                        관심상품으로 등록하신 상품의 목록을 보여드립니다.
                    </a>
                </li>
                <li>
                    <a href="#" class="my_board">
                        게시물 관리
                        고객님께서 작성하신 게시물을 관리하는 공간입니다.
                    </a>
                </li>
                <li>
                    <a href="#" class="my_mileage">
                        구매적립금
                        구매적립금은 상품 구매 시 사용하실 수 있습니다.
                    </a>
                </li>
                <li>
                    <a href="#" class="my_address">
                        배송 주소록 관리
                        자주 사용하는 배송지를 등록하고 관리하실 수 있습니다.
                    </a>
                </li>
            </ul>
        </div>

    </section>
</main>

<?php include "../inc/footer.php"; ?>

</body>
</html>