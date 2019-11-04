<?php
    include "mysql_connect.php";

    mysqli_set_charset($mysql, "utf8");
    $sql="select * from humaninfo";
    $result=mysqli_query($mysql, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>

        <style type="text/css">
            td {border:1px solid #333; padding:10px;}
        </style>

        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
        <script src="main.js"></script>
    </head>
    <body>
        <table>
            <tr>
                <td>Age</td>
                <td>Name</td>
                <td>Address</td>
                <td>Update</td>
                <td>DELETE</td>
            </tr>
            <?
                while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?=$row[0]?></td>
                <td> <?=$row[1]?></td>
                <td> <?=$row[2]?></td>
                <td> <a href="update.php?Age=<?=$row[0]?>" onclick="return confirm('수정하시겠습니까?')">수정하기</a></td>
                <td> <a href="delete.php?Age=<?=$row[0]?>" onclick="return confirm('삭제하시겠습니까?')">삭제하기</a></td>
            </tr>
            <?
                }
            ?>
        </table>
        <form action="input2.php" method="POST">
            <input type="text" placeholder="Age" name="Age"/><br>
            <input type="text" placeholder="Name" name="Name"/><br>
            <input type="text" placeholder="Address" name="Address"/><br>
            <input type="submit" value="추가"/>
        </form>
    </body>
</html>