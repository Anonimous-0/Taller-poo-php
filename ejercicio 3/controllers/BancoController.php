<?php

require_once __DIR__ . '/../models/Banco.php';
require_once __DIR__ . '/../models/Persona.php';
require_once __DIR__ . '/../models/Empresa.php';

class BancoController
{
    public function procesar($datos): array
    {
        $banco = new Banco($datos["nombreBanco"]);

        $persona1 = new Persona(
            $datos["cedulaCliente"],
            $datos["nombreCliente"],
            (int) $datos["edadCliente"]
        );

        $persona2 = new Persona(
            $datos["cedulaCliente2"],
            $datos["nombreCliente2"],
            (int) $datos["edadCliente2"]
        );

        $empresa1 = new Empresa(
            $datos["nitEmpresa"],
            $datos["nombreEmpresa"],
            $datos["representanteEmpresa"]
        );

        $empresa2 = new Empresa(
            $datos["nitEmpresa2"],
            $datos["nombreEmpresa2"],
            $datos["representanteEmpresa2"]
        );

        $banco->adCliente($persona1);
        $banco->adCliente($persona2);
        $banco->adCliente($empresa1);
        $banco->adCliente($empresa2);

        // Obtener todos los clientes
        $clientes = $banco->obtClientes();

        // 1. Todos los nombres
        $todosLosNombres = [];

        foreach ($clientes as $cliente) {
            $todosLosNombres[] = $cliente->obtenerNombre();
        }

        $personas = [];

        foreach ($clientes as $cliente) {

            if ($cliente instanceof Persona) {

                $personas[] = [
                    "nombre" => $cliente->obtenerNombre(),
                    "cedula" => $cliente->obtenerIdentificacion()
                ];
            }
        }

        $empresas = [];

        foreach ($clientes as $cliente) {

            if ($cliente instanceof Empresa) {

                $empresas[] = [
                    "nombre" => $cliente->obtenerNombre(),
                    "representante" => $cliente->obtenerRepresentante()
                ];
            }
        }

        $menores = [];

        foreach ($clientes as $cliente) {

            if ($cliente instanceof Persona) {

                if ((int) $cliente->obtenerEdad() < 18) {
                    $menores[] = $cliente->obtenerNombre();
                }
            }
        }

        $masJoven = null;

        foreach ($clientes as $cliente) {

            if ($cliente instanceof Persona) {

                if (
                    $masJoven === null ||
                    (int) $cliente->obtenerEdad() < (int) $masJoven->obtenerEdad()
                ) {
                    $masJoven = $cliente;
                }
            }
        }

        $masViejo = null;

        foreach ($clientes as $cliente) {

            if ($cliente instanceof Persona) {

                if (
                    $masViejo === null ||
                    (int) $cliente->obtenerEdad() > (int) $masViejo->obtenerEdad()
                ) {
                    $masViejo = $cliente;
                }
            }
        }

        return [
            "banco" => $banco,
            "todosLosNombres" => $todosLosNombres,
            "personas" => $personas,
            "empresas" => $empresas,
            "menores" => $menores,
            "masJoven" => $masJoven,
            "masViejo" => $masViejo
        ];
    }
}