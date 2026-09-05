<?php

$cantidadEstudiantes =
    (int) $_POST["cantidadEstudiantes"];

$cantidadDocentes =
    (int) $_POST["cantidadDocentes"];

$cantidadAdministrativos =
    (int) $_POST["cantidadAdministrativos"];

$cantidadCursos =
    (int) $_POST["cantidadCursos"];

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Registro Académico</title>

</head>

<body>

    <h1>
        Registro Académico
    </h1>


    <form
        action="resultado.php"
        method="POST"
    >

        
        

        <input
            type="hidden"
            name="cantidadEstudiantes"
            value="<?php echo $cantidadEstudiantes; ?>"
        >

        <input
            type="hidden"
            name="cantidadDocentes"
            value="<?php echo $cantidadDocentes; ?>"
        >

        <input
            type="hidden"
            name="cantidadAdministrativos"
            value="<?php echo $cantidadAdministrativos; ?>"
        >

        <input
            type="hidden"
            name="cantidadCursos"
            value="<?php echo $cantidadCursos; ?>"
        >


        
        
        <h2>
            Estudiantes
        </h2>


        <?php

        for (
            $i = 1;
            $i <= $cantidadEstudiantes;
            $i++
        ) {

        ?>

            <h3>
                Estudiante <?php echo $i; ?>
            </h3>


            <label>
                Nombre:
            </label>

            <br>

            <input
                type="text"
                name="estudianteNombre[<?php echo $i; ?>]"
                required
            >

            <br><br>


            <label>
                Documento:
            </label>

            <br>

            <input
                type="text"
                name="estudianteDocumento[<?php echo $i; ?>]"
                required
            >

            <br><br>


            <label>
                Correo:
            </label>

            <br>

            <input
                type="email"
                name="estudianteCorreo[<?php echo $i; ?>]"
                required
            >

            <br><br>

            <hr>

        <?php

        }

        ?>


        
        

        <h2>
            Docentes
        </h2>


        <?php

        for (
            $i = 1;
            $i <= $cantidadDocentes;
            $i++
        ) {

        ?>

            <h3>
                Docente <?php echo $i; ?>
            </h3>


            <label>
                Nombre:
            </label>

            <br>

            <input
                type="text"
                name="docenteNombre[<?php echo $i; ?>]"
                required
            >

            <br><br>


            <label>
                Documento:
            </label>

            <br>

            <input
                type="text"
                name="docenteDocumento[<?php echo $i; ?>]"
                required
            >

            <br><br>


            <label>
                Correo:
            </label>

            <br>

            <input
                type="email"
                name="docenteCorreo[<?php echo $i; ?>]"
                required
            >

            <br><br>

            <hr>

        <?php

        }

        ?>


        
        

        <h2>
            Personal administrativo
        </h2>


        <?php

        for (
            $i = 1;
            $i <= $cantidadAdministrativos;
            $i++
        ) {

        ?>

            <h3>
                Administrativo <?php echo $i; ?>
            </h3>


            <label>
                Nombre:
            </label>

            <br>

            <input
                type="text"
                name="administrativoNombre[<?php echo $i; ?>]"
                required
            >

            <br><br>


            <label>
                Documento:
            </label>

            <br>

            <input
                type="text"
                name="administrativoDocumento[<?php echo $i; ?>]"
                required
            >

            <br><br>


            <label>
                Correo:
            </label>

            <br>

            <input
                type="email"
                name="administrativoCorreo[<?php echo $i; ?>]"
                required
            >

            <br><br>

            <hr>

        <?php

        }

        ?>


        
        

        <h2>
            Cursos
        </h2>


        <?php

        for (
            $i = 1;
            $i <= $cantidadCursos;
            $i++
        ) {

        ?>

            <h3>
                Curso <?php echo $i; ?>
            </h3>


            <label>
                Nombre del curso:
            </label>

            <br>

            <input
                type="text"
                name="cursoNombre[<?php echo $i; ?>]"
                required
            >

            <br><br>


            <label>
                Docente asignado:
            </label>

            <br>

            <select
                name="cursoDocente[<?php echo $i; ?>]"
                required
            >

                <option value="">
                    Seleccione un docente
                </option>


                <?php

                for (
                    $j = 1;
                    $j <= $cantidadDocentes;
                    $j++
                ) {

                ?>

                    <option value="<?php echo $j; ?>">

                        Docente <?php echo $j; ?>

                    </option>

                <?php

                }

                ?>

            </select>

            <br><br>


           
           

            <h4>
                Notas de los estudiantes
            </h4>


            <?php

            for (
                $j = 1;
                $j <= $cantidadEstudiantes;
                $j++
            ) {

            ?>

                <strong>
                    Estudiante <?php echo $j; ?>
                </strong>

                <br><br>


                <label>
                    Nota 1:
                </label>

                <input
                    type="number"
                    name="notas[<?php echo $i; ?>][<?php echo $j; ?>][1]"
                    min="0"
                    max="5"
                    step="0.1"
                    required
                >

                <br><br>


                <label>
                    Nota 2:
                </label>

                <input
                    type="number"
                    name="notas[<?php echo $i; ?>][<?php echo $j; ?>][2]"
                    min="0"
                    max="5"
                    step="0.1"
                    required
                >

                <br><br>


                <label>
                    Nota 3:
                </label>

                <input
                    type="number"
                    name="notas[<?php echo $i; ?>][<?php echo $j; ?>][3]"
                    min="0"
                    max="5"
                    step="0.1"
                    required
                >

                <br><br>

            <?php

            }

            ?>

            <hr>

        <?php

        }

        ?>


        <br>

        <input
            type="submit"
            value="Registrar información"
        >

    </form>

</body>

</html>