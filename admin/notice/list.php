<?php
include "../inc/session.php";
include "../inc/admin_check.php";
$table_name = "notice";
// DB 연결
include "../inc/dbcon.php";
// 쿼리 작성 - 전체데이터 가져오기
$sql = "select * from $table_name;";
// 쿼리 전송
$result = mysqli_query($dbcon, $sql);
// 전체 데이터 가져오기 => 전체회원수, 페이저 구현에 필요
$total = mysqli_num_rows($result);

// 1) paging : 한 페이지 당 보여질 목록수
$list_num = 10;
// 2) paging : 한 블럭 당 페이지 수
$page_num = 5;
// 3) paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;
// 4) paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 보여질 목록수
// ceil() : 올림값, floor() : 내림값, round() : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : "$total_page;
// exit;
// 5) paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수 + ceil()
$total_bolck = ceil($total_page / $page_num);

// 6) paging : 현재 블럭 번호 (1페이지부터 보여줄 것인지 11페이지부터 보여줄 것인지를 정할 수 있음)
$now_block = ceil($page / $page_num);

// 7) paging : 블럭 당 시작 페이지 번호 = 공식 : (해당 글의 블럭 번호 -1) * 블럭 당 페이지 수 +1
$s_pageNum = ($now_block - 1) * $page_num + 1;
// 7-2) 작성된 글이 없어도 페이지 1번은 있어야 함 + 블럭도 1 (안쓰면 글이 없을때 시작번호가 -9가 됨)
if($s_pageNum <= 0){
    $s_pageNum = 1;
};
// 8) paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 8-2) 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록하기
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
    <title>TEAZEN 공지사항</title>
    <link rel="stylesheet" type="text/css" href="../../css/notice_list.css">
    <script>
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
<?php/*  include "../inc/search.php";  */?>
<?php include "../inc/speed_bar.php"; ?>

<!-- 콘텐트 -->
<main id="content" class="content">
    <?php include "../inc/speed_menu.php"; ?>

    <section class="notice_section">
        
        <div class="title_box">
            <span class="green_box"></span><h2 class="notice_title">공지사항</h2>
            <p class="gray_txt">티젠의 다양한 쇼핑정보와 회사소식을 알려드립니다.</p>
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

        <div class="write_area">
            <?php if($s_id == "admin"){ ?>
            <p >
                <p class="total_list">[ 전체글 : <?php echo $total;?> 개 ]</p>
                <span class="writing_bt"><a href="write.php">관리자 글쓰기</a></span>
            </p>
            <?php } else{ ?>
                <p class="total_list">[ 전체글 : <?php echo $total;?> 개 ]</p>
            <?php }; ?>
        </div>

        <table class="notice_table">
            <tr class="notice_list_title">
                <th class="no">번호</th>
                <th class="n_title">제목</th>
                <th class="writer">작성자</th>
                <th class="w_date">작성일</th>
                <th class="admin_func">관리</th>
            </tr>
            <?php
                // 9) paging : 해당 페이지의 글 시작 번호 = 공식 : (현재 페이지 번호 -1) * 페이지 당 보여질 목록 수
                $start = ($page -1) * $list_num;
                // 10) paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
                // (limit 몇번부터, 몇개 / 순서쓰는 것은 0부터 시작되고 개수 쓰는 것은 1부터 시작됨)
                $sql = "select * from $table_name order by idx desc limit $start, $list_num;";
                $result = mysqli_query($dbcon, $sql);
                // DB에서 데이터 가져오기
                // pager : 글번호 (연순으로 만들기)
                // * 역순 페이지 번호 출력 공식 : 전체 데이터 - ((현재페이지번호-1) * 페이지당 목록수) = 시작번호
                $i = $total -(($page -1) * $list_num);
                while($array = mysqli_fetch_array($result)){
            ?>
            <tr class="notice_list_content">
                <td><?php echo $i;?></td>
                <td class="notice_content_title">
                    <a href="view.php?n_idx=<?php echo $array["idx"]; ?>">
                        <?php echo $array["n_title"];?>
                    </a>
                </td>
                <td><?php echo $array["writer"];?></td>
                <?php $w_date = substr($array["w_date"], 0, 10);?>
                <td class="w_date_td"><?php echo $w_date;?></td>
                <td class="admin_func_td">
                    <a href="modify.php?n_idx=<?php echo $array["idx"]; ?>">[수정]</a>
                    <a href="#" onclick="remove_notice(<?php echo $array['idx']; ?>)">[삭제]</a>
                </td>
            </tr>
            <?php
            $i --;
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
    </section>

</main>

<?php include "../inc/footer.php"; ?>

</body>
</html>