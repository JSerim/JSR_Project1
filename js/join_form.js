/* ---------------------------------form_check---------------------------------- */
function form_check(){

    var u_name = document.getElementById("u_name");
    var u_id = document.getElementById("u_id");
    var pwd = document.getElementById("pwd");
    var pwdck = document.getElementById("pwdck");
    var mobile = document.getElementById("mobile");
    // var codenb = document.getElementById("codenb_id");
    var email_id = document.getElementById("email_id");
    var email_dns = document.getElementById("email_dns");
    var agree1 = document.getElementById("agree1_id");
    var agree2 = document.getElementById("agree2_id");

    // 이름
    if(!u_name.value){ 
        var txt = document.getElementById("err_nm");
        txt.textContent = "이름을 입력하세요.";
        u_name.focus(); 
        return false; 
    };
    var u_name_reg = /^[ㄱ-힣a-zA-Z]+$/g;
    if( !u_name_reg.test(u_name.value) ){
        var txt = document.getElementById("err_nm");
        txt.textContent = "이름은 한글과 영어만 입력가능합니다.";
        u_name.focus();
        return false;
    };
    // 아이디
    if(!u_id.value){
        var txt = document.getElementById("err_id");
        txt.textContent = "아이디를 입력하세요.";
        u_id.focus();
        return false;
    };
    var id_len = u_id.value.length;
    if(id_len < 4 || id_len > 12){
        var txt = document.getElementById("err_id");
        txt.textContent = "아이디는 4~12글자만 입력할 수 있습니다.";
        u_id.focus();
        return false;
    };
    var u_id_reg = /^[A-Za-z0-9+]*$/;
    if( !u_id_reg.test(u_id.value) ){
        var txt = document.getElementById("err_id");
        txt.textContent = "아이디는 영어 또는 숫자만 입력할 수 있습니다.";
        u_id.focus();
        return false;
    };
    // 비밀번호
    if(!pwd.value){
        var txt = document.getElementById("err_pwd");
        txt.textContent = "비밀번호를 입력하세요.";
        pwd.focus();
        return false;
    };
    var pw_len = pwd.value.length;
    if(pw_len < 4 || pw_len > 12){
        var txt = document.getElementById("err_pwd");
        txt.textContent = "비밀번호는 4~12글자만 입력할 수 있습니다.";
        pwd.focus();
        return false;
    };
    var pwd_reg = /^[A-Za-z0-9+]*$/;
    if( !pwd_reg.test(pwd.value) ){
        var txt = document.getElementById("err_pwd");
        txt.textContent = "비밀번호는 영어 또는 숫자만 입력할 수 있습니다.";
        pwd.focus();
        return false;
    };

    if(!pwdck.value){
        var txt = document.getElementById("err_pwdck");
        txt.innerHTML = "비밀번호 확인을 입력하세요.";
        pwdck.focus();
        return false;
    };
    if(pwdck.value != pwd.value){
        var txt = document.getElementById("err_pwdck");
        txt.textContent = "비밀번호가 일치하지 않습니다.";
        pwdck.focus();
        return false;
    };
    // 휴대전화
    if(!mobile.value){
        var txt = document.getElementById("err_mobile");
        txt.textContent = "전화번호를 입력하세요.";
        mobile.focus();
        return false;
    };
    var mobile_reg = /^[0-9]+$/g;
    if( !mobile_reg.test(mobile.value) ){
        var u_name = document.getElementById("unm_id");
        var txt = document.getElementById("err_mobile");
        txt.textContent = "전화번호는 숫자만 입력할 수 있습니다.";
        mobile.focus();
        return false;
    };

    // 인증번호 X
/*     if(!codenb.value){ 
        var txt = document.getElementById("err_coden");
        txt.textContent = "인증번호를 입력하세요.";
        codenb.focus(); 
        return false; 
    };
    if(codenb.value !=yet.value ){
        var txt = document.getElementById("err_coden");
        txt.textContent = "인증번호가 맞지 않습니다.";
        codenb.focus();
        return false;
    }; */

    // 이메일
    if(!email_id.value){ 
        var txt = document.getElementById("err_email");
        txt.textContent = "이메일을 입력하세요.";
        email_id.focus(); 
        return false; 
    };
/*     var email_reg = /^[A-Za-a0-9]+[A-Za-a0-9_.]*$/;
    if( !email_reg.test(email.value) ){
        var txt = document.getElementById("err_email");
        txt.textContent = "이메일은 영어 또는 숫자만 입력할 수 있습니다.";
        email.focus();
        return false;
    }; */
    if(!email_dns.value){ 
        var txt = document.getElementById("err_email");
        txt.textContent = "이메일 주소를 입력하거나 선택하세요.";
        email_dns.focus(); 
        return false; 
    };
/*     var dns_email_reg = /^[-A-Za-z0-9_]+[.][A-Za-z]*$/;
    if( !dns_email_reg.test(dns_email.value) ){
        var txt = document.getElementById("err_email");
        txt.textContent = "이메일 주소는 영어 또는 숫자만 입력할 수 있습니다.";
        dns_email.focus();
        return false;
    }; */
    // 약관 동의
    if(!agree1.checked){ 
        var txt = document.getElementById("err_agree1");
        txt.textContent = "약관 동의가 필요합니다.";
        agree1.focus();
        return false;
    };
    if(!agree2.checked){ 
        var txt = document.getElementById("err_agree2");
        txt.textContent = "약관 동의가 필요합니다.";
        agree2.focus();
        return false;
    };
};


/* -----------------------------오류메시지 없애기-------------------------- */
// 이름
function pass_nm(){
    var u_name = document.getElementById("u_name");
    var u_name_reg = /^[ㄱ-힣a-zA-Z]+$/g;
    if(u_name_reg.test(u_name.value)){
        var txt = document.getElementById("err_nm");
        txt.textContent = "";
        u_name.focus();
        return false;
    };
};
// 아이디
function pass_id(){
    var u_id = document.getElementById("u_id");
    var u_id_reg = /^[A-Za-z0-9+]*$/;
    if(u_id_reg.test(u_id.value)){
        var txt = document.getElementById("err_id");
        txt.textContent = "";
        u_id.focus();
        return false;
    };
};
// 비밀번호
function pass_pw(){
    var pwd = document.getElementById("pwd");
    var pwd_reg = /^[A-Za-z0-9+]*$/;
    if( pwd_reg.test(pwd.value) ){
        var txt = document.getElementById("err_pwd");
        txt.textContent = "";
        pwd.focus();
        return false;
    };
};
// 비밀번호 확인
function pass_pwck(){
    var pwd = document.getElementById("pwd");
    var pwdck = document.getElementById("pwdck");
    if(pwdck.value==pwd.value ){
        var txt = document.getElementById("err_pwdck");
        txt.textContent = "";
        pwdck.focus();
        return false;
    };
};
// 휴대전화
function pass_tel(){
    var mobile = document.getElementById("mobile");
    var mobile_reg = /^[0-9]+$/g;
    if( mobile_reg.test(mobile.value) ){
        var txt = document.getElementById("err_mobile");
        txt.textContent = "";
        mobile.focus();
        return false;
    };
};

// 인증번호
/* function pass_codenb(){
    var codenb = document.getElementById("codenb_id");
    if(codenb.value==yet.value ){
        var txt = document.getElementById("err_coden");
        txt.textContent = "";
        codenb.focus();
        return false;
    }; 
}; */

// 이메일1
function pass_email1(){
    var email_id = document.getElementById("email_id");
    var email_reg = /^[-A-Za-a0-9_]+[-A-Za-a0-9_.]*$/;
    if( email_reg.test(email_id.value) ){
        var txt = document.getElementById("err_email");
        txt.textContent = "";
        email_id.focus();
        return false;
    };
};
// 이메일2
function pass_email2(){
    var email_dns = document.getElementById("email_dns");
    if(email_dns.value){ 
        var txt = document.getElementById("err_email");
        txt.textContent = "";
        email_dns.focus(); 
        return false; 
    };
    var email_dns_reg = /^[-A-Za-z0-9_]+[.][A-Za-z]*$/;
    if( email_dns_reg.test(email_dns.value) ){
        var txt = document.getElementById("err_email");
        txt.textContent = "";
        email_dns.focus();
        return false;
    };
};

// 약관동의1
function pass_agree1(){
    var agree1 = document.getElementById("agree1_id");
    if(agree1.checked){ 
        var txt = document.getElementById("err_agree1");
        txt.textContent = "";
        agree1.focus();
        return false;
    };
};
// 약관동의2
function pass_agree2(){
    var agree2 = document.getElementById("agree2_id");
    if(agree2.checked){ 
        var txt = document.getElementById("err_agree2");
        txt.textContent = "";
        agree2.focus();
        return false;
    };
};
/* --------------------------------이메일 선택----------------------------------- */
function change_email(){
    var email_dns = document.getElementById("email_dns");
    var email_sel = document.getElementById("email_sel");

    var email_idx = email_sel.options.selectedIndex;
    var email_val = email_sel.options[email_idx].value;

    email_dns.value = email_val;
};


/* ================================================== */

    // 전체 약관 동의 버튼 기능
    var all_agree = document.getElementById("all_agree_id");
    var agree1 = document.getElementById("agree1_id");
    var agree2 = document.getElementById("agree2_id");
    var agree3 = document.getElementById("agree3_id");
    var agree4 = document.getElementById("agree4_id");
    function all_agree_Y(){
        if(all_agree.checked){
            agree1.checked;
            agree2.checked;
            agree3.checked;
            agree4.checked;
        };
    };

/* ----------------------------아이디 중복 확인 X----------------------------- */
function id_search(){
    window.open("id_search.php", "idsch", "width=600,height=300");
};


/* ---------------------------------주소 검색------------------------------------ */
function sample6_execDaumPostcode() {
    new daum.Postcode({
    oncomplete: function(data) {
        // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
    
        // 각 주소의 노출 규칙에 따라 주소를 조합한다.
        // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
        var addr = ''; // 주소 변수
        var extraAddr = ''; // 참고항목 변수
    
        //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
        if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
            addr = data.roadAddress;
        } else { // 사용자가 지번 주소를 선택했을 경우(J)
            addr = data.jibunAddress;
        }
    
        // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
        if(data.userSelectedType === 'R'){
            // 법정동명이 있을 경우 추가한다. (법정리는 제외)
            // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
            if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                extraAddr += data.bname;
            }
            // 건물명이 있고, 공동주택일 경우 추가한다.
            if(data.buildingName !== '' && data.apartment === 'Y'){
                extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
            }
            // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
            if(extraAddr !== ''){
                extraAddr = ' (' + extraAddr + ')';
            }
            // 조합된 참고항목을 해당 필드에 넣는다.
            document.getElementById("addr_d").value = extraAddr;
        
        } else {
            document.getElementById("addr_d").value = '';
        }
    
        // 우편번호와 주소 정보를 해당 필드에 넣는다.
        document.getElementById("ps_code").value = data.zonecode;
        document.getElementById("addr_b").value = addr;
        // 커서를 상세주소 필드로 이동한다.
        document.getElementById("addr_d").focus();
    }
    }).open();
    };
