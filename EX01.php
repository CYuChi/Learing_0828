<button type = button><a href="index.php">回首頁</a></button>
<button type = button><a href="EX01.php?height=1.78&weight=85">阿奇的BMI</a></button>
<button type = button><a href="EX01.php?height=1.63&weight=55">文子的BMI</a></button>
<button type = button><a href="EX01.php?height=1.72&weight=70">袋鼠的BMI</a></button>
<hr>

<?php
    function computeBMI($weight , $height){
        echo "體重:" . $weight . "公斤<br>";
        echo "身高:" . $height*100 . "公分<br>";
        $bmi = $weight / $height **2 ;
        echo "BMI: " . (int)$bmi;
        echo"<br>";

        if($bmi>24 )
            echo "體重過重";
        else if( $bmi>18)
            echo "正常範圍";
        else
            echo "太瘦了";
    }


    $height = $_GET["height"];
    $weight = $_GET["weight"];
    if($height!=NULL && $weight !=NULL)
        computeBMI( $weight , $height);
    else{
        echo "請正確在網址輸入身高體重<br>";
        echo "使用範例 = http://localhost/mysite/0827/EX07.php?height=你的身高&weight=你的體重 <br>";
    }
?>