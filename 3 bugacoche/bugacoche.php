<?php
include 'admin/coches_sql.php';
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
                <div class="text-end"><a href="admin/admin_listado.php">[ LOGIN-ADMIN ]</a></div>
                <h1 class="text-start">BUGACOCHE.COM</h1>
                <hr>
                <p>Ordenar por:
                    <a href="bugacoche.php?orderby=marca">Marca</a>
                    <a href="bugacoche.php?orderby=precio">Precio ascendente</a>
                    <a href="bugacoche.php?orderby=precio%20desc">Precio descendente</a>
                    <a href="bugacoche.php?orderby=potencia">Potencia</a>
                    <a href="bugacoche.php?orderby=maletero">Maletero</a>
                </p>

                <div class="row g-4">

                    <?php
                        if ($table->num_rows > 0) {
                            while ($row = $table->fetch_assoc()) {
                    ?>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card h-100 w-100 shadow">
                                <img class src="<?php echo $row["imagen"]; ?>" class="card-img-top ">
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $row["marca"] . " " . $row["modelo"]; ?></h3>
                                    <h5>Precio: <?php echo $row["precio"]; ?> €</h5>
                                    <h5>Potencia: <?php echo $row["potencia"]; ?> CV</h5>
                                    <h5>Maletero: <?php echo $row["maletero"]; ?> Litros</h5>
                                </div>
                            </div>
                        </div>
                    <?php
                            }
                        }
                    ?>
                    

                </div>
            </div>

        </div>
        <footer class="container">
            <hr>
            <p class="text-end">Fernando Jerez, 1ºDAW 2023/24</p>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

    </div>

    <script src="script.js"></script>

</body>

</html>