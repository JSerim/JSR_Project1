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
    <title>공지사항_내용보기</title>
    <style type="text/css">
        table, td{border-collapse:collapse;}
        td, th{font-size:20px;padding:10px;}
        td, th{border-top:1px solid #999;border-bottom:1px solid #999;padding:5px;}
        .v_title{width:200px;background:#eee}
        .v_content{width:800px}
        table{margin:auto;}
        table a:hover{color:rgb(255,18,0);}
        .list{text-align:center; font-size:20px;}
        .textarea{width:1000px;height:600px;font-size:18px}
    </style>
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
<?php include "../inc/header_sub.php"; ?>
<?php/*  include "../inc/search.php";  */?>
<?php include "../inc/speed_bar.php"; ?>
<?php include "../inc/speed_menu.php"; ?>

    <!-- 콘텐트 -->
    <h2>공지사항</h2>
        
    <table class="view_list_table">
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
        <a href="list.php">[목록]</a>
        <?php if($s_id == "admin"){ ?>
            <a href="modify.php?n_idx=<?php echo $n_idx; ?>">[수정]</a>
            <a href="#" onclick="remove_notice()">[삭제]</a>
        <?php }; ?>
    </p>
    
</body>
</html>