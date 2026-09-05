 <?php

require_once __DIR__ . '/../controller/BusController.php';

$controller = new BusController();

$bus = $controller->procesar(
    $_POST["plca"],
    (int) $_POST["capacidadPasajeros"],
    (float) $_POST["precio"],
    (int) $_POST["subirPasajeros"],
    (int) $_POST["bajarPasajeros"]
);

echo "<h2>Resultado del Bus</h2>";

echo "La placa del bus es: " . $bus->getPlaca() . "<br>";
echo "La capacidad de pasajeros es: " . $bus->getCapacidadPasajeros() . "<br>";
echo "El precio del pasaje es: $" . $bus->getPrecioPasaje() . "<br>";
echo "Los pasajeros actuales son: " . $bus->getPasajerosActuales() . "<br>";
echo "El dinero acumulado es: $" . $bus->getDineroAcumulado() . "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="submit" value="Volver" onclick="window.location.href='../index.php'">
</body>
</html>