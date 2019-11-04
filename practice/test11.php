<html>
    <head> <meta charset='utf-8'> </head>
    <body>
        <?php
            include "mysql_connect.php";

            $sql="select * from usertb";
            $result=mysqli_query($mysql, $sql);
            $number=1;
        ?>
        <table border="1", cellpadding="10">
            <tr align="center">
                <td bgcolor="#cccc">번호</td>
                <td bgcolor="#cccc">이름</td>
                <td bgcolor="#cccc">비밀번호</td>
            </tr>
            <?php
                while($row=mysqli_fetch_array($result)){
                    echo("<tr>
                        <td>$number</td>
                        <td>$row[name]</td>
                        <td>$row[password]</td>
                    </tr>");
                    $number++;
                }
                mysqli_close($mysql);
            ?>
    </body>
</html>