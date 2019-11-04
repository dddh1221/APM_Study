<?php
    include "mysql_connect.php";
    extract($_POST);
    mysqli_set_charset($mysql, "utf8");

    $sql="update humaninfo set name='$_POST[Name]', address='$_POST[Address]' where Age=$_POST[Age]";
    $result=mysqli_query($mysql, $sql);

    if($result){
        echo ("<script>location.href='./HumanInfo2.php';</script>");
    }
    else {
        echo "SQL error : ";
        echo mysqli_error($mysql);
    }
?>