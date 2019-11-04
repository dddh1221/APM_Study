<?php
    include "mysql_connect.php";

    $sql = "select * from userTB where Username= '$_POST[username]' and Password= '$_POST[password]'";
    $result = $mysql->query($sql);

    if($result->num_rows > 0){
        while($row= $result->fetch_assoc()){
            echo ("$row[Role]<br>");
        }
    } else {
        echo "0 results";
    }

    mysqli_close($mysql);
?>