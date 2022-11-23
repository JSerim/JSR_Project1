<?php
include "../inc/session.php";
include "../inc/admin_check.php";
$table_name = "members";
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
    <title>TEAZEN 회원관리</title>
    <style type="text/css">
        table th, table td{padding:5px;}
        table, td{border-collapse:collapse; font-size:16px;}
        table, th{border-top:2px solid #999;border-bottom:2px solid #999;text-align:center;}
        td{border-top:1px solid #999;border-bottom:1px solid #999;text-align:center;}
        table{margin:auto;}
        table a:hover{color:red;}
        .pager, .total_cnt{font-size:20px;text-align:center;padding-top:20px;margin-bottom:20px;}
        .content{height:1000px;width:1600px;margin:auto;}
    </style>
    <script type="text/javascript">
        function mem_del(g_no){
        var rtn_val = confirm("정말 삭제하시겠습니까?");
        if(rtn_val==true){
            location.href="member_delete.php?g_idx="+g_no;
        };
        };
    </script>
</head>
<body>
<?php include "../inc/header_sub.php"; ?>
<?php include "../inc/speed_bar.php"; ?>
<?php include "../inc/speed_menu.php"; ?>
<main id="content" class="content">

<p class="total_cnt">전체 회원수 : <?php echo $total;?> 명</p>

    <table class="mem_list_table">
        <tr class="mem_list_title">
            <th class="no">번호</th>
            <th class="user_type">회원구분</th>
            <th class="u_name">이름</th>
            <th class="u_id">아이디</th>
            <th class="addr">주소</th>
            <th class="mobile">전화번호</th>
            <th class="email">이메일</th>
            <th class="geder">성별</th>
            <th class="birth">생년월일</th>
            <th class="account_nm">예금주명</th>
            <th class="bank">은행</th>
            <th class="account_nb">계좌번호</th>
            <th class="sms_apply">sms동의</th>
            <th class="email_apply">email동의</th>
            <th class="reg_date">가입일</th>
            <th class="modify">관리</th>
        </tr>
        <?php
            // 9) paging : 해당 페이지의 글 시작 번호 = 공식 : (현재 페이지 번호 -1) * 페이지 당 보여질 목록 수
            $start = ($page -1) * $list_num;
            // 10) paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // (limit 몇번부터, 몇개 / 순서쓰는 것은 0부터 시작되고 개수 쓰는 것은 1부터 시작됨)
            $sql = "select * from members limit $start, $list_num;";
            $result = mysqli_query($dbcon, $sql);
            // 5-1. DB에서 데이터 가져오기 문장을 변수까지 통으로 안에 넣기
            $i = $start + 1;
            while($array = mysqli_fetch_array($result)){
        ?>
            <tr class="mem_list_content">
            <td><?php echo $i;?></td>
            <td><?php echo $array["user_type"];?></td>
            <td><?php echo $array["u_name"];?></td>
            <td><?php echo $array["u_id"];?></td>
                <?php $address = $array["ps_code"]." <br> ".$array["addr_b"]." <br> ".$array["addr_d"]; ?>
            <td><?php echo $address;?></td>
                <?php
                    $mobile = strval($array["mobile"]);
                    $mobile1 = substr($mobile, 0, 3);
                    $mobile2 = substr($mobile, 3, -4);
                    $mobile3 = substr($mobile, -4);
                    $mobile = $mobile1."-".$mobile2."-".$mobile3;
                ?>
            <td><?php echo $mobile?></td>
            <td><?php echo $array["email"];?></td>
            <td><?php echo $array["gender"];?></td>
                <?php $birth = $array["birth"]." <br> (".$array["calender"].")"; ?>
            <td><?php echo $birth;?></td>
            <td><?php echo $array["account_nm"];?></td>
            <td><?php echo $array["bank"];?></td>
            <td><?php echo $array["account_nb"];?></td>
            <td><?php echo $array["sms_apply"];?></td>
            <td><?php echo $array["email_apply"];?></td>
            <?php
                    $reg_date = strval($array["reg_date"]);
                    $reg_date1 = substr($reg_date, 0, 10);
                    $reg_date2 = substr($reg_date, 10, 18);
                    $reg_date = $reg_date1."<br>".$reg_date2;
                ?>
            <td><?php echo $reg_date;?></td>
            <td>
                <a href="member_info.php?g_idx=<?php echo $array["idx"];?>">[수정]</a><br>
                <a href="#" onclick="mem_del(<?php echo $array['idx'];?>)">[삭제]</a>
            </td>
        </tr>
        <?php
        $i ++;
        };
        ?>
    </table>

    <p class="pager">
        <?php
        // pager : 이전 페이지
        if($page <=1){ ?>
            <a href="list.php?page=1">[이전]</a>
        <?php } else { ?>
            <a href="list.php?page=<?php echo ($page -1); ?>">[이전]</a>
        <?php }; ?>

        <?php
        // pager : 페이지 번호 출력
        // for($print_page = 시작값; 최종값; 증감량)
        for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
        ?>
        <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
        <?php }; ?>

        <?php
        // pager : 다음 페이지
        if($page >= $total_page){ ?>
            <a href="list.php?page=<?php echo $total_page; ?>">[다음]</a>
        <?php } else { ?>
            <a href="list.php?page=<?php echo ($page +1); ?>">[다음]</a>
        <?php }; ?>
    </p>

</main>
<?php include "../inc/footer.php"; ?>

</body>
</html>