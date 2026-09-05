<?php



require_once __DIR__ . '/../controller/PeliculaController.php';

$controller = new PeliculaController();

$plataforma = $controller->procesar($_POST);

$peliculas = $plataforma->obtenerPeliculas();

$recomendadas = $plataforma->obtenerRecomendadas();

$promedio = $plataforma->calcularPromedio();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Catálogo CinePlus</title>

</head>

<body>

    <h1>Catálogo de CinePlus</h1>


    <h2>Películas registradas</h2>


    <?php foreach ($peliculas as $pelicula): ?>

        <h3>
            <?php echo $pelicula->getTitulo(); ?>
        </h3>

        <p>
            <strong>Género:</strong>
            <?php echo $pelicula->getGenero(); ?>
        </p>

        <p>
            <strong>Duración:</strong>
            <?php echo $pelicula->getDuracionMinutos(); ?>
            minutos
        </p>

        <p>
            <strong>Clasificación:</strong>
            <?php echo $pelicula->getClasificacion(); ?>
        </p>

        <p>
            <strong>Calificación:</strong>
            <?php echo $pelicula->getCalificacion(); ?>
            / 5
        </p>

        <p>
            <strong>Recomendada:</strong>

            <?php

            if ($pelicula->esRecomendada()) {
                echo "Sí";
            } else {
                echo "No";
            }

            ?>

        </p>

        <hr>

    <?php endforeach; ?>


    <h2>Promedio de calificaciones</h2>

    <p>

        <?php
        echo number_format($promedio, 2);
        ?>

        / 5

    </p>


    <h2>Películas recomendadas</h2>


    <?php if (count($recomendadas) > 0): ?>

        <ul>

            <?php foreach ($recomendadas as $pelicula): ?>

                <li>

                    <?php echo $pelicula->getTitulo(); ?>

                    -

                    <?php echo $pelicula->getCalificacion(); ?>

                    / 5

                </li>

            <?php endforeach; ?>

        </ul>

    <?php else: ?>

        <p>
            No hay películas recomendadas.
        </p>

    <?php endif; ?>


    <h2>Total de películas creadas</h2>

    <p>

        <?php
        echo Pelicula::getTotalPeliculas();
        ?>

    </p>

    


    <br>

    <a href="../index.php">
        Registrar nuevas películas
    </a>

</body>

</html>