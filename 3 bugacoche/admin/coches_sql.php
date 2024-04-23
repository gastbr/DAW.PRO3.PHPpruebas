<?php

// Conexion BBDD
$mysqli = new mysqli("localhost:3307", "root", "", "test");
if (!$mysqli) {
    die("No se pudo conectar a la BBDD: " . mysqli_connect_error());
}
echo "Conectado a la base de datos.";

// INSERT
if (isset($_GET["opcion"]) && $_GET["opcion"] == 'insertar') {

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $precio = $_POST["precio"];
    $potencia = $_POST["potencia"];
    $maletero = $_POST["maletero"];
    $imagen = $_POST["imagen"];

    $query = "INSERT INTO coches (marca, modelo, potencia, maletero, precio, imagen) values ('$marca', '$modelo', '$potencia', '$maletero', '$precio', '$imagen');";
    $mysqli->query($query);

    echo "<br>Coche añadido";

    header('Location:../bugacoche.php');
    exit();
}

// SELECT

if (isset($_GET["orderby"])) {

    switch ($_GET["orderby"]) {
        case 'marca':
            $query = "SELECT marca, modelo, potencia, maletero, precio, imagen from coches order by marca";
            break;
        case 'precioasc':
            $query = "SELECT marca, modelo, potencia, maletero, precio, imagen from coches order by precio";
            break;
        case 'preciodesc':
            $query = "SELECT marca, modelo, potencia, maletero, precio, imagen from coches order by precio desc";
            break;
        case 'potencia':
            $query = "SELECT marca, modelo, potencia, maletero, precio, imagen from coches order by potencia";
            break;
        case 'maletero':
            $query = "SELECT marca, modelo, potencia, maletero, precio, imagen from coches order by maletero";
            break;
    }
} else {
    $query = "SELECT marca, modelo, potencia, maletero, precio, imagen from coches";
}

$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $marca = $row["marca"];
        $modelo = $row["modelo"];
        $potencia = $row["potencia"];
        $maletero = $row["maletero"];
        $precio = $row["precio"];
        $imagen = $row["imagen"];
    }
} else {
    echo "No results";
}
