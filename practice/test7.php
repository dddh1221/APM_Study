<html>
    <meta charset='utf-8'>
    <?
        // for($i=1; $i<=10; $i++){
        //     if($i>5) break;
        //     echo $i. "<br>";
        // }
        // echo "종료";

        // $school=array("통신과", "3학년", "1, 2반");
        // echo 'I love ' .$school[0]. "&nbsp".$school[1]."$nbsp".$school[2]

        // for($i=0; $i<10; $i++)
        //     $a[$i]=$i+1;
        
        // for($i=9; $i>=0; $i--)
        //     $b[9-$i]=$i+1;
        
        // for($i=0; $i<10; $i++){
        //     echo $a[$i] . '×' .  $b[$i] . '=' . $a[$i]*$b[$i];
        //     echo '<br>';

        // }

        // $cars = array(
        //     array("volvo", 10, 300),
        //     array("BMW", 11, 250),
        //     array("saab", 12, 350),
        //     array("kia", 13, 200)
        // );

        // for($row=0; $row < 4; $row++){
        //     echo "<p><b>Row number $row</b></p>";
        //     echo "<ul>";
        //     for($col=0; $col<3; $col++){
        //         echo "<li>" . $cars[$row][$col] . "</li>";
        //     }
        //     echo "</ul>";
        // }

        // $score = array(
        //     array(88, 98, 96, 77, 63),
        //     array(86, 77, 66, 86, 93),
        //     array(74, 83, 95, 86, 97)
        // );

        // for($i = 0; $i < 3 ; $i++){
        //     for($j=0 ; $j < 5 ; $j++){
        //         echo '$score['. $i . '][' . $j . ']=' . $score[$i][$j];
        //         echo '<br>';
        //     }
        //     echo '<br>';
        // }

        // for($student_num = 1; $student_num <= 3 ; $student_num++){
        //     $sum=0;
        //     for($j = 0 ; $j < 5 ; $j++){
        //         $sum += $score[$student_num-1][$j];
        //     }
        //     $avg = $sum / 5;
        //     echo "$student_num 번째 학생의 점수 => 합계:$sum, 평균:$avg<br>";
        // }

        function hap($a, $b){
            $sum=0;
            while($a <= $b){
              $sum+=$a;
                 $a++;
            }    return $sum;
        }

        $total = hap($from=1, $to=100);
        echo "$from 에서 $to 까지의 합 : $total"
    ?>
</html>