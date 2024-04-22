<?php

$mysqli = new mysqli("localhost:3307", "root", "", "test");

if (!$mysqli) {
    die("No se pudo conectar a la BBDD: " . mysqli_connect_error());
}
echo "Conectado a la base de datos.";


