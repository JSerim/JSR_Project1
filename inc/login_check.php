<?php
if(!$s_idx){
    echo "
    <script type=\"text/javascript\">
        alert(\"로그인 사용자만 접근할 수 있습니다.\");
        location.href=\"http://fla0723.dothome.co.kr/JSR_Project1/login/login.php\";
        </script>
    ";
    exit;
};
?>