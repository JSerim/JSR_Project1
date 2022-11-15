$(document).ready(function(){
    // 스피드메뉴버튼
    $(".speed_menu_wrap li a").hover(function(){
    $(this).css({boxShadow:"3px 3px 5px -3px"});
    },function(){
        $(this).css({boxShadow:"none"});
    });
});