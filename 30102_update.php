<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'apmsetup';
    $dbName = 'testDB';

    $mysql = mysqli_connect($host, $user, $pw, $dbName);

    $search_name = $_POST['Name'];
    $change_age = $_POST['Age'];
    $change_address = $_POST['Address'];

    $sql = "UPDATE user SET Age='$change_age', Address='$change_address' WHERE Name='$search_name'";
    $result = mysqli_query($mysql, $sql);

    if($result) {
        echo "Update Success";
    }
    else {
        echo "SQL error :";
        echo mysqli_error($mysql);
    }
?>