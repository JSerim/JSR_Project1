$(document).ready(function(){
/* ---------------------------------Header---------------------------------- */
/* Top Manu */
/* SNS */
    $(".sns_wrap a").hover(function(){
        $(this).parent().css({background:"#bebebe"});
    },function(){
        $(this).parent().css({background:"#fcf9ed"});
    });


/* Language */
    $(".top_m6").click(function(){
        $(".language").slideToggle();
    });

    /* GNB */
    $(".gnb1").hover(function(){
        $(".gnb1_wrap").stop().slideDown();
        $(".gnb1>a").stop().css({borderBottom:"4px solid #002a03"});
    }, function(){
        $(".gnb1_wrap").stop().slideUp();
        $(".gnb1>a").stop().css({borderBottom:0});
    });
    $(".gnb2").hover(function(){ 
        $(".gnb2_wrap").stop().slideDown();
        $(".gnb2>a").stop().css({borderBottom:"4px solid #002a03"});
    }, function(){
        $(".gnb2_wrap").stop().slideUp();
        $(".gnb2>a").stop().css({borderBottom:0});
    });
    $(".gnb3").hover(function(){
        $(".gnb3_wrap").stop().slideDown();
        $(".gnb3>a").stop().css({borderBottom:"4px solid #002a03"});
    }, function(){
        $(".gnb3_wrap").stop().slideUp();
        $(".gnb3>a").stop().css({borderBottom:0});
    });
    $(".gnb4").hover(function(){
        $(".gnb4_wrap").stop().slideDown();
        $(".gnb4>a").stop().css({borderBottom:"4px solid #002a03"});
    }, function(){
        $(".gnb4_wrap").stop().slideUp();
        $(".gnb4>a").stop().css({borderBottom:0});
    });
    $(".gnb5").hover(function(){
        $(".gnb5>a").stop().css({borderBottom:"4px solid #002a03"});
    }, function(){
        $(".gnb5>a").stop().css({borderBottom:0});
    });
    $(".gnb6").hover(function(){
        $(".gnb6_wrap").stop().slideDown();
        $(".gnb6>a").stop().css({borderBottom:"4px solid #002a03"});
    }, function(){
        $(".gnb6_wrap").stop().slideUp();
        $(".gnb6>a").stop().css({borderBottom:0});
    });
    $(".gnb7").hover(function(){
        $(".gnb7_wrap").stop().slideDown();
        $(".gnb7>a").stop().css({borderBottom:"4px solid #002a03"});
    }, function(){
        $(".gnb7_wrap").stop().slideUp();
        $(".gnb7>a").stop().css({borderBottom:0});
    });
});