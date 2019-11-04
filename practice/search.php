<?php
    $link=mysqli_connect("localhost", "root", "apmsetup", "roleDB");

    if(!$link){
        echo "MySQL 접속 에러 : ";
        echo mysqli_connect_error();
        exit();
    }

    mysqli_set_charset($link, "utf8");
    $address=isset($_POST['address']) ? $_POST['address'] : '';
    $android=strpos($_SERVER['HTTP_USER_AGENT'], "Android");

    if($address != ""){
        $sql = "select * from person where address='$address'";
        $result = mysqli_query($link, $sql);
        
        $data = array();

        if($result){
            $row_address = mysqli_num_rows($result);

            if(0 == $row_address){
                array_push($data, array('id' => '0', 'name'=>'N', 'address'=>$address));
                echo "'";
                echo $address;
                echo "'은 찾을 수 없습니다.";
                
                if(!$android) {
                    echo "<pre>";
                    print_r($data);
                    echo '</pre>';
                }
                else {
                    $json = json_encode($data);
                    echo $json;
                }
            }
            else{
                while($row=mysqli_fetch_array($result)){
                    array_push($data, array('id'=>$row["id"], 'name'=>$row["name"], 'address'=>$row["address"]));
                }
                
                if(!$android) {
                    echo "<pre>";
                    print_r($data);
                    echo '</pre>';
                    mysqli_free_result($result);
                }
                else {
                    $json = json_encode($data);
                    echo $json;
                }
            }
        }
        else {
            echo "SQL문 처리 중 에러 발생 : ";
            echo mysqli_error($link);
        }
    }
    else {
        echo "검색할 주소를 입력하세요 ";
    }
    mysqli_close($link);
?>