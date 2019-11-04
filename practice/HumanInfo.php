<?php
    include "mysql_connect.php";

    $sql="select * from HumanInfo";
    $result=mysqli_query($mysql, $sql);
    $json = array();

    while($row = mysqli_fetch_array($result)){
        array_push($json, array(
                "age" => $row[Age],
                "name" => $row[name],
                "address" => $row[address]
            )
        );
    }

    print_r(json_encode($json));
?>