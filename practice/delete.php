<?php
    include "mysql_connect.php";
    $Age=$_GET['Age'];
    mysqli_set_charset($mysql, "utf8");

    $sql="delete from humaninfo where Age=$Age";
    $result=mysqli_query($mysql, $sql);
    echo ("<script>location.href='./HumanInfo2.php';</script>");
?>