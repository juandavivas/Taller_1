<?php
    $volantes = $_GET["volan"];
    $posters = $_GET["poster"];
    $tarjetas = $_GET["tdep"];
    

    $comprav = $volantes * 2000;
    $comprap = $posters * 5000;
    $comprat = $volantes * 500;

    $pagototal = $comprav + $comprap + $comprat;

    echo "Usted compro ".$volantes." volantes "." / ".$comprav. " es el volor de los volantes";
    echo "<br>";
    echo "Usted compro ".$posters." posters "." / ".$comprap. " es el valor de los posters";
    echo "<br>";
    echo "Usted compro ".$tarjetas." tarjetas personales "." / ". $comprat. " es el valor de las Tarjetas Personales";
    echo "<br>";
    echo "Su pago total es de:  ".$pagototal. " COP";

?>
