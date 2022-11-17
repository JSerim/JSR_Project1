<?php
include "../inc/session.php";

$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];

// 파일 업로드 ★ 추가 (파일첨부)
if($_FILES["up_file"] != NULL){ // 파일을 첨부했을 때
    $tmp_name = $_FILES["up_file"]["tmp_name"]; // 임시 파일
    $f_name = $_FILES["up_file"]["name"];
    // $up = move_uploaded_file(임시파일이름, "저장할위치/저장할 이름");
    $up = move_uploaded_file($tmp_name, "../../data/$f_name");
};
/* echo $_FILES["up_file"]["tmp_name"];
echo $_FILES["up_file"]["name"];
echo $_FILES["up_file"]["type"];
echo $_FILES["up_file"]["size"];
exit; */
$f_type = $_FILES["up_file"]["type"];
$f_size = $_FILES["up_file"]["size"];

// 작성일자
$w_date = date("Y-m-d");

// 값 확인
/* echo "<p> 제목 : ".$n_title."<p>";
echo "<p> 내용 : ".$n_content."<p>";
echo "<p> 작성자 : ".$s_name."<p>";
echo "<p> 작성일 : ".$w_date."<p>"; */

/* DB 연결 */
include "../inc/dbcon.php";

/* 데이터 저장 : 쿼리 작성  */
$sql = "insert into notice(n_title, n_content, writer, w_date, f_name, f_type, f_size) values ('$n_title', '$n_content', '$s_name', '$w_date', '$f_name', '$f_type', '$f_size');";
/* echo $sql;
exit; */
/* 데이터베이스에 쿼리 전송  */
mysqli_query($dbcon, $sql);

/* DB 접속 종료  */
mysqli_close($dbcon);

/* 리디렉션  */
echo "
<script type=\"text/javascript\">
location.href = \"list.php\";
</script>";

?>
