<?php
    include "mysql_connect.php";
    $Age=$_GET['Age'];

    $sql="select * from humaninfo where Age=$Age";
    $result=mysqli_query($mysql, $sql);
    $row=mysqli_fetch_array($result);
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
                <td>Name</td>
                <td>Address</td>
            </tr>
            <tr>
                <form action="update2.php" method="POST">
                    <input type="hidden" value="<?=$Age?>" name="Age">
                    <td><input type="text" name="Name" value="<?= $row[1]?>"/><br></td>
                    <td><input type="text" name="Address" value="<?= $row[2]?>"/><br></td>
                    <td><input type="submit" value="수정완료"/></td>
                </form>
            </tr>
    </body>
</html>