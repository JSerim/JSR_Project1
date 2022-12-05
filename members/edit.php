<?php
include "../inc/session.php";
$table_name = "members";
/* --------------- 1. 데이터가져오기 --------------- */
$u_type = $_POST["user_type"];
$pwd = $_POST["pwd"];
$ps_code = $_POST["ps_code"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$mobile = $_POST["mobile"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$gender = $_POST["gender"];
$birth = $_POST["birth"];
$calender = $_POST["calender"];
$accounter = $_POST["accnm_nm"];
$bank = $_POST["bank_sel"];
$account = $_POST["accnb_nm"];
$sms_apply = $_POST["agree3_nm"];
$email_apply = $_POST["agree4_nm"];

// 값 확인용
/* echo "<p> 회원종류 : ".$u_type."</p>";
echo "<p> 비밀번호 : ".$pwd."</p>";
echo "<p> 우편번호 : ".$ps_code."</p>";
echo "<p> 기본주소 : ".$addr_b."</p>";
echo "<p> 상세주소 : ".$addr_d."</p>";
echo "<p> 전화번호 : ".$mobile."</p>";
echo "<p> 이메일 : ".$email."</p>";
echo "<p> 성별 : ".$gender."</p>";
echo "<p> 생년월일 : ".$birth."</p>";
echo "<p> 음력양력 : ".$calender."</p>";
echo "<p> 예금주 : ".$accounter."</p>";
echo "<p> 은행 : ".$bank."</p>";
echo "<p> 계좌번호 : ".$account."</p>";
echo "<p> SMS 수신동의 : ".$sms_apply."</p>";
echo "<p> 이메일 수신 동의 : ".$email_apply."</p>"; */

/* ---------------------- 2. DB 연결---------------------- */
include "../inc/dbcon.php";

/* ---------------- 3. 데이터 저장 : 쿼리 작성 ----------------- */
// 비밀번호 변경시
$sql_yPwd = "update $table_name set ";
$sql_yPwd .= "user_type='$u_type', ";
$sql_yPwd .= "pwd='$pwd', ";
$sql_yPwd .= "ps_code='$ps_code', ";
$sql_yPwd .= "addr_b='$addr_b', ";
$sql_yPwd .= "addr_d='$addr_d', ";
$sql_yPwd .= "mobile='$mobile', ";
$sql_yPwd .= "email='$email', ";
$sql_yPwd .= "gender='$gender', ";
$sql_yPwd .= "birth='$birth', ";
$sql_yPwd .= "calender='$calender', ";
$sql_yPwd .= "account_nm='$accounter', ";
$sql_yPwd .= "bank='$bank', ";
$sql_yPwd .= "account_nb='$account', ";
$sql_yPwd .= "sms_apply='$sms_apply', ";
$sql_yPwd .= "email_apply='$email_apply' ";
$sql_yPwd .= "where idx=$s_idx; ";
// echo $sql_yPwd;

// 비밀번호 미변경시
$sql_nPwd = "update $table_name set ";
$sql_nPwd .= "user_type='$u_type', ";
$sql_nPwd .= "ps_code='$ps_code', ";
$sql_nPwd .= "addr_b='$addr_b', ";
$sql_nPwd .= "addr_d='$addr_d', ";
$sql_nPwd .= "mobile='$mobile', ";
$sql_nPwd .= "email='$email', ";
$sql_nPwd .= "gender='$gender', ";
$sql_nPwd .= "birth='$birth', ";
$sql_nPwd .= "calender='$calender', ";
$sql_nPwd .= "account_nm='$accounter', ";
$sql_nPwd .= "bank='$bank', ";
$sql_nPwd .= "account_nb='$account', ";
$sql_nPwd .= "sms_apply='$sms_apply', ";
$sql_nPwd .= "email_apply='$email_apply' ";
$sql_nPwd .= "where idx=$s_idx; ";
// echo $sql_nPwd;

/* ---------------- 4. 데이터베이스에 쿼리 전송 ----------------- */
if($pwd){
    mysqli_query($dbcon, $sql_yPwd);
} else{
    mysqli_query($dbcon, $sql_nPwd);
};

/* ---------------- 5. DB 접속 종료 ----------------- */
mysqli_close($dbcon);

/* -------------------------- 6-2. 리디렉션 ---------------------------- */
echo "
<script type=\"text/javascript\">
alert('회원정보가 수정되었습니다.');
location.href = \"member_info.php\";
</script>";
?>
