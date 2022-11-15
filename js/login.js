$(document).ready(function(){
    // 로그인 아이콘 효과
    /* position:relative; */
    $(".other_login a").hover(function(){
        $(this).find("span").stop().animate({top:-10}, "fast");
    },function(){
        $(this).find("span").stop().animate({top:0}, "fast");
    });
});