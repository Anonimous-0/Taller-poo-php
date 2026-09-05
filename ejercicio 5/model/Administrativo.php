<?php

require_once __DIR__ . '/Persona.php';

class Administrativo extends Persona
{
    public function gestionarProceso(): string
    {
        return "El personal administrativo gestiona procesos académicos.";
    }

    public function mostrarInformacion(): string
    {
        return "Personal administrativo: " .
            $this->getNombre() .
            " | Documento: " .
            $this->getDocumento() .
            " | Correo: " .
            $this->getCorreo();
    }
}