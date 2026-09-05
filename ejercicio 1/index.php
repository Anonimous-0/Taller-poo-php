    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Citas</title>
    </head>

    <body>

        <h2>Registro de Citas</h2>

        <form action="resultado.php" method="POST">

            <label>Número de la cita:</label><br>
            <input type="number" name="numero"><br><br>

            <label>Tipo de la cita (1-5):</label><br>
            <input type="number" name="tipo" min="1" max="5"><br><br>

            <label>Tarifa:</label><br>
            <input type="number" name="tarifa" ><br><br>

            <input type="submit" value="Calcular">

        </form>

    </body>

    </html>