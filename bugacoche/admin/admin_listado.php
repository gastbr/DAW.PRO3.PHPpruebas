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
                        <tr>
                            <td>Audi</td>
                            <td>A3 Sportback 2020</td>
                            <td>400 CV</td>
                            <td>383 L</td>
                            <td>28385 €</td>
                            <td>
                                <a href="coches_view.php?id=2" class="btn btn-primary">Ver</a>
                                <a href="coches_update.php?id=2" class="btn btn-warning">Editar</a>
                                <a href="coches_delete.php?id=2" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

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