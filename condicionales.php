<?php
    //condicionales o bifurcaciones
    $n1 = 15;
    $n2 = 6;
    $n3 = 20;
    /*
        ***operadores de comparacion***
            = asignar
            == comparar igualdad
            < menor que
            > mayor que
            <= menor igual que
            >= mayor igual que

            ***operadores de anidación: para varias preguntas al tiempo***
            && significa y
            or signifoca ó
    */

    if ($n1==$n2){
        echo "los valores son iguales";
    }elseif($n1>$n2){
        echo "el valor ".$n1." es mayor que el valor ".$n2;
    }else{
        echo "el valor ".$n1. " es menor que el valor ".$n2;
    }
?>