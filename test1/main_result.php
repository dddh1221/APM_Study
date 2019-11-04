<?php
    include "mysql_connect.php";

    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $query="SELECT * FROM usertb WHERE id='$id' AND password='$pw'";
    $result=mysqli_query($mysql, $query);

    if($result->num_rows == 0) echo("<script>location.href='./main.html';</script>");
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>로그인 결과</title>
        <style type="text/css">
            td {border:1px solid #333; padding:10px;}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>NUMBER</td>
                <td>ID</td>
                <td>PASSWORD</td>
                <td>NAME</td>
                <td>EMAIL1</td>
                <td>EMAIL2</td>
            </tr>
            <? while($row=mysqli_fetch_array($result)){ ?>
            <tr>
                <td> <?=$row[0]?></td>
                <td> <?=$row[1]?></td>
                <td> <?=$row[2]?></td>
                <td> <?=$row[3]?></td>
                <td> <?=$row[4]?></td>
                <td> <?=$row[5]?></td>
            </tr>
            <? } ?>
        </table>
    </body>
</html>