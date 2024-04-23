<!DOCTYPE html>
<html lang="es">

<?php

$mysqli = new mysqli("localhost:3307", "root", "");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Conectado a MySQL";
}
$mysqli->select_db("comentarios");

if (isset($_POST["nombre"])) {

    $nombre = $_POST["nombre"];
    $mensaje = $_POST["mensaje"];

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    } else {
        $email = "NULL";
    }

    $mysqli->query("INSERT INTO `comentarios` (`fechaHora`, `nombre`, `email`, `mensaje`) VALUES (current_timestamp(), '$nombre', '$email', '$mensaje');");

    header("comentarios.php");
    exit();
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="cajaComentarios">
        <p class="cabeceraComentario"><?php $mysqli->query("SELECT fechaHora from comentarios where id=15"); ?> a las 00:00 <?php $mysqli->query("SELECT nombre from comentarios where id=15"); ?> (<?php $mysqli->query("SELECT email from comentarios where id=15"); ?>) escribió</p>
        <?php $mysqli->query("SELECT mensaje from comentarios where id=15"); ?>
    </div>

    <div class="creaComentario">
        <span>Añade tu comentario</span>
        <form action="comentarios.php" method="post">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required id="nombre">

            <label for="email">Email (opcional)</label>
            <input type="email" name="email" id="email">

            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="5" required></textarea>
            <button type="submit">Enviar comentario</button>
        </form>
    </div>

</body>

</html>