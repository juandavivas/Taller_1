<?php
    $pg = $_GET["gana"];
    $pp = $_GET["per"];
    $pe = $_GET["emp"];    

    $Puntos = ($pg*3) + ($pp*0) + ($pe*1);

    echo "Partidos Ganados: ".$pg;
    echo "<br>";
    echo "Partidos Perdidos: ".$pp;
    echo "<br>";
    echo "Partidos Empatados: ".$pe;
    echo "<br>";
    echo "Los Puntos son: ".$Puntos;

?>