<?php
    include "mysql_connect.php";

    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];

    $query="INSERT INTO usertb (id, password, name, email1, email2) VALUES('$id', '$pw', '$name', '$email1', '$email2')";
    $result=mysqli_query($mysql, $query);

    if($result){
        echo("<script>location.href='./main.html';</script>");
    }
    else{
        echo "SQL error";
    }
?>