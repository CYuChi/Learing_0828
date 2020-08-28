<h2>匯率轉換器</h2>
<hr>
<?php
    $rate_list = array(
        "USD" => array("name"=>"美金"     ,"id"=>"USD" ,"rate"=>28.95),
        "HKD" => array("name"=>"港幣"     ,"id"=>"HKD" ,"rate"=>3.631),
        "GBD" => array("name"=>"英鎊"     ,"id"=>"GBP" ,"rate"=>37.76),
        "AUD" => array("name"=>"澳幣"     ,"id"=>"AUD" ,"rate"=>21.07),
        "CAD" => array("name"=>"加拿大幣" ,"id"=>"CAD" ,"rate"=>21.94),
        "SGD" => array("name"=>"新加坡幣" ,"id"=>"SGD" ,"rate"=>20.97)
    );
?>
<form method='POST' action="EX05.php">
        新台幣 : <input type="text" size = 7 value="500" name="money">元<br>
        <select name = "dollar">
<?php
    
    foreach($rate_list as $ya){
        echo "<option value =" . $ya["id"] .
            ">" . $ya["name"] . "</option>";
    }
    /*
    for($i = 0 ; $i < count($rate_list) ; $i++){
        echo "<option value =" . $i .
            ">" . $rate_list[$i]["name"] . "</option>";
    }
    */
?>
    </select>
    <input type="submit" value="開始轉換">
</form>

<?php
    $money = $_POST["money"];
    $dollar = $_POST["dollar"];

    //echo $money . "<br>";
    echo "幣值為 =" . $rate_list[$dollar]["rate"] . "<br>";
    $end =  $money / $rate_list[$dollar]["rate"] ;
    echo "台幣 「 " . $money . "」元，轉換為 『" . $rate_list[$dollar]["name"] . "』為「" . round($end,2) . "」元";
?>