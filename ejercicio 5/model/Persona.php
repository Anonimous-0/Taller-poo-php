<?php

abstract class Persona
{
    private string $nombre;
    private string $documento;
    private string $correo;


    private static int $totalPersonas = 0;

    public function __construct(
        string $nombre,
        string $documento,
        string $correo
    ) {
        $this->nombre = $nombre;
        $this->documento = $documento;
        $this->correo = $correo;

        self::$totalPersonas++;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getDocumento(): string
    {
        return $this->documento;
    }

    public function getCorreo(): string
    {
        return $this->correo;
    }

    public static function validarDocumento(string $documento): bool
    {
        return ctype_digit($documento);
    }

    public function validarCorreo(): bool
    {
        return filter_var($this->correo, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function getTotalPersonas(): int
    {
        return self::$totalPersonas;
    }

    abstract public function mostrarInformacion(): string;

}
