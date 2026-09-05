<?php

require_once __DIR__ . '/../model/Persona.php';
require_once __DIR__ . '/../model/Estudiante.php';
require_once __DIR__ . '/../model/Docente.php';
require_once __DIR__ . '/../model/Administrativo.php';
require_once __DIR__ . '/../model/Curso.php';

class AcademicoController
{
    public function procesar(array $datos): array
    {
        $estudiantes = [];
        $docentes = [];
        $administrativos = [];
        $cursos = [];

        $cantidadEstudiantes =
            (int) $datos["cantidadEstudiantes"];

        $cantidadDocentes =
            (int) $datos["cantidadDocentes"];

        $cantidadAdministrativos =
            (int) $datos["cantidadAdministrativos"];

        
        
        
        for (
            $i = 1;
            $i <= $cantidadEstudiantes;
            $i++
        ) {

            $nombre =
                trim($datos["estudianteNombre"][$i]);

            $documento =
                trim($datos["estudianteDocumento"][$i]);

            $correo =
                trim($datos["estudianteCorreo"][$i]);


            if (!Persona::validarDocumento($documento)) {

                echo "<h2>Error</h2>";

                echo "<p>
                    El documento del estudiante "
                    . $i .
                    " debe contener únicamente números.
                </p>";

                exit;
            }


            $estudiante = new Estudiante(
                $nombre,
                $documento,
                $correo
            );


            if (!$estudiante->validarCorreo()) {

                echo "<h2>Error</h2>";

                echo "<p>
                    El correo del estudiante "
                    . $i .
                    " no es válido.
                </p>";

                exit;
            }


            $estudiantes[] = $estudiante;
        }


        


        for (
            $i = 1;
            $i <= $cantidadDocentes;
            $i++
        ) {

            $nombre =
                trim($datos["docenteNombre"][$i]);

            $documento =
                trim($datos["docenteDocumento"][$i]);

            $correo =
                trim($datos["docenteCorreo"][$i]);


            if (!Persona::validarDocumento($documento)) {

                echo "<h2>Error</h2>";

                echo "<p>
                    El documento del docente "
                    . $i .
                    " debe contener únicamente números.
                </p>";

                exit;
            }


            $docente = new Docente(
                $nombre,
                $documento,
                $correo
            );


            if (!$docente->validarCorreo()) {

                echo "<h2>Error</h2>";

                echo "<p>
                    El correo del docente "
                    . $i .
                    " no es válido.
                </p>";

                exit;
            }


            $docentes[] = $docente;
        }



        

        for (
            $i = 1;
            $i <= $cantidadAdministrativos;
            $i++
        ) {

            $nombre =
                trim($datos["administrativoNombre"][$i]);

            $documento =
                trim($datos["administrativoDocumento"][$i]);

            $correo =
                trim($datos["administrativoCorreo"][$i]);


            if (!Persona::validarDocumento($documento)) {

                echo "<h2>Error</h2>";

                echo "<p>
                    El documento del administrativo "
                    . $i .
                    " debe contener únicamente números.
                </p>";

                exit;
            }


            $administrativo = new Administrativo(
                $nombre,
                $documento,
                $correo
            );


            if (!$administrativo->validarCorreo()) {

                echo "<h2>Error</h2>";

                echo "<p>
                    El correo del administrativo "
                    . $i .
                    " no es válido.
                </p>";

                exit;
            }


            $administrativos[] = $administrativo;
        }


        
    
        

        $cantidadCursos =
            (int) $datos["cantidadCursos"];


        for (
            $i = 1;
            $i <= $cantidadCursos;
            $i++
        ) {

            $nombreCurso =
                trim($datos["cursoNombre"][$i]);

            $indiceDocente =
                (int) $datos["cursoDocente"][$i];

            $curso = new Curso($nombreCurso);


            if (
                isset($docentes[$indiceDocente - 1])
            ) {

                $docente =
                    $docentes[$indiceDocente - 1];

                $docente->asignarCurso($curso);
            }


            

            $cantidadEstudiantesCurso =
                count($estudiantes);


            for (
                $j = 1;
                $j <= $cantidadEstudiantesCurso;
                $j++
            ) {

                $estudiante =
                    $estudiantes[$j - 1];

                $curso->registrarEstudiante(
                    $estudiante
                );

                $estudiante->inscribirCurso(
                    $curso
                );


               

                $nota1 =
                    (float) $datos["notas"][$i][$j][1];

                $nota2 =
                    (float) $datos["notas"][$i][$j][2];

                $nota3 =
                    (float) $datos["notas"][$i][$j][3];


                $docente->registrarNota(
                    $estudiante,
                    $curso,
                    $nota1
                );

                $docente->registrarNota(
                    $estudiante,
                    $curso,
                    $nota2
                );

                $docente->registrarNota(
                    $estudiante,
                    $curso,
                    $nota3
                );
            }


            $cursos[] = $curso;
        }


        return [
            "estudiantes" => $estudiantes,
            "docentes" => $docentes,
            "administrativos" => $administrativos,
            "cursos" => $cursos
        ];
    }
}