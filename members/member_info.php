<?php 
include "../inc/session.php";
include "../inc/login_check.php";
include "../inc/dbcon.php";
$sql = "select * from members where idx=$s_idx;";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAZEN 회원정보수정</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/join.css">
    <style type="text/css">
        .title{
            display:inline-block;
            width:18px;
            height:35px;
            background-color:#002a03;
            position:relative;
            left:50px;
        }
        .modify_title{
            font-size:25px;
            font-weight:bold;
            letter-spacing:2px;
            position:relative;
            top:-40px;
            left:80px;
        }
        .join_form_wrap{
            position:relative;
            top:-15px;
        }
        .bd_title{
            font-weight:bold;
        }
        .content{
            height: 1800px;
        }
    </style>
    <!-- JS -->
    <script type="text/javascript" src="../js/member_info.js"></script>

    <script type="text/javascript">
        function edit_form_check(){
        var pwd = document.getElementById("pwd");
        var repwd = document.getElementById("pwdck");
        if(pwd.value){
            var pw_len = pwd.value.length;
            if(pw_len < 4 || pw_len > 12){
                var err_txt = document.getElementByID("err_pwd");
                err_txt.innerHTML = "비밀번호는 4~12글자만 입력할 수 있습니다.";
                pwd.focus();
                return false;
            };
        };
        if(pwd.value){
            if(pwd.value != repwd.value){
                var err_txt = document.getElementByID("err_pwdck");
                err_txt.innerHTML = "비밀번호가 일치하지 않습니다.";
                repwd.focus();
                return false;
            };
        };
        };
    function mem_del(){
        var rtn_val = confirm("정말 탈퇴하시겠습니까?");
        if(rtn_val==true){
            location.href="member_delete.php";
        };
    };
</script>
</head>
<body>
<?php include "../inc/header_sub.php"; ?>
<?php/*  include "../inc/search.php";  */?>
<?php include "../inc/speed_bar.php"; ?>
<?php include "../inc/speed_menu.php"; ?>

    <main id="content" class="content">
        <section class="join">
            <span class="title"></span><h2 class="modify_title">회원정보수정</h2>
            <form name="join" action="insert.php" method="post" onsubmit="return edit_form_check()">
                
                <fieldset class="join_form_wrap">
                    <p class="essential"><span>*</span>필수입력사항</p>

                    <legend class="hide">정보입력</legend>
                    <input type="hidden" name="g_idx" value="<?php echo $array["idx"];?>">

                    <div>
                        <label class="member_type"><input type="radio" name="user_type" id="individual" value="개인" <?php if($array["user_type"] == "개인") echo " checked"; ?>>개인회원</label>
                        <label class="member_type"><input type="radio" name="user_type" id="entrepreneur" value="사업자" <?php if($array["user_type"] == "사업자") echo " checked"; ?>>사업자회원</label>
                        <label class="member_type"><input type="radio" name="user_type" id="foreigner" value="외국인" <?php if($array["user_type"] == "외국인") echo " checked"; ?>>외국인회원(foreigner)</label>
                    </div>

                    <div class="wrap2">
                        <p class="wrap_p">
                            <span class="req">*</span>
                            <laber for="u_name" class="hide">이름</laber>
                            <input type="text" class="u_name" name="u_name" id="u_name" readonly value="<?php echo $array["u_name"]; ?>">
                        </p>
                        <p class="wrap_p">
                            <span class="req">*</span>
                            <laber for="u_id" class="hide">아이디</laber>
                            <input type="text" class="u_id" name="u_id" id="u_id" readonly value="<?php echo $array["u_id"]; ?>">
                        </p>
                        <p class="wrap_p">
                            <span class="req">*</span>
                            <laber for="pwd" class="hide">비밀번호</laber>
                            <input type="text" class="pwd" name="pwd" id="pwd" placeholder="비밀번호" onchange="pass_pw()">
                            <br><span class="upw_txt">(비밀번호는 4~12글자만 입력할 수 있습니다.)</span>
                            <br><span class="err_txt err_pwd" id="err_pwd"></span>
                        </p>
                        <p class="wrap_p">
                            <span class="req">*</span>
                            <laber for="pwdck" class="hide">비밀번호 확인</laber>
                            <input type="text" class="pwdck" name="pwdck" id="pwdck" placeholder="비밀번호 확인" onchange="pass_pwck()">
                            <br><span class="err_txt" id="err_pwdck"></span>
                        </p>
                    </div>

                    <p>
                        <laber for="ps_code" class="hide">우편번호</laber>
                        <input type="text" class="ps_code" name="ps_code" id="ps_code" placeholder="우편번호" value="<?php echo $array["u_name"]; ?>">
                        <button type="button" class="search_addr" name="search_addr" id="search_addr" onclick="sample6_execDaumPostcode()"> 주소검색</button><br>
                        <laber for="addr_b" class="hide">기본주소</laber>
                        <input type="text" class="addr_b" name="addr_b" id="addr_b" placeholder="기본주소" value="<?php echo $array["addr_b"]; ?>"><br>
                        <laber for="addr_d" class="hide">상세주소</laber>
                        <input type="text" class="addr_d addr2" name="addr_d" id="addr_d" placeholder="상세주소" value="<?php echo $array["addr_d"]; ?>"><br>
                    </p>

                    <p class="wrap_p">
                        <span class="req">*</span>
                        <laber for="mobile" class="hide">전화번호</laber>
                        <input type="text" class="mobile" name="mobile" id="mobile" placeholder="휴대전화" onchange="pass_tel()" value="<?php echo $array["mobile"]; ?>">
                        <br><span class="mobile_txt">("-" 없이 숫자만 입력)</span>
                        <br><span class="err_txt err_mobile" id="err_mobile"></span>
                    </p>

                    <p class="wrap_p">
                        <span class="req">*</span>
                        <laber for="email_id" class="hide">이메일</laber>
                        <?php $email = explode("@", $array["email"]); ?>
                        <input type="text" class="email_id" name="email_id" id="email_id" placeholder="이메일" onchange="pass_email1()" value="<?php echo $email[0];?>">
                        <span class="email_symbol">@</span>
                        <input type="text" class="email_dns" name="email_dns" id="email_dns" placeholder="이메일 주소" onchange="pass_email2()" value="<?php echo $email[1];?>">
                        <select class="email_sel" name="email_sel" id="email_sel" onchange="change_email()">
                            <option value="">-이메일 선택-</option>
                            <option value="naver.com">naver.com</option>
                            <option value="daum.net">daum.net</option>
                            <option value="nate.com">nate.com</option>
                            <option value="hotmail.com">hotmail.com</option>
                            <option value="yahoo.com">yahoo.com</option>
                            <option value="empas.com">empas.com</option>
                            <option value="korea.com">korea.com</option>
                            <option value="dreamwiz.com">dreamwiz.com</option>
                            <option value="gmail.com">gmail.com</option>
                            <option value="">직접입력</option>
                        </select>
                        <br><span class="err_txt" id="err_email"></span>
                    </p>
                </fieldset> 

                    <fieldset class="add_info_wrap">
                        <legend class="add_info">추가정보</legend>
                        <div class="gender_wrap">
                            <h4 class="gender_title">성별</h4>
                                <label class="gender1"><input type="radio" name="gender" id="male_id" value="남" <?php if($array["gender"] == "남") echo " checked"; ?>>남자</label>
                                <label class="gender2"><input type="radio" name="gender" id="female_id" value="여" <?php if($array["gender"] == "여") echo " checked"; ?>>여자</label>
                        </div>
                        <div class="bd_wrap">
                            <laber for="birth" class="bd_title">생년월일</laber>
                            <?php $birth = str_replace("-", "", $array["birth"]); ?>
                                <input type="text" class="birth" name="birth" id= "birth" size="10" value="<?php echo $birth;?>">
                                <br><span class="bd_txt">(ex. 20221009)</span><br>
                                <span class="bd_radio">
                                    <label class="calendar1"><input type="radio" name="calender" id="solar_id" value="양력" <?php if($array["calender"] == "양력") echo " checked"; ?>>양력</label>
                                    <label class="calendar2"><input type="radio" name="calender" id="lunar_id" value="음력" <?php if($array["calender"] == "음력") echo " checked"; ?>>음력</label>
                                </span>
                        </div>
                        <div class="refund_info_wrap">
                            <h4 class="refund_info_title">환불계좌 정보</h4>
                                <ul>
                                    <li class="refund_li1">
                                        <span class="refund_stt">＊ 예금주</span>
                                        <input type="text"class="accnm_cls" name="accnm_nm" id="accnm_id" value="<?php echo $array["account_nm"]; ?>">
                                    </li>
                                    <li class="refund_li2">
                                        <span class="refund_stt">＊ 은행명</span>
                                        <select name="bank_sel" id="bank_sel" class="bank_sel">
                                            <option value="" disabled>- 은행선택 -</option>
                                            <option value="신한은행"<?php if($array["bank"]=="신한은행") echo " selected"; ?>>신한은행</option>
                                            <option value="우리은행"<?php if($array["bank"]=="우리은행") echo " selected"; ?>>우리은행</option>
                                            <option value="농협은행"<?php if($array["bank"]=="농협은행") echo " selected"; ?>>농협은행</option>
                                            <option value="하나은행"<?php if($array["bank"]=="하나은행") echo " selected"; ?>>하나은행</option>
                                            <option value="국민은행"<?php if($array["bank"]=="국민은행") echo " selected"; ?>>국민은행</option>
                                            <option value="">직접입력</option>
                                        </select>
                                    </li>
                                    <li class="refund_li3">
                                        <span class="refund_stt">＊ 계좌번호</span>
                                        <input type="text" class ="accnb_cls" name="accnb_nm" id="accnb_id" value="<?php echo $array["account_nb"]; ?>">
                                        <br><span class="accnb_txt">("-"와 숫자만 입력)</span>
                                    </li>
                                </ul>
                        </div>
                    </fieldset>

                    <fieldset class="agree_wrap">
                        <legend class="hide">수신 동의</legend>
                        <p class="agree3_txt">SMS 수신 동의
                            <label class="agree3_ckb"><input type="checkbox" class="agree3_cls" name="agree3_nm" id="agree3_id" value="Y"<?php if($array["sms_apply"] == "Y") echo " checked"; ?>>동의함</label>
                        </p>
                        <p class="agree4_txt">이메일 수신 동의
                            <label class="agree4_ckb"><input type="checkbox" class="agree4_cls" name="agree4_nm" id="agree4_id" value="Y" <?php if($array["email_apply"] == "Y") echo " checked"; ?>>동의함</label>
                        </p>
                    </fieldset>
                    <p class="btn"><button type="submit" class="join_sbm_cls" name="join_sbm_nm" id="join_sbm_id">정보 수정</button></p>
            </form>
        </section>
    </main>

<?php include "../inc/footer.php"; ?>

</body>
</html>