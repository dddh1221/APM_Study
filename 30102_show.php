<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'apmsetup';
    $dbName = 'testDB';

    $mysql = mysqli_connect($host, $user, $pw, $dbName);

    $sql = "SELECT * FROM user";
    $result = mysqli_query($mysql, $sql);

    $data = array();
    while($row=mysqli_fetch_array($result)) {
        array_push($data, array('Age' => $row["Age"], 'Name' => $row["Name"], 'Address' => $row["Address"]));
    }

    $json = json_encode($data);
    echo $json;
?>