<?php

require_once __DIR__ . '/Persona.php';

class Estudiante extends Persona
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

    public function inscribirCurso(Curso $curso): void
    {
        $this->cursos[] = $curso;
    }

    public function getCursos(): array
    {
        return $this->cursos;
    }

    public function agregarNota(
        Curso $curso,
        float $nota
    ): void {

        $curso->agregarNotaEstudiante(
            $this->getDocumento(),
            $nota
        );
    }

    public function calcularPromedio(
        Curso $curso
    ): float {

        $notas = $curso->getNotasEstudiante(
            $this->getDocumento()
        );

        if (count($notas) == 0) {
            return 0;
        }

        $suma = 0;

        foreach ($notas as $nota) {
            $suma += $nota;
        }

        return $suma / count($notas);
    }

    public function mostrarInformacion(): string
    {
        return "Estudiante: " .
            $this->getNombre() .
            " | Documento: " .
            $this->getDocumento() .
            " | Correo: " .
            $this->getCorreo();
    }
}