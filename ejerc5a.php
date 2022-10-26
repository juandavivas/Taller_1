<?php
    //condicionales o bifurcaciones
    $n1 = $_GET["herma_1"];
    $n2 = $_GET["herma_2"];
    $n3 = $_GET["herma_2"];
        
    if (($n1>$n2)&&($n1>$n3)){
        echo $n1." es mayor que ".$n2." y".$n3;
    }elseif(($n1>$n2)&&($n3>$n1)){
        echo $n3." es mayor que ".$n1." y".$n2;
    }elseif(($n2>$n1)&&($n2>$n3)){
        echo $n2." es mayor que ".$n1." y".$n3;
    }elseif(($n3>$n1)&&($n3>$n2)){
        echo $n3." es mayor que ".$n1." y".$n2;
    }               
?>