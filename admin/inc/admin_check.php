<?php
if(!$s_idx || $s_id!= "admin"){
    echo "
    <script type=\"text/javascript\">
        alert(\"관리자 로그인이 필요합니다.\");
        location.href=\"http://fla0723.dothome.co.kr/JSR_Project1/login/login.php\";
        </script>
    ";
    exit;
};
?>