<?php

require_once __DIR__ . '/../model/Pelicula.php';
require_once __DIR__ . '/../model/PlataformaStreaming.php';

class PeliculaController
{
    public function procesar(array $datos)
    {
        $plataforma = new PlataformaStreaming();

        $cantidad = (int) $datos["cantidad"];

        for ($i = 1; $i <= $cantidad; $i++) {

            $titulo = trim($datos["titulo"][$i]);

            $genero = trim($datos["genero"][$i]);

            $horas = (float) $datos["duracion"][$i];

            $clasificacion = trim($datos["clasificacion"][$i]);

            $calificacion = (float) $datos["calificacion"][$i];



            if ($horas <= 0) {

                echo "<h2>Error</h2>";

                echo "<p>
                    La duración de la película "
                    . $i .
                    " debe ser mayor que 0.
                </p>";

                exit;
            }



            if ($calificacion < 1 || $calificacion > 5) {

                echo "<h2>Error</h2>";

                echo "<p>
                    La calificación de la película "
                    . $i .
                    " debe estar entre 1 y 5.
                </p>";

                exit;
            }



            $duracionMinutos =
                Pelicula::convertirHorasAMinutos($horas);



            $pelicula = new Pelicula(
                $titulo,
                $genero,
                $duracionMinutos,
                $clasificacion,
                $calificacion
            );



            $plataforma->agregarPelicula($pelicula);
        }

        return $plataforma;
    }
}