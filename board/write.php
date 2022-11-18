<?php
include "../inc/session.php";
include "../inc/login_check.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q&A 글쓰기</title>
    <style type="text/css">
        body{font-size:20px;}
    </style>

    <script>
            function board_check(){
                var b_name = document.getElementById("b_name");
                var b_pwd = document.getElementById("b_pwd");
                var b_title = document.getElementById("b_title");
                var b_content = document.getElementById("b_content");

                if(!b_name.value){
                    alert("이름을 입력하세요.");
                    b_name.focus();
                    return false;
                };

                if(!b_pwd.value){
                    alert("비밀번호를 입력하세요.");
                    b_pwd.focus();
                    return false;
                };

                if(!b_title.value){
                    alert("제목을 입력하세요.");
                    b_title.focus();
                    return false;
                };

                if(!b_content.value){
                    alert("내용을 입력하세요.");
                    b_content.focus();
                    return false;
                };
            };
        </script>
    
</head>
<body>
    
    <form name="qa_form" action="insert.php" method="post" enctype="multipart/form-data" onsubmit="return board_check()">
        <fieldset class="qa">
            <legend class="qa_title">Q&A 글쓰기</legend>

            <p>
                <label for="b_name">이름</label>
                <input type="text" name="b_name" id="b_name">
            </p>
            
            <p>
                <label for="b_pwd">비밀번호</label>
                <input type="text" name="b_pwd" id="b_pwd">
            </p>

            <p>
                <label for="cate">상품분류</label>
                <select name="cate" id="cate" class="cate">
                    <option value="">상품분류 선택</option>
                    <option value="콤부차">콤부차</option>
                    <option value="유기농 새싹보리">유기농 새싹보리</option>
                    <option value="기능성 TEA 스틱형">기능성 TEA 스틱형</option>
                    <option value="종이티백">종이티백</option>
                    <option value="피라미드 티백">피라미드 티백</option>
                    <option value="잎차">잎차</option>
                    <option value="TEA분말/음료믹스">TEA분말/음료믹스</option>
                    <option value="티젠 선물세트">티젠 선물세트</option>
                    <option value="티웨어/소품">티웨어/소품</option>
                    <option value="카페사업자몰">카페사업자몰</option>
                </select>
            </p>

            <p>
                <label for="b_title">제목</label>
                <input type="text" name="b_title" id="b_title">
            </p>

            <p>
                <label for="b_content">내용</label>
                <textarea cols="60" rows="10" name="b_content" id="b_content"></textarea>
            </p>

            <p>
                <label for="b_content">파일첨부</label>
                <input type="file" name="up_file" id="up_file">
            </p>

            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">등록하기</button>
            </p>

        </fieldset>
    </form>

</body>
</html>