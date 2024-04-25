<?php
include ("coches_sql.php");

$row = $table->fetch_assoc();
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUGACOCHE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex flex-column min-vh-100">
        <div class="flex-grow-1">
            <div class="container">
                <h1>BUGACOCHE</h1>

                <a href="../bugacoche.php">[ WEB ]</a>
                <hr>

                <h2><?php echo $row["marca"]." ".$row["modelo"]; ?></h2>
                <h3><?php echo "Precio: ".$row["precio"]." €"; ?></h3>
                <h3><?php echo "Potencia: ".$row["potencia"]." CV"; ?></h3>
                <h3><?php echo "Maletero: ".$row["maletero"]." Litros"; ?></h3>

                <p>
                    <a href="admin_listado.php" class="btn btn-outline-primary">Volver al listado</a>
                    <a href="coches_update.php?id=<?php echo $_GET["id"]; ?>" class="btn btn-warning">Editar Datos</a>
                </p>
                <img class="w-100 rounded" src="<?php echo $row["imagen"]; ?>">

            </div>

        </div>
        <footer class="container ">
            <hr>
            <p class="text-end">Fernando Jerez, 1ºDAW 2023/24</p>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

    </div>
</body>

</html>