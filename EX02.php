<?php
    function account($n){
        $total = 0 ;
        for($i = 1 ; $i <= $n ; $i++){
            $total = $total + $i ;
        }
        return $total;
    }
    function fact($n){
        $multiply = $n;
        for($i = $n -1 ; $i >0 ; $i--){
            $multiply = $multiply * $i ;
        }
        return $multiply;
    }

    function gen_row($c0 ,$c1 ,$c2 ,$c3){
        echo "<tr bgcolor=#". $c0 ."><td> ".$c1." </td><td>". $c2 ."</td><td>". $c3 ."</td></tr>";
    }

    echo "<table width =300>";
    echo "<tr bgcolor=#ff8888><td> i </td><td>1+2+3+...+i</td><td>i!</td></tr>";
    for($i = 10 ; $i <= 20 ; $i += 1)
    {
        if($i%2){
            $color = "aabbcc" ;
            gen_row( $color,$i,account($i),fact($i));
        }
        else{
            $color = "bbaacc" ;
            gen_row( $color,$i,account($i),fact($i));
        }
        
        //echo "<tr bgcolor=#bbaacc>";
        //echo "<td>" . $i . "  </td>";
        //echo "<td>" . account($i) . "</td>";
        //echo "<td>" . fact($i). "</td>";
        //echo "</tr>";
    }
    echo "</table>";



    //echo "1+2+3+...+". $n ." = ".$total . "<br>";
    //echo $n  ."! = ".$multiply . "<br>" ;


?>