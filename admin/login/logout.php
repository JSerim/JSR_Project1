<?php

/* ----------------------- 세션 시작 ----------------------- */
session_start();

/* ----------------------- 세션 삭제 ----------------------- */
// unset(세션변수); => 로그인할때 만들었던 세션
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);

// 바로 다른 페이지로 이동해야 함
echo "
    <script type=\"text/javascript\">
    location.href = \"../../index.php\";
    </script>
    ";
?>