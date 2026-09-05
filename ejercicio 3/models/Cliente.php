<?php

abstract class Cliente
{
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function obtenerNombre(): string
    {
        return $this->nombre;
    }

    public function cambiarNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    abstract public function obtenerIdentificacion(): string;
}