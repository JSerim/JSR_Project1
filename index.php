<?php
include "inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAZEN</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <link rel="stylesheet" type="text/css" href="css/speed_bar.css">
    <!-- JS -->
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <script type="text/javascript" src="js/speed_bar.js"></script>
    <script type="text/javascript" src="js/speed_menu.js"></script>

    <!-- 슬라이드 플러그인 bxslider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>

    <!-- 스크롤 효과 플러그인 -->
    <link rel="stylesheet" type="text/css" href="css/jquery.parallax.css">
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
	<script type="text/javascript">
		$(function(){
			$('.w_main').parallax({mode:1});
			function custom_show(obj, mode) {
				obj.find(".bw").addClass('animation animation_'+mode);
			}
		})
	</script>
</head>
<body class="p-0">
    
<?php include "inc/header_index.php"; ?>

    <main id="content" class="content">

    <?php include "inc/speed_bar.php"; ?>

        <section class="main_image">                  
            <h2 class="hide">티젠 주요 소식</h2>
                <ul class="main_image_wrap">
                    <li class="main_image_1"><a href="#">
                        <span class="main1_title">2022년 추석 티젠 선물 제안</span>
                        <span class="main1_subtxt">행사 기간 : 2022.08.16 ~ 2022.09.12</span>
                    </a></li>

                    <li class="main_image_2"><a href="#">
                        <span class="main2_title">티젠 자몽쏙</span>
                        <span class="main2_subtxt">자몽 1개가 통째로 쏙!</span>
                    </a></li>

                    <li class="main_image_3"><a href="#">
                        <span class="main3_title">티젠 프리미엄 바닐라 파우더 출시</span>
                        <span class="main3_subtxt">바닐라라떼 | 바닐라쉐이크 | 바닐라아이스크림</span>
                    </a></li>

                    <li class="main_image_4"><a href="#">
                        <span class="main4_title">건강해지는 비밀 티젠 콤부차</span>
                        <span class="main4_subtxt">12종 유산균 | 프리바이오틱스 | 상콤달콤 웰빙티</span>
                    </a></li>

                    <li class="main_image_5"><a href="#">
                        <span class="main5_title">티젠 콤부차 상콤달콤 패키지</span>
                        <span class="main5_subtxt">판매기간 : 2022.08.29 ~ 2022.09.29</span>
                    </a></li>
                </ul>
                <div class="main_control">
                    <ul class="main_bb_wrap1 hide">
                        <li class="main1_bb"><a href="#">소식1</a></li>
                        <li class="main2_bb"><a href="#">소식2</a></li>
                        <li class="main3_bb"><a href="#">소식3</a></li>
                        <li class="main4_bb"><a href="#">소식4</a></li>
                        <li class="main5_bb"><a href="#">소식5</a></li>
                    </ul>
                    <ul class="main_bb_wrap2 hide">
                        <li class="main_before"><a href="#">이전</a></li>
                        <li class="main_stop"><a href="#">멈추기</a></li>
                        <li class="main_play"><a href="#">재생</a></li>
                        <li class="main_next"><a href="#">다음</a></li>
                    </ul>
                </div>
        </section>

    <div class="w_main container-fluid" data-rate="0.5" data-effect="slide-up">
    <div class="bw row p-5" >
        <section class="cont1">
            <div class="cont1_wrap">
                <div class="cont1_title_bar">
                    <h2 class="cont1_title">신상품</h2>
                        <a href="#" class="cont1_view_all">전체보기</a>
                        <div class="cont1_control hide">
                            <a href="#" class="cont1_control_before">이전</a>
                            <a href="#" class="cont1_control_stop">멈추기</a>
                            <a href="#" class="cont1_control_play">재생</a>
                            <a href="#" class="cont1_control_next">다음</a>
                        </div>
                </div>

                    <div class="cont1_product">

                        <ul class="cont1_product_wrap">

                            <li class="cont1_item1">
                                <ul>
                                    <div class="black_background">
                                        <li class="item1_name"><a href="#">[티젠몰 단독] <br>티젠 콤부차 상콤달콤 패키지 <br>(2종 택1)</a>
                                            <ul class="price">
                                                <li class="item1_price_regular">42,000원</li>
                                                <li class="item1_price_discount">할인가 : 29,900원</li>
                                            </ul>
                                            <ul class="put_in_wrap">
                                                <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                                <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                            <li class="cont1_item2">
                                <ul>
                                    <div class="black_background">
                                        <li class="item2_name"><a href="#">티젠 콤부차 골프 선물세트 <br>× 10세트 (1카톤)</a>
                                            <ul class="price">
                                                <li class="item2_price_regular">450,000원</li>
                                                <li class="item2_price_discount">할인가 : 405,000원</li>
                                            </ul>
                                            <ul class="put_in_wrap">
                                                <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                                <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                            <li class="cont1_item3">
                                <ul>
                                    <div class="black_background">
                                        <li class="item3_name"><a href="#">티젠 콤부차 골프 선물세트 <br>(티젠 콤부차+볼빅 골프공)</a>
                                            <ul class="price">
                                                <li class="item3_price_regular">45,000원</li>
                                                <li class="item3_price_discount">할인가 : 42,900원</li>
                                            </ul>
                                            <ul class="put_in_wrap">
                                                <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                                <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                            <li class="cont1_item4">
                                <ul>
                                    <div class="black_background">
                                        <li class="item4_name"><a href="#">티젠 프리미엄 바닐라 파우더 <br>(1kg)</a>
                                            <ul class="price">
                                                <li class="item4_price_regular">18,000원</li>
                                                <li class="item4_price_discount">할인가 : 16,200원</li>
                                            </ul>
                                            <ul class="put_in_wrap">
                                                <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                                <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            

                        <li class="cont1_item5">
                            <ul>
                                <div class="black_background">
                                    <li class="item5_name"><a href="#">티젠 콤부차 30스틱입 × 5박스) <br>(5가지맛 혼합 구성)</a>
                                        <ul class="price">
                                            <li class="item5_price_regular">105,000원</li>
                                            <li class="item5_price_discount">할인가 : 68,300원</li>
                                        </ul>
                                        <ul class="put_in_wrap">
                                            <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                            <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="cont1_item6">
                            <ul>
                                <div class="black_background">
                                    <li class="item6_name"><a href="#">티젠 자몽쏙 30스틱입 <br>2박스 + 보틀</a>
                                        <ul class="price">
                                            <li class="item6_price_regular">44,000원</li>
                                            <li class="item6_price_discount">할인가 : 29,900원</li>
                                        </ul>
                                        <ul class="put_in_wrap">
                                            <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                            <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="cont1_item7">
                            <ul>
                                <div class="black_background">
                                    <li class="item7_name"><a href="#">티젠 콤부차 파인애플 <br>30스틱입 × 2박스 <br>(보틀포함)</a>
                                        <ul class="price">
                                            <li class="item7_price_regular">44,000원</li>
                                            <li class="item7_price_discount">할인가 : 30,900원</li>
                                        </ul>
                                        <ul class="put_in_wrap">
                                            <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                            <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="cont1_item8">
                            <ul>
                                <div class="black_background">
                                    <li class="item8_name"><a href="#">티젠 프리미엄 호지차 파우더 <br>(500g)</a>
                                        <ul class="price">
                                            <li class="item8_price_regular">11,000원</li>
                                            <li class="item8_price_discount">할인가 : 9,900원</li>
                                        </ul>
                                        <ul class="put_in_wrap">
                                            <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                            <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        </ul>
                    </div>
            </div>
        </section>
    </div>
    </div>

    <div class="w_main container-fluid" data-rate="0.5" data-effect="slide-up">
    <div class="bw row p-5" >
        <section class="cont2">
            <div class="cont2_wrap">
                <div class="cont2_title_bar">
                    <h2 class="cont2_title">베스트 상품</h2>
                        <a href="#" class="cont2_view_all">전체보기</a>
                        <div class="cont2_control hide">
                            <a href="#" class="cont2_control_before">이전</a>
                            <a href="#" class="cont2_control_stop">멈추기</a>
                            <a href="#" class="cont2_control_play">재생</a>
                            <a href="#" class="cont2_control_next">다음</a>
                        </div>
                </div>

                    <div class="cont2_product">

                        <ul class="cont2_product_wrap">

                            <li class="cont2_item1">

                                <ul>
                                    <div class="black_background">
                                        <li class="item1_name"><a href="#">티젠 콤부차 피치 30스틱입 <br>대용량팩</a>
                                            <ul class="price">
                                                <li class="item1_price_regular">21,000원</li>
                                                <li class="item1_price_discount">할인가 : 15,900원</li>
                                            </ul>
                                            <ul class="put_in_wrap">
                                                <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                                <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                            <li class="cont2_item2">

                                <ul>
                                    <div class="black_background">
                                        <li class="item2_name"><a href="#">티젠 콤부차 파인애플 30스틱입 <br>대용량팩</a>
                                            <ul class="price">
                                                <li class="item2_price_regular">21,000원</li>
                                                <li class="item2_price_discount">할인가 : 15,900원</li>
                                            </ul>
                                            <ul class="put_in_wrap">
                                                <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                                <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                            <li class="cont2_item3">

                                <ul>
                                    <div class="black_background">
                                        <li class="item3_name"><a href="#">티젠 말차라떼 7스틱</a>
                                            <ul class="price">
                                                <li class="item3_price_regular">3,500원</li>
                                                <li class="item3_price_discount">할인가 : 2,900원</li>
                                            </ul>
                                            <ul class="put_in_wrap">
                                                <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                                <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                            <li class="cont2_item4">

                                <ul>
                                    <div class="black_background">
                                        <li class="item4_name"><a href="#">티젠 에코 보틀 350ml <br>(파인애플)</a>
                                            <ul class="price">
                                                <li class="item4_price_regular">5,000원</li>
                                                <li class="item4_price_discount">할인가 : 3,500원</li>
                                            </ul>
                                            <ul class="put_in_wrap">
                                                <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                                <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                            

                        <li class="cont2_item5">
                            <ul>
                                <div class="black_background">
                                    <li class="item5_name"><a href="#">티젠 캐모마일 100티백</a>
                                        <ul class="price">
                                            <li class="item5_price_regular">14,800원</li>
                                            <li class="item5_price_discount">할인가 : 13,320원</li>
                                        </ul>
                                        <ul class="put_in_wrap">
                                            <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                            <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="cont2_item6">
                            <ul>
                                <div class="black_background">
                                    <li class="item6_name"><a href="#">티젠 루테인티 10스틱</a>
                                        <ul class="price">
                                            <li class="item6_price_regular">7,000원</li>
                                            <li class="item6_price_discount">할인가 : 5,900원</li>
                                        </ul>
                                        <ul class="put_in_wrap">
                                            <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                            <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="cont2_item7">
                            <ul>
                                <div class="black_background">
                                    <li class="item7_name"><a href="#">[2+1] 티젠 유기농 새싹보리 <br>분말 20스틱 + 10스틱 <br>(무료배송)</a>
                                        <ul class="price">
                                            <li class="item7_price_regular">15,800원</li>
                                            <li class="item7_price_discount">할인가 : 13,900원</li>
                                        </ul>
                                        <ul class="put_in_wrap">
                                            <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                            <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="cont2_item8">
                            <ul>
                                <div class="black_background">
                                    <li class="item8_name"><a href="#">티젠 자몽쏙 30스틱입 × 2박스</a>
                                        <ul class="price">
                                            <li class="item8_price_regular">42,000원</li>
                                            <li class="item8_price_discount">할인가 : 28,900원</li>
                                        </ul>
                                        <ul class="put_in_wrap">
                                            <li class="put_in_hold"><a href="#">장바구니 담기</a></li>
                                            <li class="put_in_keep"><a href="#">관심상품 담기</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        </ul>
                    </div>
            </div>
        </section>
    </div>
    </div>

    <div class="w_main container-fluid" data-rate="0.5" data-effect="slide-up">
    <div class="bw row p-5" >
        <div class="cont_bottom">
                <div class="event">
                    <h2 class="hide">이벤트 소개</h2>
                    <div class="event_mask">
                        <ul class="event_poster">
                            <li class="event_1"><a href="#">우리가족 건강한 습관 티젠 유기농 새싹보리</a></li>
                            <li class="event_2"><a href="#">건강해지는 비밀 티젠 콤부차</a></li>
                        </ul>
                    </div>
                    <div class="event_control">
                        <a href="#none" class="event_before">이전</a>
                        <a href="#none" class="event_next">다음</a>
                    </div>
                </div>
                <span class="event_right_top">
                    <video src="#">티젠 콤부차 상콤달콤 웰빙티 영상보기</video>
                </span>
                <div class="event_right_bottom">
                    <span class="event_3_poster">
                        <div class="white_background"></div>
                        <a href="#" class="event_3">
                            하루 한잔 가볍게 자몽쏙
                        </a>
                    </span>
                    <h2 class="hide">많이 찾는 메뉴 바로가기</h2>
                    <ul class="speed_menu_wrap">
                        <li class="smenu_notice"><a href="#">공지사항</a></li>
                        <li class="smenu_event"><a href="#">이벤트</a></li>
                        <li class="smenu_qa"><a href="#">Q&A 문의하기</a></li>
                        <li class="smenu_review"><a href="#">상품후기 </a></li>
                    </ul>
                </div>
        </div>
    </div>
    </div>

    <div class="w_main container-fluid" data-rate="0.5" data-effect="slide-up">
    <div class="bw row p-5" >
        <div class="homepage_div">
            <h2 class="homepage"><a href="#">About TEAZEN 티젠 회사소개 홈페이지 바로가기</a></h2>
            <img src="images/homepage_background.jpg" alt="" class="homepage_background">
        </div>
    </div>
    </div>
        
    </main>

<?php include "inc/footer.php"; ?>

</body>
</html>