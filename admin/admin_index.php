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
        .content{width:1200px;margin:auto;}
        img{width:100%;height:800px;opacity:90%;}
        .welcome_admin_page{width:600px;height:400px;background:#000;opacity:80%;color:#fff;font-size:35px;text-align:center;padding-top:120px;letter-spacing:2px;line-height:2;font-weight:normal;box-sizing:border-box;position:relative;top:-600px;left:300px;}
    </style>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	</script>
</head>
<body>
    
<?php include "inc/admin_header_index.php"; ?>
<?php include "inc/speed_bar.php"; ?>

    <main id="content" class="content">
        <img src="../images/admin_background.jpg" alt="배경이미지">
        <h2 class="welcome_admin_page">관리자 페이지입니다. <br>메뉴를 선택해주세요.</h2>
    </main>

<?php include "inc/footer.php"; ?>

</body>
</html>