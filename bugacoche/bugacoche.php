<?php
include 'funciones.inc.php';
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
                    <a href="index.php?orderby=marca">Marca</a>
                    <a href="index.php?orderby=precio">Precio</a>
                    <a href="index.php?orderby=potencia">Potencia</a>
                    <a href="index.php?orderby=maletero">Maletero</a>
                </p>

                <div class="row g-4">

                <?php  ?>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100 w-100 shadow">
                            <img src="https://cochesnuevos.autofacil.es/img/AUDI_A3_SPORTBACK_2020.jpg"
                                class="card-img-top ">
                            <div class="card-body">
                                <h3 class="card-title">Audi A3 Sportback 2020</h3>
                                <h5>Precio: 28385 €</h5>
                                <h5>Potencia: 400 CV</h5>
                                <h5>Maletero: 380 Litros</h5>
                            </div>
                        </div>
                    </div>

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
</body>

</html>