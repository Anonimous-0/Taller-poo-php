<?php

class Cita
{

    private int $num;
    private int $tipo;
    private float $tarifa;
    private float $valorFinal;

    public function __construct(int $numero, int $tipo, float $tarifa)
    {
        $this->num = $numero;
        $this->tipo = $tipo;
        $this->tarifa = $tarifa;
        $this->valorFinal = 0;
    }

    public function getNumero()
    {
        return $this->num;
    }

    public function getTipo()
    {
        if ($this->tipo >= 1 and $this->tipo <= 3) {
            return "General";
        } else {
            return "Especialista";
        }
    }

    public function getTarifa()
    {
        return $this->tarifa;
    }


    public function calcularValorFinal()
    {
        if ($this->getTipo() == "General") {
            $this->valorFinal = $this->tarifa * 0.5;
        } else {
            $this->valorFinal = $this->tarifa * 1.5;
        }

        return $this->valorFinal;
    }
}
