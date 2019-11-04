<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'apmsetup';
    $dbName = 'testDB';

    $mysql = mysqli_connect($host, $user, $pw, $dbName);

    $age = $_POST['Age'];
    $name = $_POST['Name'];
    $address = $_POST['Address'];

    $sql = "INSERT INTO user(Age, Name, Address) values('$age', '$name', '$address')";
    $result = mysqli_query($mysql, $sql);

    if($result) {
        echo "Insert Success";
    }
    else {
        echo "SQL error : ";
        echo mysqli_error($mysql);
    }
?>