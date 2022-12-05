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
    <link rel="stylesheet" type="text/css" href="../css/notice_write.css">

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
        function move_back(){
            var choice = confirm("뒤로 돌아가시겠습니까? \n작성된 내용은 저장되지 않습니다.");
            if(choice == true){
                history.back();
            } else{
                return false;
            };
        };
    </script>
    
</head>
<body>

<?php include "../inc/header_sub.php"; ?>
<?php include "../inc/speed_bar.php"; ?>

<!-- 콘텐트 -->
<main id="content" class="content">
    <?php include "../inc/speed_menu.php"; ?>

    <section class="notice_section">

        <div class="title_box">
            <span class="green_box"></span><h2 class="notice_title">공지사항</h2>
            <p class="gray_txt">티젠의 다양한 쇼핑정보와 회사소식을 알려드립니다.</p>
        </div>
    
        <form class="notice_form" name="notice_form" action="insert.php" method="post" enctype="multipart/form-data" onsubmit="return notice_check()">
            <fieldset class="notice">
                <legend class="hide">공지사항</legend>

                <table class="write_table">
                    <tr>
                        <th class="v_title">작성자</th>
                        <td class="v_content"><?php echo $s_name; ?></td>
                    </tr>
                    <tr>
                        <th class="v_title"><label for="n_title">제목</label></th>
                        <td class="v_content">
                            <input type="text" name="n_title" id="n_title" class="n_title">
                        </td>
                    </tr>
                    <tr>
                        <th class="v_title"><label for="n_content">내용</label></th>
                        <td class="v_content">
                            <textarea cols="60" rows="10" name="n_content" id="n_content" class="n_content"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th class="v_title"><label for="up_file">파일첨부</label></th>
                        <td class="v_content"><input type="file" name="up_file" id="up_file" class="up_file"></td>
                    </tr>
                </table>

                <div class="button_wrap">
                    <button type="submit" class="submit_btn">등록하기</button>
                    <button type="button" id="back" class="back_list" onclick="move_back()">목록보기</button>
                </div>

            </fieldset>
        </form>

    </section>
</main>

<?php include "../inc/footer.php"; ?>

</body>
</html>