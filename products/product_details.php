<?php
include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAZEN 상품상세</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/product_details.css">
    <!-- JS -->
    <script type="text/javascript" src="../js/product_details_form.js"></script>
    <script type="text/javascript" src="../js/product_details.js"></script>

</head>
<body>
<?php include "../inc/header_sub.php"; ?>
<?php include "../inc/speed_bar.php"; ?>

<main id="content" class="content">
        <?php include "../inc/speed_menu.php"; ?>
        <section class="product_details_section">
            <h2 class="hide">상품상세 페이지</h2>

            <div class="product_img">
                <h3 class="hide">상품 이미지</h3>
                <p class="big_img">
                    <img src="../images/thumb_img1.jpg" alt="상콤달콤패키지포스터" id="big_img" >
                </p>
                <p class="thumb_img">
                    <img src="../images/thumb_img1.jpg" alt="상콤달콤패키지포스터" onclick="changeImage(this.src)">
                    <img src="../images/thumb_img2.jpg" alt="콤부차피치" onclick="changeImage(this.src)">
                    <img src="../images/thumb_img3.jpg" alt="콤부차파인애플" onclick="changeImage(this.src)">
                </p>
            </div>

            <div class="option_wrap">
                <div class="option_1">
                    <span class="free_delivery_txtbox">무료배송</span>
                    <span class="new_pd_txtbox">new</span>
                    <p class="product_name">
                        [티젠목 단독] 티젠 콤부차 상콤달콤 패키지
                        <br>(2종 택1)
                    </p>
                </div>
                <div class="option_2">
                    <p class="price">
                        판매가 
                        <span>42,000원</span>
                    </p>
                    <p class="discnt_price">
                        할인가 
                        <span>29,000원 (12,100원 할인)</span>
                    </p>
                    <p class="delivery_charge">
                        배송비 
                        <span>무료</span>
                        <a href="#" class="delivery_charge_bt">배송비할인</a>

                        <!-- 배송비 할인 클릭하면 나오는 창 -->
                        <div class="delivery_charge_box_wrap">
                            <p class="delivery_charge_box_title">배송비 할인</p>
                            <div class="delivery_charge_box1">
                                <p class="free_delivery_title">무료배송</p>
                                <p class="free_delivery_txt_wrap">
                                    <span class="free_delivery_txt1">혜택</span>
                                    <span class="free_delivery_txt2">배송비 무료</span>
                                    <br><span class="free_delivery_txt3">(지역별 배송비 제외 / 해외배송 제외)</span>
                                </p>
                            </div>
                            <div class="delivery_charge_box2">
                                <p class="before_discnt_title">할인 전 배송비</p>
                                <p class="before_discnt_title_txt_wrap">
                                    <span class="before_discnt_txt1">배송비</span>
                                    <span class="before_discnt_txt2">무료</span>
                                    <br><span class="before_discnt_txt3">- 혜택 조건 미충족 시 해당 기준으로<br> 부과됩니다.</span>
                                </p>
                            </div>
                            <a href="#" class="delivery_charge_box_close_bt">닫기</a>
                        </div>
                        <!-- 배송비 할인 클릭하면 나오는 창 -->

                    </p>
                </div>
                <p class="notice">
                    안내사항 
                    <span class="star_txt">*</span>
                    <span class="notice_txt">사업자회원 등급할인 제외</span>
                </p>

                <div class="option_3">
                    <form name="option_3_form" action="" method="post">
                        <fieldset>
                            <div class="slt_pd">
                                <legend class="hide">옵션선택</legend>
                                <label for="option_slt"><p class="option_txt">옵션</p></label>
                                <select name="option_slt" id="option_slt" class="option_slt">
                                    <option value="">- [필수] 옵션을 선택해주세요 -</option>
                                    <option value="1">1. 상콤그린패키지</option>
                                    <option value="2">2. 달콤핑크패키지</option>
                                </select>
                            </div>
                            <p class="minimum_order_txt">(최소주문수량 1개 이상)</p>
                            <table class="option_3_table" cellpadding="0" cellspacing="0">
                                <thead class="option_3_th">
                                    <th class="option_3_th1">상품명</th>
                                    <th class="option_3_th2">상품수</th>
                                    <th class="option_3_th3">가격</th>
                                </thead>
                                <tbody class="option_3_tb">
                                    <tr>
                                        <td class="option_3_td1">
                                            [티젠목 단독] 티젠 콤부차 상콤달콤 패키지<br>(2종 택1)
                                            <br><span class="u_choice">1. 상콤그린패키지</span>
                                        </td>
                                        <td class="option_3_td2">
                                            <label for="u_pd_quantity"><p class="hide">상품수</p></label>
                                            <input type="number" name="u_pd_quantity" id="u_pd_quantity" class="u_pd_quantity">
                                            <a href="#"class="delete">×</a>
                                        </td>
                                        <td class="option_3_td3">42,000원</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="amount">
                                총 상품금액(수량): 
                                <span class="u_amount_txt">
                                    <span class="u_amount">29,900</span>
                                    원
                                </span> 
                                <span class="u_quantity_txt">
                                    (
                                        <span class="u_quantity">1</span>
                                        개)
                                    </span>
                            </p>
                        </fieldset>
                        <button type="submit" name="buynow_nm" id="buynow_id" class="buynow_cls">바로 구매하기</button>
                        <button type="submit" name="save_shopbk_nm" id="save_shopbk_id" class="save_shopbk_cls">장바구니</button>
                        <button type="submit" name="save_interest_nm" id="save_interest_id" class="save_interest_cls">관심상품</button>
                        <a href="#" class="kko_plus_fd">카카오톡 플러스 친구</a>
                        <button type="submit" name="buy_naverpay_nm" id="buy_naverpay_id" class="buy_naverpay_cls">네이버페이 구매</button>
                    </form>
                </div>
            </div>
            
            <span class="pagemenu_line"></span>

            <section class="product_details">
                <h3 class="product_details_title_bt">상품상세정보</h3>
                <div class="product_details_wrap">
                    <span class="poster_img1"></span>
                    <span class="poster_img2"></span>
                    <div class="hide">
                        <h4>티젠 콤부차 피치, 파인애플</h4>
                        <pre>
                            당류 0g, 저칼로리, 유산균 12종

                            티젠 콤부차는 상큼한 과즙감과 톡 쏘는 탄산감, 살아있는 유산균 12종과 프로바이오틱스가 모두 함유되어 있는 상콤달콤 웰빙티입니다.

                            독일산 콤부차 분말 함유
                            프리바이오틱스+유산균 12종 함유
                            상콤달콤한 피치
                            상콤달콤한 파인애플 (비타민B2 함유로 에너지 UP)

                            콤부차란? 
                            콤부차는 녹차 홍차 등의 차를 추출한 후 
                            SCOBY라고 하는 효모와 미생물로 되어 있으며 버섯처럼 보이는 덩어리와 함께 발효하여 만든 
                            전세계적으로 각광 받는 건강 관리 음료입니다.

                            티젠 콤부차 분말은
                            유산균 등 영양소 파괴를 방지하기 위해 
                            FD(Freeze Drying) 공법으로 
                            콤부차 원액을 건조하여 제조하였습니다.

                            Q : FD 공법이란? 
                            A : 동결건조 공법으로 식품을 영하 40도 이하의 온도에서 급속 동결시킨 뒤 저온에서 수분을 제거하여 
                            영양소 및 풍미 손실을 방지하며 건조하는 첨단 기술입니다.
                            
                            Q : FD 공법은 다른 건조 방식과는 어떤 차이가 있나요?
                            A : 식품을 건조하기 위해서 일반적으로 고온 열풍 건조 방식과 고온 분무 건조 방식이 있습니다. 
                            이 경우 건조하는 동안 고온의 열에 의해 유산균 등 영양소 뿐 아니라 고유 풍미의 파괴가 큽니다. 
                            하지만 FD 공법은 액상을 얼린 후 얼음을 수증기로 변환시켜 저온에서 건조하기 때문에 
                            식품 고유의 영양소, 맛과 풍미를 그대로 유지시켜 줍니다.

                            01. 살아있는 유산균 12종 & 프리바이오틱스로 건강하게!
                            살아있는 유산균 12종과 프리바이오틱스가 모두 함유된 건강 발효 음료! 

                            02. 당류 0g & 저칼로리
                            1잔 15kcal로 가볍게! 당류, 칼로리 걱정없이 맛있고 가볍게 즐겨요!
                            * 티젠 콤부차 1스틱(5g)을 물에 희석하여 음용시 기준 칼로리입니다.
                        </pre>
                    </div>
                </div>
            </section>

            <div class="delivery_info">
                <h3 class="delivery_info_title_bt">배송안내</h3>

                <div class="delivery_info_wrap">

                    <div class="pay_info">
                        <h4 class="pay_info_title">상품결제정보</h4>
                        <p>결제방식 : 신용카드, 무통장입금, 적립금</p>
                        <p>
                            유의사항 : 
                            <br> 1) 고액결제의 경우 안전을 위해 카드사에서 확인전화를 드릴 수도 있습니다.
                            <br> 확인 과정에서 도난 카드의 사용이나 타인 명의의 주문 등 정상적인 주문이 아니라고 판단될 경우 임의로 주문을 보류 또는 취소할 수 있습니다.
                            <br> 2) 주문시 입력한 입금자명과 실제 입금자의 성명이 반드시 일치하여야 하며, 7일 이내로 입금을 하셔야 하며 입금되지 않은 주문은 자동취소 됩니다.
                        </p>
                    </div>

                    <div class="shipping_info">
                        <h4 class="shipping_info_title">배송정보</h4>
                        <p>배송 방법 : 택배</p>
                        <p>배송 지역 : 전국지역</p>
                        <p>배송 비용 : 2,500원</p>
                        <p>배송 기간 : 1일 ~ 3일</p>
                        <p>
                            배송 안내 : 제주도를 포함한 도서, 산간 지역은
                            <span class="red_txt">항공료 또는 도선료 3,000원</span>
                            이 추가 발생됩니다. (단, 네이버페이 결제 시 추가 배송비는 착불)
                        </p>
                    </div>

                    <div class="exchange_return_info">
                        <h4 class="exchange_return_info_title">교환 및 반품정보</h4>
                        <p>1) 구입제품의 이상이 있을 경우 구입 후 7일 이내에 동일제품으로 교환 가능하며, 운송비는 판매업체 부담입니다.</p>
                        <p>
                            2) 구입제품의 이상이 없을 경우 구입 후 7일 이내 교환 가능하며, 운송비는 구객님 부담입니다. (단순변심 등)
                            <br>구입시 무료배송이었던 경우, 반품시 왕복 운송비를 부담해주셔야 합니다.
                        </p>
                        <p>3) 반품시에 해당 사은품이 있을 경우 같이 보내주셔야 합니다.</p>
                        <p>4) 보내주신 상품을 확인한 후에 , 카드결제 취소 또는 고객님 명의의 계좌로 환불이 됩니다.</p>
                        <p class="red_txt">※ 교환 및 반품이 불가능한 경우 자세히 알아보기 (클릭)</p>
                    </div>

                </div>
            </div>

            <div class="review">
                <h3 class="review_title_bt">상품후기</h3>
                <span class="review_quantity_box"></span>
                <span class="hide">(상품후기 수량)</span>
                <span class="review_quantity">4</span>

                <div class="review_wrap">
                    <table class="review_table" cellpadding="0" cellspacing="0" >
                        <caption class="hide">상품후기</caption>
                        <thead class="thead_cls">
                            <th class="th1">번호</th>
                            <th class="th2">제목</th>
                            <th class="th3">작성자</th>
                            <th class="th4">작성일</th>
                            <th class="th5">조회</th>
                            <th class="th6">평점</th>
                        </thead>

                        <tbody class="tbody_cls">
                            <tr class="tr1">
                                <td class="td1">4</td>
                                <td class="td2">만족</td>
                                <td class="td3">네이****</td>
                                <td class="td4">2022-09-04</td>
                                <td class="td5">6</td>
                                <td class="td6">
                                    <span class="stars_img">5점</span>
                                </td>
                            </tr>
                            <tr class="tr2">
                                <td class="td1">3</td>
                                <td class="td2">만족</td>
                                <td class="td3">네이****</td>
                                <td class="td4">2022-09-04</td>
                                <td class="td5">4</td>
                                <td class="td6">
                                    <span class="stars_img">5점</span>
                                </td>
                            </tr>
                            <tr class="tr3">
                                <td class="td1">2</td>
                                <td class="td2">
                                    달콤핑크패키지말고 맛 선택 가능한게 더 나은 것 같아요
                                    <span class="hit">HIT</span>
                                </td>
                                <td class="td3">네이****</td>
                                <td class="td4">2022-09-03</td>
                                <td class="td5">20</td>
                                <td class="td6">
                                    <span class="stars_img">5점</span>
                                </td>
                            </tr>
                            <tr class="tr4">
                                <td class="td1">1</td>
                                <td class="td2">
                                    만족
                                    <span class="hit">HIT</span>
                                </td>
                                <td class="td3">네이****</td>
                                <td class="td4">2022-09-02</td>
                                <td class="td5">10</td>
                                <td class="td6">
                                    <span class="stars_img">5점</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="movelist">
                        <p class="before"><a href="#">이전</a></p>
                        <a href="#">1</a>
                        <p class="next"><a href="#">다음</a></p>
                    </div>

                <p class="write_review"><a href="#">후기작성하기</a></p>
                <p class="view_all"><a href="#">모두보기</a></p>
                </div>
            </div>

            <div class="qa">
                <h3 class="qa_title_bt">상품Q&A</h3>
                <span class="qa_quantity_box"></span>
                <span class="hide">(상품Q&A 수량)</span>
                <span class="qa_quantity">2</span>
                
                <div class="qa_wrap">
                    <table class="qa_table" cellpadding="0" cellspacing="0" >
                        <caption class="hide">상품문의</caption>
                        <thead class="thead_cls">
                            <th class="th1">번호</th>
                            <th class="th2">제목</th>
                            <th class="th3">작성자</th>
                            <th class="th4">작성일</th>
                            <th class="th5">조회</th>
                        </thead>

                        <tbody class="tbody_cls">
                            <tr class="tr1">
                                <td class="td1">2</td>
                                <td class="td2">
                                    <span class="lock_img">잠긴글</span>
                                    공복에 먹어도 되나요?
                                </td>
                                <td class="td3">차증****</td>
                                <td class="td4">2022-08-29</td>
                                <td class="td5">0</td>
                            </tr>
                            <tr class="tr2">
                                <td class="td1">1</td>
                                <td class="td2">
                                    <span class="reply_img">답변</span>
                                    <span class="lock_img">잠긴글</span>
                                    공복에 먹어도 되나요?
                                </td>
                                <td class="td3">티젠몰</td>
                                <td class="td4">2022-08-29</td>
                                <td class="td5">1</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="movelist">
                        <p class="before"><a href="#">이전</a></p>
                        <a href="#">1</a>
                        <p class="next"><a href="#">다음</a></p>
                    </div>

                    <p class="write_qa"><a href="#">상품문의하기</a></p>
                    <p class="view_all"><a href="#">모두보기</a></p>
                </div>
            </div>

        </section>

    </main> 
<?php include "../inc/footer.php"; ?>

</body>
</html>