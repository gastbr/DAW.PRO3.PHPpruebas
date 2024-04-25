<?php

// Conexion BBDD
$mysqli = new mysqli("localhost:3307", "root", "", "test");
if (!$mysqli) {
    die("No se pudo conectar a la BBDD: " . mysqli_connect_error());
}
echo "Conectado a la base de datos.";

// UPDATE

if (isset($_GET["opcion"]) && $_GET["opcion"] == 'update') {

    $id = $_GET["id"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $precio = $_POST["precio"];
    $potencia = $_POST["potencia"];
    $maletero = $_POST["maletero"];
    

    if ($_POST["imagen"] != "") {
        $imagen = $_POST["imagen"];

        $mysqli->query("UPDATE coches SET marca='$marca', modelo='$modelo', potencia='$potencia', maletero='$maletero', precio='$precio', imagen='$imagen' WHERE id='$id';");
    } else {
        $imagen = 'https://colegiocei.es/wp-content/uploads/2023/12/producto-sin-imagen.png';

        $mysqli->query("UPDATE coches SET marca='$marca', modelo='$modelo', potencia='$potencia', maletero='$maletero', precio='$precio', imagen='$imagen' WHERE id='$id';");
    }

    $mysqli->query("UPDATE coches SET marca='$marca', modelo='$modelo', potencia='$potencia', maletero='$maletero', precio='$precio', imagen='$imagen' WHERE id='$id';");

    echo "<br>Coche modificado";

    header('Location: admin_listado.php');
    exit();
}


// INSERT
if (isset($_GET["opcion"]) && $_GET["opcion"] == 'insertar') {

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $precio = $_POST["precio"];
    $potencia = $_POST["potencia"];
    $maletero = $_POST["maletero"];
    $imagen = $_POST["imagen"];

    if ($imagen != "") {
        $query = "INSERT INTO coches (marca, modelo, potencia, maletero, precio, imagen) values ('$marca', '$modelo', '$potencia', '$maletero', '$precio', '$imagen');";
    } else {
        $query = "INSERT INTO coches (marca, modelo, potencia, maletero, precio) values ('$marca', '$modelo', '$potencia', '$maletero', '$precio');";
    }

    $mysqli->query($query);

    echo "<br>Coche añadido";

    header('Location: admin_listado.php');
    exit();
}

// DELETE

if (isset($_GET["opcion"]) && $_GET["opcion"] == 'borrar') {
    $mysqli->query('DELETE from coches where id=' . $_GET["id"]);

    header("Location: admin_listado.php");
    exit();
}

// SELECT

if (isset($_GET["orderby"])) {
    $query = "SELECT * from coches order by " . $_GET["orderby"];
} else {
    $query = "SELECT * from coches";
}

if (isset($_GET["id"])) {
    $query = "SELECT * from coches where id=" . $_GET["id"];
}

$table = $mysqli->query($query);