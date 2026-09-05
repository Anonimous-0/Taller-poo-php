<?php

require_once __DIR__ . '/Pelicula.php';

class plataformaStreaming
{
    private array $pelicula;

    public function __construct()
    {
        $this->pelicula = [];
    }

    public function agregarPelicula(Pelicula $pelicula): void
    {
        $this->pelicula[] = $pelicula;
    }

    public function obtenerPeliculas(): array
    {
        return $this->pelicula;
    }

    public function calcularPromedio(): float
    {
        if (count($this->pelicula) == 0) {
            return 0;
        }

        $suma = 0;

        foreach ($this->pelicula as $pelicula) {
            $suma += $pelicula->getCalificacion();
        }

        return $suma / count($this->pelicula);
    }

    public function obtenerRecomendadas(): array
    {
        $recomendadas = [];

        foreach ($this->pelicula as $pelicula) {

            if ($pelicula->esRecomendada()) {
                $recomendadas[] = $pelicula;
            }
        }

        return $recomendadas;
    }
}