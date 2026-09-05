<?php

require_once __DIR__ . '/../controller/AcademicoController.php';

$controller = new AcademicoController();

$resultado = $controller->procesar($_POST);

$estudiantes = $resultado["estudiantes"];

$docentes = $resultado["docentes"];

$administrativos =
    $resultado["administrativos"];

$cursos = $resultado["cursos"];

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Resultado Académico</title>

</head>

<body>

    <h1>
        Plataforma Académica
    </h1>


    
   

    <h2>
        Estudiantes registrados
    </h2>


    <?php foreach ($estudiantes as $estudiante): ?>

        <h3>
            <?php
            echo $estudiante->getNombre();
            ?>
        </h3>


        <p>
            <strong>Documento:</strong>

            <?php
            echo $estudiante->getDocumento();
            ?>
        </p>


        <p>
            <strong>Correo:</strong>

            <?php
            echo $estudiante->getCorreo();
            ?>
        </p>


        <h4>
            Cursos y calificaciones
        </h4>


        <?php foreach (
            $estudiante->getCursos()
            as $curso
        ): ?>

            <p>

                <strong>
                    Curso:
                </strong>

                <?php
                echo $curso->getNombre();
                ?>

            </p>


            <p>

                <strong>
                    Notas:
                </strong>

                <?php

                $notas =
                    $curso->getNotasEstudiante(
                        $estudiante->getDocumento()
                    );

                foreach ($notas as $nota) {

                    echo $nota . " ";
                }

                ?>

            </p>


            <p>

                <strong>
                    Promedio:
                </strong>

                <?php

                echo number_format(
                    $estudiante->calcularPromedio($curso),
                    2
                );

                ?>

            </p>

        <?php endforeach; ?>


        <hr>

    <?php endforeach; ?>


        

    <h2>
        Docentes registrados
    </h2>


    <?php foreach ($docentes as $docente): ?>

        <h3>
            <?php
            echo $docente->getNombre();
            ?>
        </h3>


        <p>

            <strong>
                Documento:
            </strong>

            <?php
            echo $docente->getDocumento();
            ?>

        </p>


        <p>

            <strong>
                Correo:
            </strong>

            <?php
            echo $docente->getCorreo();
            ?>

        </p>


        <p>

            <strong>
                Cursos que dicta:
            </strong>

        </p>


        <ul>

            <?php foreach (
                $docente->getCursos()
                as $curso
            ): ?>

                <li>

                    <?php
                    echo $curso->getNombre();
                    ?>

                </li>

            <?php endforeach; ?>

        </ul>


        <hr>

    <?php endforeach; ?>


    
    

    <h2>
        Personal administrativo
    </h2>


    <?php foreach (
        $administrativos
        as $administrativo
    ): ?>

        <h3>

            <?php
            echo $administrativo->getNombre();
            ?>

        </h3>


        <p>

            <strong>
                Documento:
            </strong>

            <?php
            echo $administrativo->getDocumento();
            ?>

        </p>


        <p>

            <strong>
                Correo:
            </strong>

            <?php
            echo $administrativo->getCorreo();
            ?>

        </p>


        <p>

            <?php
            echo $administrativo->gestionarProceso();
            ?>

        </p>


        <hr>

    <?php endforeach; ?>


    
   

    <h2>
        Cursos registrados
    </h2>


    <?php foreach ($cursos as $curso): ?>

        <h3>

            <?php
            echo $curso->getNombre();
            ?>

        </h3>


        <p>

            <strong>
                Docente:
            </strong>

            <?php

            if ($curso->getDocente() != null) {

                echo
                    $curso
                    ->getDocente()
                    ->getNombre();

            } else {

                echo "Sin docente asignado";
            }

            ?>

        </p>


        <p>

            <strong>
                Estudiantes inscritos:
            </strong>

        </p>


        <ul>

            <?php foreach (
                $curso->getEstudiantes()
                as $estudiante
            ): ?>

                <li>

                    <?php
                    echo $estudiante->getNombre();
                    ?>

                </li>

            <?php endforeach; ?>

        </ul>


        <hr>

    <?php endforeach; ?>


    
    

    <h2>
        Total de personas registradas
    </h2>


    <p>

        <?php
        echo Persona::getTotalPersonas();
        ?>

    </p>


    <br>


    <a href="../index.php">
        Registrar nuevamente
    </a>

</body>

</html>