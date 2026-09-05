<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Document</title>

</head>

<body>

    <h1>
        Centro de Formación Tecnológica
    </h1>

    <h2>
        Plataforma Académica
    </h2>


    <form
        action="view/formulario.php"
        method="POST"
    >

        <label>
            Cantidad de estudiantes:
        </label>

        <br>

        <input
            type="number"
            name="cantidadEstudiantes"
            min="1"
            required
        >

        <br><br>


        <label>
            Cantidad de docentes:
        </label>

        <br>

        <input
            type="number"
            name="cantidadDocentes"
            min="1"
            required
        >

        <br><br>


        <label>
            Cantidad de personal administrativo:
        </label>

        <br>

        <input
            type="number"
            name="cantidadAdministrativos"
            min="1"
            required
        >

        <br><br>


        <label>
            Cantidad de cursos:
        </label>

        <br>

        <input
            type="number"
            name="cantidadCursos"
            min="1"
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