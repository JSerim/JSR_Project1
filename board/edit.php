<?php
/* 세션 */
include "../inc/session.php";
$table_name = "board";

/* 이전 페이지에서 데이터 값 가져오기 */
$b_idx = $_GET["b_idx"];
$b_pwd = $_POST["b_pwd"];
$cate = $_POST["cate"];
$b_title = $_POST["b_title"];
$b_content = $_POST["b_content"];
$file_del = isset($_POST["file_del"])? $_POST["file_del"]:"off";

// 작성일자
$w_date = date("Y-m-d");

// DB 연결
include "../inc/dbcon.php";

// 파일업로드
if($_FILES["up_file"]["name"] != NULL){
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $f_name = $_FILES["up_file"]["name"];
    $up = move_uploaded_file($tmp_name, "board_data/$f_name");
    $f_type = $_FILES["up_file"]["type"];
    $f_size = $_FILES["up_file"]["size"];
// 쿼리 작성
    $sql = "update $table_name set b_pwd='$b_pwd', b_title='$b_title', b_content='$b_content', w_date='$w_date', cate='$cate', f_name='$f_name', f_type='$f_type', f_size='$f_size' where idx=$b_idx;";
} else{
    if($file_del =="on"){
    $sql = "select f_name from $table_name where idx=$b_idx;";
    $result = mysqli_query($dbcon, $sql);
    $array = mysqli_fetch_array($result);
    $f_name = $array["f_name"];
    /* echo $f_name;
    exit; */
    $path = "board_data/$f_name";
    if(file_exists($path)){
        unlink($path);
    };
    $sql = "update $table_name set b_pwd='$b_pwd', b_title='$b_title', b_content='$b_content', w_date='$w_date', cate='$cate', f_name='', f_type='', f_size='0' where idx=$b_idx;";
    /* echo $sql;
    exit; */
    } else{
        $sql = "update $table_name set b_pwd='$b_pwd', b_title='$b_title', b_content='$b_content', w_date='$w_date' ,cate='$cate' where idx=$b_idx;";
        /* echo $sql;
        exit; */
    };
};

/* 데이터베이스에 쿼리 전송  */
mysqli_query($dbcon, $sql);

/* DB 접속 종료  */
mysqli_close($dbcon);

/* 리디렉션  */
echo "
<script type=\"text/javascript\">
alert('수정이 완료되었습니다.');
location.href = \"view.php?b_idx=$b_idx\";
</script>";
?>
