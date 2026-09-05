<?php

require_once __DIR__ . '/../model/Bus.php';


class BusController
{
    public function procesar($plca, $capacidadPasajeros, $precio, $subirPasajeros, $bajarPasajeros)
    {
        $bus = new Bus($plca, $capacidadPasajeros, $precio);

        $bus->subirPasajeros($subirPasajeros);
        $bus->bajarPasajeros($bajarPasajeros);

        return $bus;
    }
}