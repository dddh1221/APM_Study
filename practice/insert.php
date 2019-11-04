<html>
    <?php
        include "mysql_connect.php";
        if($_POST[name] != null){
            $sql = "UPDATE person SET Name='$_POST[name]' WHERE id=2";
            $result = mysqli_query($mysql, $sql);
        }

    ?>
    <header>
        <meta charset='utf-8'>
    </header>
    <body>
        Data UpDate
        <form action="/insert.php" method="POST">
            Name : <input type="text" name="name">
            <input type="submit" value="쿼리 전송">
        </form>
    </body>
</html>