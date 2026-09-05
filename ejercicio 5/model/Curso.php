<?php

class Curso
{
    private string $nombre;
    private ?Docente $docente;
    private array $estudiantes;
    private array $notas;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $this->docente = null;
        $this->estudiantes = [];
        $this->notas = [];
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function asignarDocente(Docente $docente): void
    {
        $this->docente = $docente;
    }

    public function getDocente(): ?Docente
    {
        return $this->docente;
    }

    public function registrarEstudiante(
        Estudiante $estudiante
    ): void {

        $this->estudiantes[] = $estudiante;

        $this->notas[$estudiante->getDocumento()] = [];
    }

    public function getEstudiantes(): array
    {
        return $this->estudiantes;
    }

    public function agregarNotaEstudiante(
        string $documento,
        float $nota
    ): void {

        if ($nota >= 0 && $nota <= 5) {

            $this->notas[$documento][] = $nota;
        }
    }

    public function getNotasEstudiante(
        string $documento
    ): array {

        if (isset($this->notas[$documento])) {
            return $this->notas[$documento];
        }

        return [];
    }
}