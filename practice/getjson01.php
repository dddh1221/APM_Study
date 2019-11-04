<?php
    include "mysql_connect.php";

    $sql = "SELECT * FROM person";
    $result = mysqli_query($mysql, $sql);
    $json = array();

    while($row = mysqli_fetch_array($result)){
        array_push($json, array(
                "id" => $row[id],
                "name" => $row[name],
                "address" => $row[address]
            )
        );
    }

    print_r(json_encode($json));
?>