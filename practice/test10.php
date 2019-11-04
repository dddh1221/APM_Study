<html>
    <head> <meta charset = 'utf-8'> </head>
    <?php
        include "mysql_connect.php";
        //mysqli_select_db($dbName, $dbName);

        $sql = "insert into userTB values('KKB', 1234)";
        $result=mysqli_query($mysql, $sql);

        if($result){
            echo "레코드 삽입 성공";
        } else {
            echo "레코드 삽입 실패";
        }

        mysqli_close($mysql);
    ?>
</html>