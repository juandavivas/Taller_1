<?php
    $ne = $_GET["nome"];
    $na = $_GET["noma"];
    $n1 = $_GET["not1"];
    $n2 = $_GET["not2"];
    $n3 = $_GET["not3"];

    $Prom = ($n1 + $n2 + $n3)/3;

    echo $ne;
    echo "<br>";
    echo $na;
    echo "<br>";
    echo "Su promedio es de: ".$Prom;

?>

/*

6. Elabora un programa que solicite al cliente el número de volantes, posters y
tarjetas de presentación para imprimir, ten en cuenta que:
 Cada volante tendrá un valor de impresión de: $2.000
 Cada poster tendrá un valor de impresión de: $5.000
 Y las tarjetas de presentación a $500 cada una.
Se requiere saber el total por cada tipo de documento y el total a pagar por todas las
impresiones
Volantes =2000 * 2000
Posters = 500 * 5000
Tdepres = 100000 * 500
Pago total = volantes + posters+ Tdepres

*/