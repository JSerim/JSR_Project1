<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 카테고리 ★
$cate = isset($_GET["cate"])? $_GET["cate"] : "";

// 테이블 이름
$table_name = "board";

// 쿼리 작성 ★ (카테고리가 없으면 전체 글수 있으면 해당 카테고리의 글수 구하기)
if($cate){
    $sql = "select * from $table_name where cate='$cate';";
} else {
    $sql = "select * from $table_name;";
}
/* echo $sql;
exit; */

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기 ★ (카테고리가 없으면 전체 글수 있으면 해당 카테고리의 글수 구하기)
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 5;

// paging : 한 블럭 당 페이지 수
$page_num = 3;

// paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEAZEN Q&A</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/qa.css">
    <!-- JS -->
    <script type="text/javascript">
        function sel_cate(){
            var cate = document.getElementById("cate");
            var idx = cate.options.selectedIndex;
            // console.log(idx); 혹은
            var sel_cate_val = cate.options[idx].value;
            if(idx == 0){
                location.href = "list.php";
            } else {location.href = "list.php?cate="+sel_cate_val;
            };
        };
    </script>
</head>
<body>
<?php include "../inc/header_sub.php"; ?>
<?php/*  include "../inc/search.php";  */?>
<?php include "../inc/speed_bar.php"; ?>
<?php include "../inc/speed_menu.php"; ?>

    <main id="content" class="content">

        <section class="qa_section">
            <div class="row_line">
                <h2 class="qa_title">상품Q&A</h2>
                <p class="qa_title_txt">상품에 대한 문의를 남겨주세요.</p>
            </div>

            <form name="qa_form" method="get" action="">
                <fieldset class="qa_form_wrap">
                    <legend class="hide">상품찾기</legend>

                    <div class="item_cf_wrap">
                        <p class="item_cf_txt"><span>* </span><label for="item_cf_id">상품분류</label></p>
                        <select class="item_cf_cls" name="item_cf_nm" id="item_cf_id" onchange="sel_cate()">
                            <option value=""<?php if($cate == "") echo" selected"; ?>>상품을 선택하세요.</option>
                            <option value=""<?php if($cate == "콤부차") echo" selected"; ?>>콤부차</option>
                            <option value=""<?php if($cate == "유기농 새싹보리") echo" selected"; ?>>유기농 새싹보리</option>
                            <option value=""<?php if($cate == "기능성 TEA 스틱형") echo" selected"; ?>>기능성 TEA 스틱형</option>
                            <option value=""<?php if($cate == "종이티백") echo" selected"; ?>>종이티백</option>
                            <option value=""<?php if($cate == "피라미드 티백") echo" selected"; ?>>피라미드 티백</option>
                            <option value=""<?php if($cate == "잎차") echo" selected"; ?>>잎차</option>
                            <option value=""<?php if($cate == "TEA분말/음료믹스") echo" selected"; ?>>TEA분말/음료믹스</option>
                            <option value=""<?php if($cate == "티젠 선물세트") echo" selected"; ?>>티젠 선물세트</option>
                            <option value=""<?php if($cate == "티웨어/소품") echo" selected"; ?>>티웨어/소품</option>
                            <option value=""<?php if($cate == "카페사업자몰") echo" selected"; ?>>카페사업자몰</option>
                        </select>
                    </div>
                    <div class="sc_word_wrap">
                        <p class="sc_word_txt"><span>* </span><label for="sc_word1_id">검색어</label></p>
                        <select class="sc_word1_cls" name="sc_word1_nm" id="sc_word1_id">
                            <option value="sc_word1_1">일주일</option>
                            <option value="sc_word1_2">한달</option>
                            <option value="sc_word1_3">세달</option>
                            <option value="sc_word1_4">전체</option>
                        </select>
                        <select class="sc_word2_cls" name="sc_word2_nm" id="sc_word2_id">
                            <option value="sc_word2_1">제목</option>
                            <option value="sc_word2_2">내용</option>
                            <option value="sc_word2_3">글쓴이</option>
                            <option value="sc_word2_4">아이디</option>
                            <option value="sc_word2_5">상품정보</option>
                        </select>
                        <input type="text" class="sc_word_cls" name="sc_word_nm" id="sc_word_id">
                        <button type="button" class="find_bt_cls" name="find_bt_nm" id="find_bt_id">찾기</button>
                    </div>
                    <a href="write.php" class="writing_bt">글쓰기</a>
            </form>
            <p class="write_area">
                <span>전체 <?php echo $total; ?>개</span>
            </p>
            <table class="qa_table_cls" cellpadding="0" cellspacing="0" >
                <caption class="hide">상품Q&A</caption>
                <thead class="thead_cls">
                    <th class="th1">번호</th>
                    <th class="th2">상품분류</th>
                    <th class="th3">제목</th>
                    <th class="th4">작성자</th>
                    <th class="th5">작성일</th>
                    <th class="th6">조회수</th>
                </thead>
                <tbody class="tbody_cls">
                <?php
                    // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
                    $start = ($page - 1) * $list_num;

                    // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
                    // limit 몇번부터, 몇 개 + 카테고리 ★
                    // 쿼리 작성
                    /* 카테고리 값이 있을 때랑 없을 때랑 다른 쿼리값을 보내기 */
                    if($cate){
                        $sql = "select * from $table_name where cate='$cate' order by idx desc limit $start, $list_num;";
                    } else {
                        $sql = "select * from $table_name order by idx desc limit $start, $list_num;";
                    };
            
                    // DB에 데이터 전송
                    $result = mysqli_query($dbcon, $sql);

                    // DB에서 데이터 가져오기
                    // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
                    $i = $total - (($page - 1) * $list_num);
                    while($array = mysqli_fetch_array($result)){
                ?>
                    <tr class="tr1">
                        <td class="td1"><?php echo $i; ?></td>
                        <td class="td2"><?php echo $array["cate"]; ?></td>
                        <td class="td3">
                            <a href="view.php?b_idx=<?php echo $array["idx"]; ?>">
                            <?php echo $array["b_title"]; ?></a>
                        </td>
                        <td class="td4"><?php echo $array["b_name"]; ?></td>
                        <?php
                            $w_date = strval($array["w_date"]);
                            $w_date1 = substr($w_date, 0, 10);
                            $w_date2 = substr($w_date, 10, 18);
                            $w_date = $w_date1."<br>".$w_date2;
                        ?>
                        <td class="td5"><?php echo $w_date; ?></td>
                        <td class="td6"><?php echo $array["cnt"]; ?></td>
                    </tr>
                    <?php
                            $i--;
                        }; 
                    ?>
                </tbody>
            </table>

            <div class="pager">
                <?php
                /* ★ 카테고리 별로 페이징 되게 만들기 */
                // pager : 이전 페이지
                if($page <= 1){
                ?>
                <a href="list.php?cate=<?php echo $cate; ?>&page=1" class="before">이전</a>
                <?php } else{ ?>
                <a href="list.php?cate=<?php echo $cate; ?>&page=<?php echo ($page - 1); ?>" class="before">이전</a>
                <?php }; ?>

                <?php
                // pager : 페이지 번호 출력
                for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
                ?>
                <a href="list.php?cate=<?php echo $cate; ?>&page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
                <?php }; ?>

                <?php
                // pager : 다음 페이지
                if($page >= $total_page){
                ?>
                <a href="list.php?cate=<?php echo $cate; ?>&page=<?php echo $total_page; ?>" class="next">다음</a>
                <?php } else{ ?>
                <a href="list.php?cate=<?php echo $cate; ?>&page=<?php echo ($page + 1); ?>" class="next">다음</a>
                <?php }; ?>
            </div>
        </section>

    </main>

<?php include "../inc/footer.php"; ?>


</body>
</html>