<?php
include "../inc/session.php";
// 데이터 가져오기
$n_idx = $_GET["n_idx"];
// DB연결
include "../inc/dbcon.php";
// 쿼리 작성
$sql = "select * from notice where idx=$n_idx;";
// echo $sql;
// 쿼리 전송
$result = mysqli_query($dbcon, $sql);
// 데이터 가져오기
$array = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAZEN 공지사항</title>
    <link rel="stylesheet" type="text/css" href="../../css/notice_view.css">
    <script type="text/javascript">
        function remove_notice(){
            var ck = confirm("정말 삭제하시겠습니까?");
            if(ck){
                location.href="delete.php?n_idx=<?php echo $n_idx; ?>";
            };
        };
    </script>
</head>
<body>

<?php include "../inc/admin_header_sub.php"; ?>
<?php include "../inc/speed_bar.php"; ?>

<!-- 콘텐트 -->
<main id="content" class="content">
    <?php include "../inc/speed_menu.php"; ?>

    <section class="notice_section">

        <div class="title_box">
            <span class="green_box"></span><h2 class="notice_title">공지사항</h2>
            <p class="gray_txt">티젠의 다양한 쇼핑정보와 회사소식을 알려드립니다.</p>
        </div>
            
        <div class="view_content">

            <table class="view_table">
                <tr>
                    <th class="v_title">제목</th>
                    <td class="v_content"><?php echo $array["n_title"]; ?></td>
                </tr>
                <tr>
                    <th class="v_title">작성자</th>
                    <td class="v_content"><?php echo $array["writer"]; ?></td>
                </tr>
                <tr>
                    <th class="v_title">작성일</th>
                    <?php $w_date = substr($array["w_date"], 0, 10);?>
                    <td class="v_content"><?php echo $w_date; ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="v_text">
                        <?php
                        if($array["f_name"] && substr($array["f_type"], 0, 5) == "image"){
                            $f_name = $array["f_name"];
                            echo "
                                <p>
                                    <img src=\"../../data/$f_name\" alt=\"\">
                                </p>
                            ";
                        };
                        ?>
                        <textarea class="textarea"><?php 
                        $n_content = str_replace("\n", "\n", $array["n_content"]);
                        $n_content = str_replace(" ", "&nbsp;", $n_content);
                        echo $n_content;
                        ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th class="v_title">첨부파일</th>
                    <td class="v_content">
                        <a href="../../data/<?php echo $array["f_name"]; ?>" download="<?php echo $array["f_name"]; ?>">
                        <?php echo $array["f_name"]; ?>
                        </a>
                    </td>
                </tr>
            </table>

            <p class="list">
                <a href="list.php" class="back_list">목록</a>
                <?php if($s_id == "admin"){ ?>
                    <a href="modify.php?n_idx=<?php echo $n_idx; ?>" class="admin_func">수정</a>
                    <a href="#" onclick="remove_notice()" class="admin_func">삭제</a>
                <?php }; ?>
            </p>

            <p class="before_list">
                <span class="before_list_txt">∧ 이전글</span>
                <span class="before_list_preview"></span>
            </p>
            <p class="next_list">
                <span class="next_list_txt">∨ 다음글</span>
                <span class="next_list_preview"></span>
            </p>

        </div>

    </section>
</main>

<?php include "../inc/footer.php"; ?>

    
</body>
</html>