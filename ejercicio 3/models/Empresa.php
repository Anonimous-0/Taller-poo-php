<?php 


class Empresa extends Cliente 
{
    private string $nit;
    private string $representante;


    public function __construct(string $nit, string $nombre, string $representante)
    {
        parent::__construct($nombre);
        $this->nit = $nit;
        $this->representante = $representante;
    }

    public function obtenerIdentificacion(): string
    {
        return $this->nit;
    }

    public function obtenerRepresentante(): string
    {
        return $this->representante;
    }

    public function cambiarRepresentante(string $representante): string
    {
        $this->representante = $representante;

        return $this->representante;
    }
}