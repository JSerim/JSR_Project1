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
            var choice = confirm("뒤로 돌아가시겠습니까? \n수정된 내용은 저장되지 않습니다.");
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
    
        <form class="modify_form"  name="modify_form" action="edit.php?n_idx=<?php echo $n_idx; ?>" method="post" enctype="multipart/form-data" onsubmit="return notice_check()">
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
                            <input type="text" name="n_title" id="n_title" class="n_title" value="<?php echo $array["n_title"]; ?>">
                        </td>
                    </tr>
                    <tr>
                        <th class="v_title"><label for="n_content">내용</label></th>
                        <td class="v_content">
                            <textarea cols="60" rows="10" name="n_content" id="n_content" class="n_content"><?php echo $array["n_content"]; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th class="v_title"><label for="up_file">첨부파일</label></th>
                        <?php if($array["f_name"]){ ?>
                        <td class="v_content">
                            [<?php echo $array["f_name"]; ?>]
                            <input type="checkbox" name="file_del"> 파일삭제
                        </td>
                        <?php } else {?>
                            <td class="v_content">
                                <input type="file" name="up_file" id="up_file" class="up_file">
                            </td>
                        <?php }; ?>
                    </tr>
                </table>

                <div class="button_wrap">
                    <button type="submit" class="submit_btn">수정하기</button>
                    <button type="button" id="back" class="back_list" onclick="move_back()">목록보기</button>
                </div>

            </fieldset>
        </form>

    </section>
</main>

<?php include "../inc/footer.php"; ?>

</body>
</html>