<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h2>Registro de clientes del banco</h2>

    <form action="view/resultado.php" method="POST">

        <h3>Datos del banco</h3>

        <label>Nombre del banco:</label><br>
        <input type="text" name="nombreBanco" required>

        <br><br>

        <h3>Cliente 1</h3>

        <label>Nombre:</label><br>
        <input type="text" name="nombreCliente" required>

        <br><br>

        <label>Cédula:</label><br>
        <input type="text" name="cedulaCliente" required>

        <br><br>

        <label>Edad:</label><br>
        <input type="number" name="edadCliente" min="0" required>

        <br><br>

        <h3>Cliente 2</h3>

        <label>Nombre:</label><br>
        <input type="text" name="nombreCliente2" required>

        <br><br>

        <label>Cédula:</label><br>
        <input type="text" name="cedulaCliente2" required>

        <br><br>

        <label>Edad:</label><br>
        <input type="number" name="edadCliente2" min="0" required>

        <br><br>

        <h3>Empresa 1</h3>

        <label>Nombre:</label><br>
        <input type="text" name="nombreEmpresa" required>

        <br><br>

        <label>NIT:</label><br>
        <input type="text" name="nitEmpresa" required>

        <br><br>

        <label>Representante:</label><br>
        <input type="text" name="representanteEmpresa" required>

        <br><br>

        <h3>Empresa 2</h3>

        <label>Nombre:</label><br>
        <input type="text" name="nombreEmpresa2" required>

        <br><br>

        <label>NIT:</label><br>
        <input type="text" name="nitEmpresa2" required>

        <br><br>

        <label>Representante:</label><br>
        <input type="text" name="representanteEmpresa2" required>

        <br><br>

        <input type="submit" value="Registrar clientes">

    </form>,
</body>
</html>