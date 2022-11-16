<?php

/* 1. 데이터 가져오기 - 세션 */
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