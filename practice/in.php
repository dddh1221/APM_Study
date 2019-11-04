<?
    include "mysql_connect.php";
    if($_POST[name] != null && $_POST[address] != null){
        $sql = "insert into person (name, address) values('$_POST[name]', '$_POST[address]')";
        if($result = mysqli_query($mysql, $sql)) echo "SQL success";
    }
?>