<?php
include "../inc/session.php";
include "../inc/admin_check.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항 글쓰기</title>
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
    
    <!-- 파일 첨부 기능 삽입시 enctype="multipart/form-data" 필수 -->
    <form name="notice_form" action="insert.php" method="post" enctype="multipart/form-data" onsubmit="return notice_check()">
        <fieldset class="notice">
            <legend class="notice_title">공지사항</legend>
            <p>
                작성자 : <?php echo $s_name; ?>
            </p>
            <hr>
            <p>
                <label for="n_title">제목</label>
                <input type="text" name="n_title" id="n_title" class="n_title">
            </p>
            <hr>
            <p>
                <label for="n_content">내용</label>
                <textarea cols="60" rows="10" name="n_content" id="n_content" class="n_content"></textarea>
            </p>
            <hr>
            <p>
                <label for="up_file">파일첨부</label>
                <input type="file" name="up_file" id="up_file">
            </p>
            <hr>
            <p><button type="button" id="back" class="back" onclick="history.back()">이전 페이지</button></p>
            <p><button type="submit">등록하기</button></p>
        </fieldset>
    </form>

</body>
</html>