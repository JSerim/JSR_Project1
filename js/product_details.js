$(document).ready(function(){
/* ------------------------배송비할인창----------------------- */
$(".delivery_charge_bt").click(function(){
    $(".delivery_charge_box_wrap").show();
});
$(".delivery_charge_box_close_bt").click(function(){
    $(".delivery_charge_box_wrap").hide();
});
/* ------------------------상품선택----------------------- */



/* ---------------------------------PageEnd---------------------------------- */

});

/* ------------------------이미지변환----------------------- */
function changeImage(img_url){
    var big_img = document.getElementById("big_img");
    big_img.src = img_url;
};

