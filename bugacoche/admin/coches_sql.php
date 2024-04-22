<?php

include '../funciones.inc.php';

if ($_GET["opcion"] == 'insertar') {

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $precio = $_POST["precio"];
    $potencia = $_POST["potencia"];
    $maletero = $_POST["maletero"];
    $imagen = $_POST["imagen"];

    $mysqli->query("INSERT INTO coches (marca, modelo, potencia, maletero, precio, imagen) values ('$marca', '$modelo', '$potencia', '$maletero', '$precio', '$imagen');
    ");

    echo "Coche añadido";
}