$(document).ready(function(){
    // 로그인 아이콘 효과
    /* position:relative; */
    $(".other_login a").hover(function(){
        $(this).find("span").stop().animate({top:-10}, "fast");
    },function(){
        $(this).find("span").stop().animate({top:0}, "fast");
    });
});

function login_form_check(){
    var u_id = document.getElementById("u_id");
    var pwd = document.getElementById("pwd");

    if(!u_id.value){
        alert("아이디를 입력하세요");
        u_id.focus();
        return false;
    };
    if(!pwd.value){
        alert("비밀번호를 입력하세요");
        pwd.focus();
        return false;
    };
};
