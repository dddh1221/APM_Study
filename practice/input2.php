<?php
    include "mysql_connect.php";
    extract($_POST);
    mysqli_set_charset($mysql, "utf8");

    $sql="insert into humaninfo values(" . $_POST['Age'] . ", '" . $_POST['Name'] . "','". $_POST['Address']. "')";
    $result=mysqli_query($mysql, $sql);
    echo ("<script>location.href='./HumanInfo2.php';</script>");
?>