<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>CinePlus</h1>

    <h2>Registro de películas</h2>

    <form action="view/formulario.php" method="POST">

        <label>
            ¿Cuántas películas desea registrar?
        </label>

        <br><br>

        <input
            type="number"
            name="cantidad"
            min="1"
            max="20"
            required
        >

        <br><br>

        <input
            type="submit"
            value="Continuar"
        >

    </form>

</body>

</html>