<html>
    <meta charset='utf-8'>
    <?
        $score = array(
            array(88, 98, 96, 77, 63),
            array(86, 77, 66, 86, 93),
            array(74, 83, 95, 86, 97)
        );

        for($i = 0; $i < 3 ; $i++){
            for($j=0 ; $j < 5 ; $j++){
                echo '$score['. $i . '][' . $j . ']=' . $score[$i][$j];
                echo '<br>';
            }
            echo '<br>';
        }

        for($student_num = 1; $student_num <= 3 ; $student_num++){
            $sum=0;
            for($j = 0 ; $j < 5 ; $j++){
                $sum += $score[$student_num-1][$j];
            }
            $avg = $sum / 5;
            echo "$student_num 번째 학생의 점수 => 합계:$sum, 평균:$avg<br>";
        }
    ?>
</html>