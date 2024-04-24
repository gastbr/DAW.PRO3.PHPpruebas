<?php
include ('coches_sql.php');
?>

<html lang="es">

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
                <a class="btn btn-primary" href="coches_create.php">+ Añadir coche</a>
                <?php
                if ($table->num_rows > 0) { ?>

                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Potencia</th>
                                <th>Maletero</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                            <?php
                            while ($row = $table->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td> <?php echo $row["marca"]; ?> </td>
                                    <td> <?php echo $row["modelo"]; ?> </td>
                                    <td> <?php echo $row["precio"]; ?> </td>
                                    <td> <?php echo $row["potencia"]; ?> </td>
                                    <td> <?php echo $row["maletero"]; ?> </td>
                                    <td>
                                        <a href="coches_view.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Ver</a>
                                        <a href="coches_update.php?id=<?php echo $row["id"]; ?>"
                                            class="btn btn-warning">Editar</a>
                                        <a href="coches_delete.php?id=<?php echo $row["id"]; ?>"
                                            class="btn btn-danger">Borrar</a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                } else { ?>
                    <p>No se han encontrado registros.</p>
                <?php } ?>
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