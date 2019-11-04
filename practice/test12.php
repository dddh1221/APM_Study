<html>
    <head> <meta charset='utf-8'> </head>
    <body>
        <?php
            include "mysql_connect.php";

            $sql="select * from usertb";
            $result=mysqli_query($mysql, $sql);
            $field=mysqli_num_fields($result);
            $number=1;
        ?>
        <table border="1" cellpadding="10">
            <tr align="center">
                <td bgcolor="#cccc">번호</td>
                <td bgcolor="#cccc">이름</td>
                <td bgcolor="#cccc">비밀번호</td>
            </tr>
            <?php while($row=mysqli_fetch_row($result)){
                echo("<tr> <td>$number</td>");

                for($i=0; $i<$field; $i++){
                    echo(" <td>$row[$i]</td>");
                }
                echo("</tr>");
                $number++;
            }
            ?>
    </body>
</html>