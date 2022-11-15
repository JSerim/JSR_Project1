<?php
/* --------------- 1. 데이터가져오기 --------------- */
$u_type = $_POST["user_type"];
$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
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
$reg_date = date("Y-m-d");

// 값 확인용
/* echo "<p> 회원종류 : ".$u_type."</p>";
echo "<p> 이름 : ".$u_name."</p>";
echo "<p> 아이디 : ".$u_id."</p>";
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
echo "<p> 이메일 수신 동의 : ".$email_apply."</p>";
echo "<p> 가입일 : ".$reg_date."</p>";
exit; */

/* ---------------------- 2. DB 연결---------------------- */
include "../inc/dbcon.php";

/* ---------------- 3. 데이터 저장 : 쿼리 작성 ----------------- */
$sql = "insert into members";
$sql .= "(user_type, u_name, u_id, pwd, ps_code, addr_b, addr_d, mobile, email, gender, birth, calender, account_nm, bank, account_nb, sms_apply, email_apply, reg_date)";
$sql .= "values";
$sql .= "('$u_type', '$u_name', '$u_id', '$pwd', '$ps_code', '$addr_b', '$addr_d', '$mobile', '$email', '$gender', '$birth', '$calender', '$accounter', '$bank', '$account', '$sms_apply', '$email_apply', '$reg_date');";
// echo $sql;

/* ---------------- 4. 데이터베이스에 쿼리 전송 ----------------- */
mysqli_query($dbcon, $sql);

/* ---------------- 5. DB 접속 종료 ----------------- */
mysqli_close($dbcon);

/* -------------------------- 6-2. 리디렉션 ---------------------------- */
echo "
<script type=\"text/javascript\">
location.href = \"welcome.php\";
</script>";
?>
