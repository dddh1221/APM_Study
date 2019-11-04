<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'apmsetup';
    $dbName = 'testDB';

    $mysql = mysqli_connect($host, $user, $pw, $dbName);
    $delete_name = $_POST['Name'];

    $sql = "DELETE FROM user WHERE Name='$delete_name'";
    $result = mysqli_query($mysql, $sql);

    if($result) {
        echo "Delete Success";
    }
    else {
        echo "SQL error : ";
        echo mysqli_error($mysql);
    }
?>