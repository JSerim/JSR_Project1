<?php
/* 1. 데이터 가져오기 */
$u_id = $_POST["user_id"];

/* 2. DB 연결 */
include "../inc/dbcon.php";

/* 3. 쿼리 작성 */
$sql = "select u_id from members where u_id='$u_id';";
// echo $sql;
/* 4. 쿼리 전송 */
$result = mysqli_query($dbcon, $sql);

/* (5). DB에서 결과 가져오기*/
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>검색 결과</title>
    <style type="text/css">
        body{font-size:20px}
        .id_txt{font-weight:bold;color:rgb(40, 92, 188)}
        .able{font-weight:bold;color:blue;}
        .unable{font-weight:bold;color:red;}
    </style>
    <script type="text/javascript">
        /* 8번 */
        function return_id(){
            opener.document.getElementById("u_id").value = "<?php echo $u_id; ?>";
            window.close();
        };
    </script>
</head>
<body>
    <!-- 6번 -->
<?php if(!$num){?>
    <p>
        입력하신 <span class="id_txt">"<?php echo $u_id; ?>"</span>은 사용할 수 <span class="able">있는</span> 아이디입니다.
    </p>
    <p>
        <a href="#" onclick="javascript:history.back();">[다시 검색]</a>
        <a href="#" onclick="return_id()">[사용하기]</a>
    </p>
<?php } else { ?>
    <p>
        입력하신 <span class="id_txt">"<?php echo $u_id; ?>"</span>은 사용할 수 <span class="unable">없는</span> 아이디입니다.
    </p>
    <p>
        <a href="#" onclick="javascript:history.back();">[다시 검색]</a>
        <a href="#" onclick="window.close();">[닫기]</a>
<?php 
    };
    /* 7번 */
    mysqli_close($dbcon);
?>
    </p>

</body>
</html>