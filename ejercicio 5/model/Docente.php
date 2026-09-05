<?php

require_once __DIR__ . '/Persona.php';

class Docente extends Persona
{
    private array $cursos;

    public function __construct(
        string $nombre,
        string $documento,
        string $correo
    ) {
        parent::__construct(
            $nombre,
            $documento,
            $correo
        );

        $this->cursos = [];
    }

    public function asignarCurso(Curso $curso): void
    {
        $this->cursos[] = $curso;

        $curso->asignarDocente($this);
    }

    public function getCursos(): array
    {
        return $this->cursos;
    }

    public function registrarNota(
        Estudiante $estudiante,
        Curso $curso,
        float $nota
    ): void {

        $estudiante->agregarNota(
            $curso,
            $nota
        );
    }

    public function mostrarInformacion(): string
    {
        return "Docente: " .
            $this->getNombre() .
            " | Documento: " .
            $this->getDocumento() .
            " | Correo: " .
            $this->getCorreo();
    }
}