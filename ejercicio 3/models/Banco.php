<?php

require_once __DIR__ . '/Cliente.php';

class Banco
{
    private string $nombre;
    private array $clientes;
    private int $numeroDeClientes;

    public function __construct(string $nom)
    {
        $this->nombre = $nom;
        $this->clientes = [];
        $this->numeroDeClientes = 0;
    }

    public function obtenerNombre(): string
    {
        return $this->nombre;
    }

    public function cambiarNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function adCliente(Cliente $clie): void
    {
        $this->clientes[] = $clie;
        $this->numeroDeClientes++;
    }

    public function obtNumeroClientes(): int
    {
        return $this->numeroDeClientes;
    }

    public function obtCliente(int $posicion): ?Cliente
    {
        if (isset($this->clientes[$posicion])) {
            return $this->clientes[$posicion];
        }

        return null;
    }

    public function obtClientes(): array
    {
        return $this->clientes;
    }
}