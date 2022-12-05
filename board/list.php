<?php
include "../inc/session.php";
include "../inc/login_check.php";

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
    <link rel="stylesheet" type="text/css" href="../css/board_list.css">
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
        function remove_notice(g_no){
            var ck = confirm("정말 삭제하시겠습니까?");
            if(ck){
                location.href="delete.php?n_idx="+g_no;
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

            <div class="qa_content">

                <form name="qa_form" method="get" action="">
                    <fieldset class="qa_form_wrap">
                        <legend class="hide">상품찾기</legend>

                        <div class="cate_wrap">
                            <p class="cate_txt"><span>* </span><label for="item_cf_id">상품분류</label></p>
                            <select class="cate_sel" name="item_cf_nm" id="item_cf_id" onchange="sel_cate()">
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
                        <div class="search_wrap">
                            <span class="search_txt">* 검색어</span>
                            <select name="date_term_sel" id="date_term_sel" class="date_term_sel">
                                <option value="일주일">일주일</option>
                                <option value="한달">한달</option>
                                <option value="세달">세달</option>
                                <option value="전체">전체</option>
                            </select>
                            <select name="keyword_sel" id="keyword_sel" class="keyword_sel">
                                <option value="제목">제목</option>
                                <option value="내용">내용</option>
                                <option value="글쓴이">글쓴이</option>
                                <option value="아이디">아이디</option>
                                <option value="상품정보">상품정보</option>
                            </select>
                            <input type="text" name="writing_box" id="writing_box" class="writing_box">
                            <button type="submit" class="submit_bt">찾기</button>
                        </div>
                </form>

                    <div class="write_area">
                        <p class="total_list">[ 전체글 : <?php echo $total;?> 개 ]</p>
                        <span class="writing_bt"><a href="write.php">글쓰기</a></span>
                    </div>

                <table class="board_table">
                    <caption class="hide">상품Q&A</caption>
                    <tr class="board_list_title">
                        <th class="no">번호</th>
                        <th class="n_title">제목</th>
                        <th class="cate">상품분류</th>
                        <th class="writer">작성자</th>
                        <th class="w_date">작성일</th>
                        <th class="cnt">조회수</th>
                        <?php if($s_id == "admin"){ ?>
                            <th class="admin_func">관리</th>
                        <?php }; ?>
                    </tr>
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
                    <tr class="board_list_content">
                        <td><?php echo $i; ?></td>
                        <td class="board_content_title">
                            <a href="view.php?b_idx=<?php echo $array["idx"]; ?>">
                            <?php echo $array["b_title"]; ?></a>
                        </td>
                        <td><?php echo $array["cate"]; ?></td>
                        <td><?php echo $array["b_name"]; ?></td>
                        <?php
                            $w_date = strval($array["w_date"]);
                            $w_date1 = substr($w_date, 0, 10);
                            $w_date2 = substr($w_date, 10, 18);
                            $w_date = $w_date1."<br>".$w_date2;
                        ?>
                        <td class="w_date_td"><?php echo $w_date; ?></td>
                        <td class="cnt_td"><?php echo $array["cnt"]; ?></td>
                        <?php if($s_id == "admin"){ ?>
                            <td class="admin_func_td">
                                <a href="modify.php?b_idx=<?php echo $array["idx"]; ?>">[수정]</a>
                                <a href="#" onclick="remove_notice(<?php echo $array['idx']; ?>)">[삭제]</a>
                            </td>
                        <?php }; ?>
                    </tr>
                    <?php
                            $i--;
                        }; 
                    ?>
                </table>

                <p class="pager">
                    <?php
                    // pager : 이전 페이지
                    if($page <=1){ ?>
                        <a href="list.php?page=1" class="before">〈〈<span class="hide">이전</span></a>
                    <?php } else { ?>
                        <a href="list.php?page=<?php echo ($page -1); ?>" class="before">〈〈<span class="hide">이전</span></a>
                    <?php }; ?>

                    <?php
                    // pager : 페이지 번호 출력
                    // for($print_page = 시작값; 최종값; 증감량)
                    for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
                    ?>
                    <a href="list.php?page=<?php echo $print_page; ?>" class="page"><?php echo $print_page; ?></a>
                    <?php }; ?>

                    <?php
                    // pager : 다음 페이지
                    if($page >= $total_page){ ?>
                        <a href="list.php?page=<?php echo $total_page; ?>" class="next">〉〉<span class="hide">다음</span></a>
                    <?php } else { ?>
                        <a href="list.php?page=<?php echo ($page +1); ?>" class="next">〉〉<span class="hide">다음</span></a>
                    <?php }; ?>
                </p>

            </div>

        </section>
    </main>

<?php include "../inc/footer.php"; ?>

</body>
</html>