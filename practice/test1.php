<html>
    <head> <meta charset='utf-8'/> </head>
    <body>
        <h3> ▶ 게시판 목록 보기 </h3>
        <table border='1' width='600'>
        <tr bgcolor='##ccccc' aling='center'>
        <th>번호</th><th>제목</th><th>글쓴이</th><th>날짜</th></tr>
        <?
            $num=1;
            $name = array('김경빈', '김다훈', '김민정', '김상철', '김형균');
            $date = '2019/3/29';
            for($i=0;$i<=5;$i++){
                $title="게시판제목".$num;
                echo("<tr>
                <td width='50' align='center'>$num</td>
                <td>$title</td>
                <td width='50'> $name[$i]</td>
                <td width='80'> $date</td>
                </tr>");
                $num++;
            }
        ?>
    </body>
</html>