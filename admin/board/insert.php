<?php
$table_name = "board";

$b_name = $_POST["b_name"];
$b_pwd = $_POST["b_pwd"];
$cate = $_POST["cate"];
$b_title = $_POST["b_title"];
$b_content = $_POST["b_content"];
$w_date = date("Y-m-d");

// 파일 업로드 ★ 추가 (파일첨부)
if($_FILES["up_file"] != NULL){
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $f_name = $_FILES["up_file"]["name"];
    $up = move_uploaded_file($tmp_name, "board_data/$f_name");
};
$f_type = $_FILES["up_file"]["type"];
$f_size = $_FILES["up_file"]["size"];

/* echo $_FILES["up_file"]["tmp_name"];
echo $_FILES["up_file"]["name"];
echo $_FILES["up_file"]["type"];
echo $_FILES["up_file"]["size"];

echo "<p> 이름 : ".$b_name."<p>";
echo "<p> 비밀번호 : ".$b_pwd."<p>";
echo "<p> 카테고리 : ".$cate."<p>";
echo "<p> 제목 : ".$b_title."<p>";
echo "<p> 내용 : ".$b_content."<p>";
echo "<p> 작성일 : ".$w_date."<p>"; */

/* DB 연결 */
include "../inc/dbcon.php";

/* 데이터 저장 : 쿼리 작성  */
$sql = "insert into $table_name(b_name, b_pwd, b_title, b_content, w_date, cate, f_name, f_type, f_size) values ('$b_name', '$b_pwd', '$b_title', '$b_content', '$w_date', '$cate', '$f_name', '$f_type', '$f_size');";
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
