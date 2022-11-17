<?php
include "../inc/session.php";
include "../inc/admin_check.php";

// 데이터 가져오기
/* <a href="modify.php?n_idx=<?php echo $n_idx; ?>">[수정]</a> */
$n_idx = $_GET["n_idx"];

// DB 연결
include "../inc/dbcon.php";
// 쿼리 작성
$sql = "select * from notice where idx=$n_idx;";
// 쿼리 전송
$result = mysqli_query($dbcon, $sql);
// DB에서 데이터 불러오기
$array = mysqli_fetch_array($result);
// DB 종료
// array를 반복해서 사용하지 않을 거면 이곳에서 닫아도 되고 아니면 html 가장 하단에서 종료해도 됨
mysqli_close($dbcon);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항 수정하기</title>
    <style type="text/css">
        body{font-size:20px;}
    </style>

    <script type="text/javascript">
        function notice_check(){
        var n_title = document.getElementById("n_title");
        var n_content = document.getElementById("n_content");
        if(!n_title.value){
            alert("제목을 입력하세요.");
            n_title.focus();
            return false;
        };
        if(!n_content.value){
            alert("내용을 입력하세요.");
            n_content.focus();
            return false;
        };
    };
    </script>
    
</head>
<body>
    
    <form name="modify_form" action="edit.php?n_idx=<?php echo $n_idx; ?>" method="post" enctype="multipart/form-data" onsubmit="return notice_check()">
        <fieldset class="notice">
            <legend class="notice_title">공지사항</legend>
            <p>
                작성자 : <?php echo $s_name; ?>
                <!-- 자유게시판이면 $s_name으로 하면 안됨 (로그인안해도 작성할 수 있어야 하기때문) -->
                <!-- input type ="hidden" -->
            </p>
            <hr>
            <p>
                <label for="n_title">제목</label>
                <input type="text" name="n_title" id="n_title" class="n_title" value="<?php echo $array["n_title"]; ?>">
            </p>
            <hr>
            <p>
                <label for="n_content">내용</label>
                <textarea cols="60" rows="10" name="n_content" id="n_content" class="n_content"><?php echo $array["n_content"]; ?></textarea>
            </p>
            <hr>
            <p>
                <?php if($array["f_name"]){ ?>
                    <label for="up_file">첨부파일 [<?php echo $array["f_name"]; ?>]</label>
                    <input type="checkbox" name="file_del"> 파일삭제
                <?php } else{ ?>
                    <label for="up_file">첨부파일</label>
                <?php }; ?>
                <br><input type="file" name="up_file" id="up_file">
            </p>
            <hr>
            <p><button type="button" id="back" class="back" onclick="history.back()">이전 페이지</button></p>
            <p><button type="submit">수정하기</button></p>
        </fieldset>
    </form>

</body>
</html>