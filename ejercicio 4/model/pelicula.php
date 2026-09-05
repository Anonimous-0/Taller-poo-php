<?php

class Pelicula
{
    private string $titulo;
    private string $genero;
    private int $duracionMinutos;
    private string $clasificacion;
    private float $calificacion;

    private static int $totalPeliculas = 0;

    public function __construct(
        string $titulo,
        string $genero,
        int $duracionMinutos,
        string $clasificacion,
        float $calificacion
    ) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracionMinutos = $duracionMinutos;
        $this->clasificacion = $clasificacion;
        $this->calificacion = $calificacion;

        self::$totalPeliculas++;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function getDuracionMinutos(): int
    {
        return $this->duracionMinutos;
    }

    public function getClasificacion(): string
    {
        return $this->clasificacion;
    }

    public function getCalificacion(): float
    {
        return $this->calificacion;
    }

    public function setCalificacion(float $calificacion): void
    {
        if ($calificacion >= 1 && $calificacion <= 5) {
            $this->calificacion = $calificacion;
        }
    }

    public function esRecomendada(): bool
    {
        return $this->calificacion >= 4;
    }

    public static function convertirHorasAMinutos(float $horas): int
    {
        return (int) ($horas * 60);
    }

    public function mostrarInformacion(): string
    {
        if ($this->esRecomendada()) {
            $recomendada = "Sí";
        } else {
            $recomendada = "No";
        }

        return "Título: " . $this->titulo .
            " | Género: " . $this->genero .
            " | Duración: " . $this->duracionMinutos . " minutos" .
            " | Clasificación: " . $this->clasificacion .
            " | Calificación: " . $this->calificacion .
            " | Recomendada: " . $recomendada;
    }

    public static function getTotalPeliculas(): int
    {
        return self::$totalPeliculas;
    }
}