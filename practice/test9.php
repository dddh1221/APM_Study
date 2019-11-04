<html>
    <head> <meta charset = 'utf-8'> </head>
    <?php
        $host = 'localhost';
        $user = 'root';
        $pw = 'apmsetup';
        $dbName = 'userDB';
        $mysqli = new mysqli($host, $user, $pw, $dbName);

        if($conn->connect_errno){
            die("Connection failed: " . $conn->connect_error); 
        }

        if($mysqli){
            echo "MySQL 접속 성공";
        } else {
            echo "MySQL 접속 실패";
        }
    ?>
</html>