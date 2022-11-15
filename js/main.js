$(document).ready(function(){
/* Main Image */
    /* main_image_wrap */
    $('.main_image_wrap').bxSlider({
        mode:"fade",
        auto:true,
        autoControls:true
    });
    /* control */
    $(".main_image .bx-wrapper .bx-controls-auto .bx-stop").click(function(){
        $(".main_image .bx-wrapper .bx-controls-auto .bx-stop").css({display:"none"});
        $(".main_image .bx-wrapper .bx-controls-auto .bx-start").css({display:"block"});
    });
    $(".main_image .bx-wrapper .bx-controls-auto .bx-start").click(function(){
        $(".main_image .bx-wrapper .bx-controls-auto .bx-start").css({display:"none"});
        $(".main_image .bx-wrapper .bx-controls-auto .bx-stop").css({display:"block"});
    });

/* $('.bxslider').bxSlider( {
    mode: 'horizontal',// 가로 방향 수평 슬라이드
    speed: 500,        // 이동 속도를 설정
    pager: false,      // 현재 위치 페이징 표시 여부 설정
    moveSlides: 1,     // 슬라이드 이동시 개수
    slideWidth: 100,   // 슬라이드 너비
    minSlides: 4,      // 최소 노출 개수
    maxSlides: 4,      // 최대 노출 개수
    slideMargin: 5,    // 슬라이드간의 간격
    auto: true,        // 자동 실행 여부
    autoHover: true,   // 마우스 호버시 정지 여부
    controls: false    // 이전 다음 버튼 노출 여부
}); */

/* cont_all */
    $(".cont1_view_all").hover(function(){
        $(this).stop().animate({top:9},"fast");
    },function(){
        $(this).stop().animate({top:16},"fast");
    });
    $(".cont2_view_all").hover(function(){
        $(this).stop().animate({top:9},"fast");
    },function(){
        $(this).stop().animate({top:16},"fast");
    });

/* New Products 슬라이드 */
    $('.cont1_product_wrap').bxSlider({
        auto:true,
        moveSlides: 1,
        slideWidth: 290,
        minSlides: 4,
        maxSlides: 4,
        slideMargin: 10,
        autoControls:true,
        pager:false
    });
    $(".cont1_product .bx-wrapper .bx-controls-auto .bx-stop").click(function(){
        $(".cont1_product .bx-wrapper .bx-controls-auto .bx-stop").css({display:"none"});
        $(".cont1_product .bx-wrapper .bx-controls-auto .bx-start").css({display:"block"});
    });
    $(".cont1_product .bx-wrapper .bx-controls-auto .bx-start").click(function(){
        $(".cont1_product .bx-wrapper .bx-controls-auto .bx-start").css({display:"none"});
        $(".cont1_product .bx-wrapper .bx-controls-auto .bx-stop").css({display:"block"});
    });
/* New Products 애니메이션 */
    $(".cont1_product_wrap>li").hover(function(){
        $(this).find(".black_background").stop().animate({top:0}, "fast");
    },function(){
        $(this).find(".black_background").stop().animate({top:290}, "fast");
    });

/* Best 슬라이드*/
    $('.cont2_product_wrap').bxSlider({
        auto:true,
        moveSlides: 1,
        slideWidth: 290,
        minSlides: 4,
        maxSlides: 4,
        slideMargin: 10,
        autoControls:true,
        pager:false
    });
    $(".cont2_product .bx-wrapper .bx-controls-auto .bx-stop").click(function(){
        $(".cont2_product .bx-wrapper .bx-controls-auto .bx-stop").css({display:"none"});
        $(".cont2_product .bx-wrapper .bx-controls-auto .bx-start").css({display:"block"});
    });
    $(".cont2_product .bx-wrapper .bx-controls-auto .bx-start").click(function(){
        $(".cont2_product .bx-wrapper .bx-controls-auto .bx-start").css({display:"none"});
        $(".cont2_product .bx-wrapper .bx-controls-auto .bx-stop").css({display:"block"});
    });
/* Best 애니메이션*/
    $(".cont2_product_wrap>li").hover(function(){
        $(this).find(".black_background").stop().animate({top:0}, "fast");
    },function(){
        $(this).find(".black_background").stop().animate({top:290}, "fast");
    });

/* Event */
    // 좌측 포스터
    $(".event_next").click(function(){
        $(".event_poster").animate({left:-400});
    });
    $(".event_before").click(function(){
        $(".event_poster").animate({left:0});
    });
    // 우측 하단 포스터
    $(".event_3_poster").hover(function(){
        $(".white_background").show();
    },function(){
        $(".white_background").hide();
    });
});