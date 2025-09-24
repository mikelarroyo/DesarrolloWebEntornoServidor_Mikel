/** 
Ejercicio 7
transforma un array con funciones anonimas:
    dado un array de nombres, utiliza una funcion anonima con array map
    - convertir toos los nombres a mayusculas, para ello utiliza una funcion anonima
    - agregar "Sr/Sra. antes de cada nombre" para ello utiliza otra funcion anonima
*/

<?php

$nombres = ["maria", "mikel", "luismi", "victor", "pepe", "ana"];


    $mayusculas = array_map(function($nombre){
        return strtoupper($nombre);
    }, $nombres); 

    print_r($mayusculas);

    $agregar = array_map(function($nombre){
        return "Sr/Sra.". $nombre;

    }, $nombres);

    print_r($agregar);