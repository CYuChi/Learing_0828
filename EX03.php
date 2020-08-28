<html>
<head>
    <meta charset="utf-8">
    <title>看新聞&聽歌</title>
</head>
<body>
    <h2>阿奇精選台</h2>
    <?php

        $tages = "<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
        
        $data = array(
            array("EBC 東森新聞 51 頻道 24 小時線上直播" , "EBC 東森新聞" , "RaIJ767Bj_M"),
            array("TVBS新聞 55 頻道 24 小時直播" , "TVBS" , "A4FbB8UhNRs"),
            array("EBC 東森財經新聞 24小時線上直播" , "EBC 東森財經新聞" , "68lLQ7hkdzU"),
            array("三立LIVE新聞HD直播" , "三立LIVE新聞" , "4ZVUmEUFwaY"),
            array("iNEWS 最正新聞台 LIVE" , "iNEWS 最正新聞台" , "MYwrZeIsRWU"),
            array("吳青峰〈蜂鳥〉" , "蜂鳥" , "MmokuFu_kOw")
        );
        
        foreach($data as $tv){
            echo "<button><a href ='EX03.php?v=" . 
                $tv[2] .
                "&title=" . $tv[0] .
                "'>" . 
                $tv[1] . 
                "</a></button>";
        }
        echo "<hr>";
        $v = $_GET["v"];
        $title = $_GET["title"];
        if($v==NULL){
            $v = "MmokuFu_kOw";
            $title = "蜂鳥";
        }
        
        echo "<h2>$title</h2>";
        echo str_replace("^^^^" , $v , $tages);
        

    ?>
</body>
</html>

