<?php
include "inc/session.php";
if($s_id != "admin"){
    echo "
    <script type='text/javascript>
        alert('관리자 로그인이 필요합니다.');
        location.href = 'http://localhost/JSR_Project1/login/login.php';
        </script>
        ";
};
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAZEN 관리자페이지</title>
    <style type="text/css">
        .admin_nav{
            height:400px;
            width:1200px;
            text-align:center;
            font-size:25px;
            line-height:3;
            margin-top:50px;
        }
    </style>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- CSS -->
    <!-- JS -->
	</script>
</head>
<body>
    
<?php include "inc/header_index.php"; ?>
<?php include "inc/speed_bar.php"; ?>

    <main id="content" class="content">

    <div class="admin_nav">
        <p><a href="members/list.php">[회원관리]</a></p>
        <p><a href="notice/list.php">[공지사항]</a></p>
        <p><a href="event/list.php">[이벤트]</a></p>
        <p><a href="products/list.php">[상품관리]</a></p>
    </div>

    </main>

<?php include "inc/footer.php"; ?>

</body>
</html>