<?php

class Bus
{

    private string $plca;
    private int $capacidadPasajeros;
    private float $precioPasaje;
    private int $pasajerosActuales;
    private int $totalPasajeros;




    public function __construct(string $plca, int $capacidadPasajeros, float $precioPasaje)
    {
        $this->plca = $plca;
        $this->capacidadPasajeros = $capacidadPasajeros;
        $this->precioPasaje = $precioPasaje;
        $this->pasajerosActuales = 0;
        $this->totalPasajeros = 0;
    }

    public function getPlaca(): string
    {
        return $this->plca;
    }


    public function getCapacidadPasajeros(): int
    {
        return $this->capacidadPasajeros;
    }


    public function getPrecioPasaje(): float
    {
        return $this->precioPasaje;
    }

    public function getPasajerosActuales(): int
    {
        return $this->pasajerosActuales;
    }

    public function subirPasajeros(int $pasajeros)
    {
        if (($this->pasajerosActuales + $pasajeros) <= $this->capacidadPasajeros) {
            $this->pasajerosActuales += $pasajeros;
            $this->totalPasajeros += $pasajeros;
        }
    }


    public function bajarPasajeros(int $pasajeros)
    {
        if ($pasajeros <= $this->pasajerosActuales) {
            $this->pasajerosActuales -= $pasajeros;
        }
    }


    public function getDineroAcumulado(): float
    {
        return $this->totalPasajeros * $this->precioPasaje;
    }
}
