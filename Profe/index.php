<?php


    $numero = (int) 50; 
    $decimales_grande = (float) 1.123456789;
    $decimales = (double) 1.12345678;
    $logico = (bool) false;

    $listas = (array) ["miguel", 23, false];
    var_dump($listas);
    echo "<br>"; 

    $vaso = (object) [];
    $vaso->color = "blanco";
    $vaso->altura = 10;


    var_dump($vaso->altura);

    // $letras = (string) "Miguel Angel";
    
    // echo $letras;

    // echo "<br>";

    // $letras = (string) "wilian";

    // echo $letras;



    define('letras', "miguel");
    

    echo letras;

    echo "<br>";

    const numero = 30;

    echo numero;

    echo "<br>";

    const Numero = 50;

    echo Numero;

?>