<html>
    <head> <meta charset='utf-8'> </head>
    <body>
        <?
            for($a=1; $a<5; $a++){
                for($b=1; $b<=4-$a; $b++){ 
                    echo "&nbsp&nbsp&nbsp";
                }

                for($c=1; $c<=2*$a-1; $c++){
                    echo "♡";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>