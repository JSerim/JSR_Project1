<?php

/* 1. 데이터 가져오기 */

// 1-1. post 방식 활용, 이전 페이지에 hidden 필드 사용
/* <input type="hidden" name="g_idx" value="<?php echo $array["idx"];?>"> */
// $s_idx = $_POST["g_idx"];

// 1-2. get 방식 활용, 페이지 경로에 데이터 포함
/* location.href="member_delete.php?g_idx=<?php echo $array["idx"];?>"; */
// $s_idx = $_GET["g_idx"];

// 1-3. 세션 활용
include "../inc/session.php";


/* 2. DB 연결 */
include "../inc/dbcon.php";

/* 3. 쿼리 작성 */
$sql = "delete from members where idx=$s_idx;";

/* 4. 쿼리 전송 */
mysqli_query($dbcon, $sql);

/* 5. DB 종료 */
mysqli_close($dbcon);

/* 6. 세션 삭제 */
// 자동으로 로그아웃 시키기위해 작성
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

/* 7. 페이지 이동 */
echo "
    <script type='text/javascript'>
        alert('탈퇴가 완료되었습니다.');
        location.href='../index.php';
    </script>
    ";

?>