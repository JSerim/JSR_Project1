<?php
include "../inc/session.php";
// 데이터 가져오기
$b_idx = $_GET["b_idx"];
$table_name = "board";
// DB연결
include "../inc/dbcon.php";
// 쿼리 작성
$sql = "select * from $table_name where idx=$b_idx;";
// echo $sql;
// 쿼리 전송
$result = mysqli_query($dbcon, $sql);
// 데이터 가져오기
$array = mysqli_fetch_array($result);
// 조회수 업데이트
$cnt = $array["cnt"]+1;
$sql = "update $table_name set cnt = $cnt where idx = $b_idx;";
mysqli_query($dbcon, $sql);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q&A</title>
    <link rel="stylesheet" type="text/css" href="../css/board_view.css">
    <script type="text/javascript">
        function edit_board(){
            var pwd = document.getElementById("b_pwd");
            if(!pwd.value){
                alert("비밀번호를 입력하세요.");
                pwd.focus();
                return false;
            } else{
                document.board_form.submit();
            };
        };
        function remove_board(){
            var pwd = document.getElementById("b_pwd");
            if(!pwd.value){
                alert("비밀번호를 입력하세요.");
                pwd.focus();
                return false;
            } else{
                var ck = confirm("정말 삭제하시겠습니까?");
                if(ck){
                    location.href="delete.php?b_idx=<?php echo $b_idx; ?>";
                };
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

        <table class="view_table">
            <tr>
                <th class="v_title">작성자</th>
                <td class="v_content"><?php echo $array["b_name"]; ?></td>
            </tr>
            <tr>
                <th class="v_title">비밀번호</th>
                <td class="v_content"><input type="text" name="b_pwd" id="b_pwd" class="b_pwd"></td>
            </tr>
            <tr>
                <th class="v_title">상품분류</th>
                <td class="v_content"><?php echo $array["cate"]; ?></td>
            </tr>
            <tr>
                <th class="v_title">제목</th>
                <td class="v_content"><?php echo $array["b_title"]; ?></td>
            </tr>
            <tr>
                <th class="v_title">작성일</th>
                <?php $w_date = substr($array["w_date"], 0, 10);?>
                <td class="v_content"><?php echo $w_date; ?></td>
            </tr>
            <tr >
                <th class="v_title">조회수</th>
                <td class="v_content"><?php echo $cnt; ?></td>
            </tr>
            <tr>
                <td colspan="2" class="v_text">
                    <?php
                    if($array["f_name"] && substr($array["f_type"], 0, 5) == "image"){
                        $f_name = $array["f_name"];
                        echo "
                            <p>
                                <img src=\"board_data/$f_name\" alt=\"\">
                            </p>
                        ";
                    };
                    ?>
                    <textarea class="textarea"><?php 
                    $b_content = str_replace("\n", "\n", $array["b_content"]);
                    $b_content = str_replace(" ", "&nbsp;", $b_content);
                    echo $b_content;
                    ?></textarea>
                </td>
            </tr>
            <tr>
                <th class="v_title">첨부파일</th>
                <td class="v_content">
                    <a href="board_data/<?php echo $array["f_name"]; ?>" download="<?php echo $array["f_name"]; ?>">
                    <?php echo $array["f_name"]; ?>
                    </a>
                </td>
            </tr>
        </table>

        <p class="list">
            <a href="list.php" class="back_list">목록</a>
            <a href="modify.php?b_idx=<?php echo $b_idx; ?>" onclick="edit_board()" class="admin_func">수정</a>
            <a href="#" onclick="remove_board()"  class="admin_func">삭제</a>
        </p>

    </section>
</main>
    
<?php include "../inc/footer.php"; ?>
    
</body>
</html>