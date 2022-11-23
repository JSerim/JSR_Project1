<?php
include "../inc/session.php";
include "../inc/admin_check.php";
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
    <link rel="stylesheet" type="text/css" href="../../css/board_write.css">
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

<main id="content" class="content">
    <?php include "../inc/speed_menu.php"; ?>

        <section class="board_section">

            <div class="title_box">
                <span class="green_box"></span><h2 class="board_title">상품Q&A</h2>
                <p class="gray_txt">상품에 대한 문의를 남겨주세요.</p>
            </div>
<!-- ============================================================ -->
            <form name="qa_form" action="edit.php?b_idx=<?php echo $b_idx; ?>" method="post" enctype="multipart/form-data" onsubmit="return board_check()">
                <fieldset class="qa">
                    <legend class="hide">Q&A 글쓰기</legend>
                    
                    <table class="write_table">
                        <tr>
                            <th class="v_title">이름</th>
                            <td class="v_content"><?php echo $array["b_name"]; ?></td>
                        </tr>
                        <tr>
                            <th class="v_title"><label for="b_pwd">비밀번호</label></th>
                            <td class="v_content"><input type="text" name="b_pwd" id="b_pwd" class="b_pwd"></td>
                        </tr>
                        <tr>
                            <th class="v_title"><label for="cate">상품분류</label></th>
                            <td class="v_content">
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
                            </td>
                        </tr>
                        <tr>
                            <th class="v_title"><label for="b_title">제목</label></th>
                            <td class="v_content"><input type="text" name="b_title" id="b_title" class="b_title" value="<?php echo $array["b_title"]; ?>"></td>
                        </tr>
                        <tr>
                            <th class="v_title"><label for="b_content">내용</label></th>
                            <td class="v_content">
                                <textarea cols="60" rows="10" name="b_content" id="b_content" class="b_content"><?php echo $array["b_content"]; ?></textarea>
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
                        <button type="button" class="back_list"  onclick="move_back()">목록보기</button>
                    </div>

                </fieldset>
            </form>
        </section>
</main>

<?php include "../inc/footer.php"; ?>

</body>
</html>