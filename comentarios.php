<!DOCTYPE html>
<html lang="es">

<?php 
    $mysqli = new mysqli("localhost:3307", "root", "");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (". $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        echo "Conectado a MySQL";
    }

    if (isset($_POST["nombre"])) {
        $nombre = $_POST["nombre"]
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
        <p class="cabeceraComentario">01-Enero-2012 a las 00:00 Fernando (fer@fer.com) escribió</p>
        <p class="cuerpoComentario" >Hola, esto es un mensaje de prueba para los comentarios...</p>
    </div>

    <div class="creaComentario">
        <span>Añade tu comentario</span>
        <form action="comentarios.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required id="nombre">
            <label for="email">Email (opcional)</label>
            <input type="email" name="email" id="email">
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" required>
            <button type="submit">Enviar comentario</button>
        </form>
    </div>

</body>

</html>