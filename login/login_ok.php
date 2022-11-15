<?php
session_start();

/* ------------------- 1. 데이터 가져오기 ------------------- */
$table_name = "members";
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
// echo $u_id."/".$pwd;

/* ------------------------ 2. DB 연결 ------------------------ */
include "../inc/dbcon.php";

/* ----------------------- 3. 쿼리 작성 ----------------------- */
$sql = "select idx, u_name, u_id, pwd from $table_name where u_id = '$u_id';";
// echo $sql;

/* ----------------------- 4. 쿼리 전송 ----------------------- */
$result = mysqli_query($dbcon, $sql);

/* --------------- 5. DB에서 데이터 가져오기 --------------- */
$num = mysqli_num_rows($result);

if(!$num){
    echo "
    <script type=\"text/javascript\">
        alert(\"일치하는 아이디가 없습니다.\");
        // location.href = \"login.php\";
        history.back();
        </script>";
} else{
    $array = mysqli_fetch_array($result);
    $g_pwd = $array["pwd"];
    if($pwd != $g_pwd){
        echo "
        <script type=\"text/javascript\">
            alert(\"비밀번호가 일치하지 않습니다.\");
            // location.href = \"login.php\";
            history.back();
            </script>";
    } else{
            $_SESSION["s_idx"] = $array["idx"];
            $_SESSION["s_name"] = $array["u_name"];
            $_SESSION["s_id"] = $array["u_id"];
            /* echo $_SESSION["s_idx"]."/";
            echo $_SESSION["s_name"]."/";
            echo $_SESSION["s_id"]; */
        };
};

/* ----------------------- 6. DB 종료 ----------------------- */
mysqli_close($dbcon);

/* --------------- 7. 페이지 이동 (리디렉션) --------------- */
echo "
    <script type=\"text/javascript\">
    location.href = \"../index.php\";
    </script>
    ";
?>