<?php
if(!$s_idx){
    echo "
    <script type=\"text/javascript\">
        alert(\"로그인 사용자만 접근할 수 있습니다.\");
        location.href=\"http://localhost/JSR_Project1/login/login.php\";
        </script>
    ";
    exit;
};
?>