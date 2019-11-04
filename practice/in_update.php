<?
    include "mysql_connect.php";
    if($_POST[name] != null){
        $sql = "update person set name='$_POST[name]' where id=4";
        if($result = mysqli_query($mysql, $sql)) echo "SQL success";
        else echo "Query has error.";
    }
?>