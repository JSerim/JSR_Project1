<?php

// 데이터 가져오기
$n_idx = $_GET["n_idx"];

/* DB 연결 */
include "../inc/dbcon.php";

/* 쿼리 작성 */
$sql = "delete from notice where idx=$n_idx;";

/* 쿼리 전송 */
mysqli_query($dbcon, $sql);

/* DB 종료 */
mysqli_close($dbcon);

/* 페이지 이동 */
echo "
    <script type='text/javascript'>
        alert('삭제가 완료되었습니다.');
        location.href='list.php';
    </script>
    ";

?>