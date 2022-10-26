<?php
    //condicionales o bifurcaciones
    $n1 = $_GET["herma_1"];
    $n2 = $_GET["herma_2"];
    $dif = $n1 - $n2;  
    
    if ($n1==$n2){
        echo "los hermanos tienen la misma edad";
    }elseif($n1>$n2){
        echo "El hermano_1: ".$n1." => es mayor que el hermano_2: ".$n2;
    }else{
        echo "El hermano_1: ".$n1. " => es menor que el hermano_2: ".$n2;
    }
        echo " => La diferencia es de ".$dif;       
?>