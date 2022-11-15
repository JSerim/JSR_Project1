<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>검색 결과</title>
    <style type="text/css">
        body{font-size:20px;}
        .id_txt{font-weight: bold;color:blue;}
    </style>
    <script type="text/javascript">
        function return_id(){
            // document.getElementById() 여기서 document는 원래 페이지가 아닌 이 페이지의 body만 해당됨
            // 이 페이지를 열어준 페이지를 연결해야 함 -> opener
            opener.document.getElementById("uid_id").value="admin";
            /* ★★★ 주의사항 : 원래 JS는 브라우저간 데이터 이동이 불가능 (live-server에서만 보이는 것)
            (내 컴퓨터에서 더블클릭으로 열면 작동 X)
            FTP로 서버에 올려서 실행하면 작동됨 */
            window.close();
        };
    </script>
</head>
<body>
    <p>
        입력하신 <span class="id_txt">"admin"</span>은 사용 가능한 아이디입니다.
    </p>
    <p>
        <br><a href="#" onclick="return_id()">[사용하기]</a>
        <a href="#"onclick="javascript:history.back()">[다시 검색]</a>
        <!--<a href="#"onclick="javascript:history.go(-1)">[다시 검색]</a> go(숫자) 동일한 표현 가능-->
        <!-- <a href="#"onclick="javascript:">[다시 검색]</a>
        스크립트가 지원되는 브라우저인데 실행 안될 때 javascript 추가 작성-->
        <!-- 이전, 다음 페이지 제어 명령어 : history (back, forward) 화살표 길게 누르면 목록떠서 선택 이동 가능
            주소 검색창 제어 : locaton
            화면 제어 : document-->
    </p>
</body>
</html>