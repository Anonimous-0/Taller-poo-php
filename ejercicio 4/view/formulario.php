<?php

$cantidad = (int) $_POST["cantidad"];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion de las películas</title>
</head>

<body>

    <h1>CinePlus</h1>

    <h2>Datos de las películas</h2>

    <form action="resultado.php" method="POST">

        <input
            type="hidden"
            name="cantidad"
            value="<?php echo $cantidad; ?>"
        >

        <?php

        for ($i = 1; $i <= $cantidad; $i++) {

        ?>

            <h3>Película<?php echo $i; ?></h3>

            <label>Título:</label>
            <br>

            <input
                type="text"
                name="titulo[<?php echo $i; ?>]"
                required
            >

            <br><br>


            <label>Género:</label>
            <br>

            <input
                type="text"
                name="genero[<?php echo $i; ?>]"
                required
            >

            <br><br>


            <label>Duración en horas:</label>
            <br>

            <input
                type="number"
                name="duracion[<?php echo $i; ?>]"
                min="0.1"
                step="0.1"
                required
            >

            <br><br>


            <label>Clasificación:</label>
            <br>

            <input
                type="text"
                name="clasificacion[<?php echo $i; ?>]"
                required
            >

            <br><br>


            <label>Calificación de usuarios:</label>
            <br>

            <input
                type="number"
                name="calificacion[<?php echo $i; ?>]"
                min="1"
                max="5"
                step="0.1"
                required
            >

            <br><br>

            <hr>

        <?php

        }

        ?>

        <input
            type="submit"
            value="Registrar películas"
        >

    </form>

</body>

</html>