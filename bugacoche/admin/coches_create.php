<html lang="en"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BUGACOCHE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <div class="d-flex flex-column min-vh-100">
            <div class="flex-grow-1">
                <div class="container">
    <h1>BUGACOCHE</h1>

    <a href="bugacoche.php">[ WEB ]</a>
    <hr>
    <h1>Añadir nuevo coche</h1>
    <hr>
    <form method="POST" action="coches_sql.php?opcion=insertar">
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca">
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio">
        </div>
        <div class="mb-3">
            <label for="potencia" class="form-label">Potencia</label>
            <input type="text" class="form-control" id="potencia" name="potencia">
        </div>
        <div class="mb-3">
            <label for="maletero" class="form-label">Maletero</label>
            <input type="text" class="form-control" id="maletero" name="maletero">
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">URL Imagen</label>
            <input type="text" class="form-control" id="imagen" name="imagen">
        </div>
        <button type="submit" class="btn btn-primary">Añadir coche</button>
        <a href="coches_listado.php" class="btn btn-danger">Volver al listado</a>
    </form>
</div>

            </div>
            <footer class="container ">
                <hr>
                <p class="text-end">Fernando Jerez, 1ºDAW 2023/24</p>

            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    

    
    </div></body></html>