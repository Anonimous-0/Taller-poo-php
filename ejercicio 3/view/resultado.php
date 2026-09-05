<?php

require_once __DIR__ . '/../controllers/BancoController.php';

$controller = new BancoController();

$resultados = $controller->procesar($_POST);

$banco = $resultados["banco"];
$todosLosNombres = $resultados["todosLosNombres"];
$personas = $resultados["personas"];
$empresas = $resultados["empresas"];
$menores = $resultados["menores"];
$masJoven = $resultados["masJoven"];
$masViejo = $resultados["masViejo"];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Banco</title>
</head>

<body>

    <h1>Banco: <?php echo $banco->obtenerNombre(); ?></h1>

    <h2>1. Todos los nombres de los clientes</h2>

    <ul>
        <?php foreach ($todosLosNombres as $nombre): ?>

            <li>
                <?php echo $nombre; ?>
            </li>

        <?php endforeach; ?>
    </ul>


    <h2>2. Nombre y cédula de todos los clientes</h2>

    <ul>
        <?php foreach ($personas as $persona): ?>

            <li>
                Nombre:
                <?php echo $persona["nombre"]; ?>

                - Cédula:
                <?php echo $persona["cedula"]; ?>
            </li>

        <?php endforeach; ?>
    </ul>


    <h2>3. Nombre y representante de cada empresa</h2>

    <ul>
        <?php foreach ($empresas as $empresa): ?>

            <li>
                Empresa:
                <?php echo $empresa["nombre"]; ?>

                - Representante:
                <?php echo $empresa["representante"]; ?>
            </li>

        <?php endforeach; ?>
    </ul>


    <h2>4. Nombres de los clientes menores de edad</h2>

    <ul>
        <?php foreach ($menores as $menor): ?>

            <li>
                <?php echo $menor; ?>
            </li>

        <?php endforeach; ?>
    </ul>


    <h2>5. Cliente más joven</h2>

    <?php if ($masJoven !== null): ?>

        <p>
            Nombre:
            <?php echo $masJoven->obtenerNombre(); ?>

            <br>

            Edad:
            <?php echo $masJoven->obtenerEdad(); ?>
        </p>

    <?php endif; ?>


    <h2>6. Cliente más viejo</h2>

    <?php if ($masViejo !== null): ?>

        <p>
            Nombre:
            <?php echo $masViejo->obtenerNombre(); ?>

            <br>

            Edad:
            <?php echo $masViejo->obtenerEdad(); ?>
        </p>

    <?php endif; ?>


    <h2>Total de clientes</h2>

    <p>
        <?php echo $banco->obtNumeroClientes(); ?>
    </p>

</body>

</html>