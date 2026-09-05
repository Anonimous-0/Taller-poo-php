<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro del Bus</title>
</head>
<body>

  <h2>Registro del Bus</h2>

    <form action="view/resultado.php" method="POST">

        <label>Placa:</label><br>
        <input type="text" name="plca" placeholder="Ingrese la placa del bus" required><br><br>

        <label>Capacidad de pasajeros:</label><br>
        <input type="number" name="capacidadPasajeros" placeholder="Ingrese la capacidad del bus" required><br><br>

        <label>Precio del pasaje:</label><br>
        <input type="number" name="precio" placeholder="Ingrese el precio del pasaje" required><br><br>

        <label>Pasajeros que suben:</label><br>
        <input type="number" name="subirPasajeros" placeholder="Ingrese la cantidad de pasajeros que suben" required><br><br>

        <label>Pasajeros que bajan:</label><br>
        <input type="number" name="bajarPasajeros" placeholder="Ingrese la cantidad de pasajeros que bajan" required><br><br>

        <input type="submit" value="Procesar">

    </form>
    
</body>
</html>
