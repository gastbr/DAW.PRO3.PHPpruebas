<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>asda</h1>
    

        <table border=1>

            <?php
            $filas = 10;
            $columnas = 10;
            ?>

            <tr>
                <th colspan="<?php echo $columnas; ?>">Cabecera</th>
            </tr>

            <?php for ($i = 1; $i <= $filas; $i++) { ?>

                <tr>

                    <?php for ($j = 1; $j <= $columnas; $j++) { ?>

                        <td>
                            <?php echo $i * $j; ?>
                        </td>

                    <?php } ?>
            
                </tr>

            <?php } ?>


        </table>

        <button type="button" style="margin: 20px; padding: 5px"><a href="comentarios.php">Comentarios</a></button>
    
</body>

</html>