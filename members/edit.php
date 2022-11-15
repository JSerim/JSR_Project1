<?php
/* 0. 세션 */
include "../inc/session.php";
/* 1. 데이터 가져오기 */
$pwd = $_POST["pwd"];
//입력을 안할 수도 있기에 문제됨
$mobile = $_POST["mobile"];
$birth = $_POST["birth"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$ps_code = $_POST["ps_code"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$gender = $_POST["gender"];

// 값 확인용
/* echo "<p> 비밀번호 : ".$pwd."</p>";
echo "<p> 전화번호 : ".$mobile."</p>";
echo "<p> 이메일 : ".$email_id."</p>";
echo "<p> 생년월일 : ".$birth."</p>";
echo "<p> 우편번호 : ".$ps_code."</p>";
echo "<p> 기본주소 : ".$addr_b."</p>";
echo "<p> 상세주소 : ".$addr_d."</p>";
echo "<p> 성별 : ".$gender."</p>"; */

/* 2. DB 접속 */
include "../inc/dbcon.php";

/* 3. 쿼리 작성*/
// update 테이블명 set 필드명='바뀔 값', 필드명='바뀔 값', 필드명='바뀔 값'...;
// 3-1. 비밀번호 있는 경우
$sql_yPwd = "update members set ";
$sql_yPwd .= "pwd='$pwd', ";
$sql_yPwd .= "mobile='$mobile', ";
$sql_yPwd .= "email='$email', ";
$sql_yPwd .= "birth='$birth',";
$sql_yPwd .= "ps_code='$ps_code', ";
$sql_yPwd .= "addr_b='$addr_b', ";
$sql_yPwd .= "addr_d='$addr_d', g";
$sql_yPwd .= "ender='$gender' ";
$sql_yPwd .= "where idx=$s_idx;";
// 확인용
// echo $sql_yPwd;
// 3-2. 비밀번호 없는 경우
$sql_nPwd = "update members set mobile='$mobile', email='$email', birth='$birth',
ps_code='$ps_code', addr_b='$addr_b', addr_d='$addr_d', gender='$gender' where idx=$s_idx;";
// 확인용
// echo $sql_nPwd;

/* 4. 쿼리 전송 */
// mysqli_query(DB연결객체, 전송할쿼리)
if($pwd){ // 4-1. 비밀번호 입력한 경우
    mysqli_query($dbcon, $sql_yPwd);
} else{ // 4-2. 비밀번호 입력하지 않은 경우
    mysqli_query($dbcon, $sql_nPwd);
};

/* 5. DB 종료 */
mysqli_close($dbcon);

/* 6. 리디렉션 (페이지이동) */
echo "
    <script type=\"text/javascript\">
        alert(\"수정되었습니다.\");
        location.href = \"member_info.php\";
    </script>
    "

?>