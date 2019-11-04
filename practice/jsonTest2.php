<html>
    <header>
        <meta charset='utf-8'>
    </header>
    <?php
        $value = array("apple" => "Fruits", "1" => 1, "참" => true);
        echo gettype($value), "<br>";

        $json = json_encode($value);
        echo gettype($json), "<br>";

        $value1 = '{"apple" : "Fruits", "1" : 1, "참" : true}';
        echo gettype($value1), "<br>";

        $result = json_decode($value1);
        echo gettype($result), "<br>";

        var_dump($result);
        echo '<br>';
        
        $result=json_decode($value1, true);
        echo gettype($result), "<br>";
        var_dump($result);
        echo '<br>';
        echo $result["apple"];
    ?>
</html>