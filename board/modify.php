<?php
include "../inc/session.php";
include "../inc/login_check.php";
// 데이터 가져오기
$table_name= "board";
$b_idx = $_GET["b_idx"];
// DB 연결
include "../inc/dbcon.php";
// 쿼리 작성
$sql = "select * from $table_name where idx=$b_idx;";
// 쿼리 전송
$result = mysqli_query($dbcon, $sql);
// DB에서 데이터 불러오기
$array = mysqli_fetch_array($result);
// DB 종료
mysqli_close($dbcon);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q&A 수정하기</title>
    <style type="text/css">
        body{font-size:20px;}
    </style>

    <script>
            function board_check(){
                var b_pwd = document.getElementById("b_pwd");
                var b_title = document.getElementById("b_title");
                var b_content = document.getElementById("b_content");

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
    
    <form name="qa_form" action="edit.php?b_idx=<?php echo $b_idx; ?>" method="post" enctype="multipart/form-data" onsubmit="return board_check()">
        <fieldset class="qa">
            <legend class="qa_title">Q&A 글쓰기</legend>

            <p>
                이름 : <?php echo $array["b_name"]; ?>
            </p>
            
            <p>
                <label for="b_pwd">비밀번호</label>
                <input type="text" name="b_pwd" id="b_pwd">
            </p>

            <p>
                <label for="cate">상품분류</label>
                <select name="cate" id="cate" class="cate">
                    <option value="" <?php if($array["cate"]== "") echo" selected"; ?>>상품분류 선택</option>
                    <option value="콤부차" <?php if($array["cate"]== "콤부차") echo" selected"; ?>>콤부차</option>
                    <option value="유기농 새싹보리" <?php if($array["cate"]== "유기농 새싹보리") echo" selected"; ?>>유기농 새싹보리</option>
                    <option value="기능성 TEA 스틱형" <?php if($array["cate"]== "기능성 TEA 스틱형") echo" selected"; ?>>기능성 TEA 스틱형</option>
                    <option value="종이티백" <?php if($array["cate"]== "종이티백") echo" selected"; ?>>종이티백</option>
                    <option value="피라미드 티백" <?php if($array["cate"]== "피라미드 티백") echo" selected"; ?>>피라미드 티백</option>
                    <option value="잎차" <?php if($array["cate"]== "잎차") echo" selected"; ?>>잎차</option>
                    <option value="TEA분말/음료믹스" <?php if($array["cate"]== "TEA분말/음료믹스") echo" selected"; ?>>TEA분말/음료믹스</option>
                    <option value="티젠 선물세트" <?php if($array["cate"]== "티젠 선물세트") echo" selected"; ?>>티젠 선물세트</option>
                    <option value="티웨어/소품" <?php if($array["cate"]== "티웨어/소품") echo" selected"; ?>>티웨어/소품</option>
                    <option value="카페사업자몰" <?php if($array["cate"]== "카페사업자몰") echo" selected"; ?>>카페사업자몰</option>
                </select>
            </p>

            <p>
                <label for="b_title">제목</label>
                <input type="text" name="b_title" id="b_title" value="<?php echo $array["b_title"]; ?>">
            </p>

            <p>
                <label for="b_content">내용</label>
                <textarea cols="60" rows="10" name="b_content" id="b_content"><?php echo $array["b_content"]; ?></textarea>
            </p>

            <p>
                <?php if($array["f_name"]){ ?>
                    <label for="up_file">첨부파일 [<?php echo $array["f_name"]; ?>]</label>
                    <input type="checkbox" name="file_del"> 파일삭제
                <?php } else{ ?>
                    <label for="up_file">첨부파일</label>
                <?php }; ?>
                <br><input type="file" name="up_file" id="up_file">
            </p>

            <p>
                <button type="button" onclick="history.back()">이전 페이지</button>
                <button type="submit">수정하기</button>
            </p>
        </fieldset>
    </form>

</body>
</html>