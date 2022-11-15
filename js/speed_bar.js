$(document).ready(function(){
/* 간편 편의기능 바 */
    $(".speed_bar_1 a").hover(function(){
        $(".speed_bar_1_txtbox").show();
    },function(){
        $(".speed_bar_1_txtbox").hide();
    });
    $(".speed_bar_2 a").hover(function(){
        $(".speed_bar_2_txtbox").show();
    },function(){
        $(".speed_bar_2_txtbox").hide();
    });
    $(".speed_bar_3 a").hover(function(){
        $(".speed_bar_3_txtbox").show();
    },function(){
        $(".speed_bar_3_txtbox").hide();
    });
    $(".speed_bar_4 a").hover(function(){
        $(".speed_bar_4_txtbox").show();
    },function(){
        $(".speed_bar_4_txtbox").hide();
    });
    $(".speed_bar_5 a").hover(function(){
        $(".speed_bar_5_txtbox").show();
    },function(){
        $(".speed_bar_5_txtbox").hide();
    });
/* ------------------------화면이동부드럽게----------------------- */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});