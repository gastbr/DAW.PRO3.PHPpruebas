<?php

// Conexion BBDD
$mysqli = new mysqli("localhost:3307", "root", "", "test");
if (!$mysqli) {
    die("No se pudo conectar a la BBDD: " . mysqli_connect_error());
}

if (isset($_POST["username"])) {
    $user = addcslashes($_POST["username"], "'`\"");
    $pass = md5(addcslashes($_POST["password"], "'`\""));

    $query = "SELECT pass FROM usuarios WHERE user='$user'";
    $table = $mysqli->query($query);

    if ($result = $table->fetch_assoc()) {
        echo $result["pass"];
    }
}

?>

<!DOCTYPE html>
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
                <hr>
                <div class="d-flex flex-column">
                    <div class="flex-grow-1 border p-4 rounded w-50 align-self-center">
                        <div class="alert alert-danger" role="alert" style="display:none">Usuario o password
                            incorrectos.</div>
                        <h1>Acceso identificado</h1>
                        <form method="POST" action="login.php">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Log in</button>
                            <a href="../bugacoche.php" class="btn btn-outline-secondary">Volver a bugacoche</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <footer class="container ">
            <hr>
            <p class="text-end">Fernando Jerez, 1ºDAW 2023/24</p>

        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>



</body>

</html>