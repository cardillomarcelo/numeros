<?php

namespace Numeros;

class Entero implements Numero {

    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function sumar($otro)
    {
        // TODO: Implement sumar() method.
    }

    public function valor(): string
    {
        // TODO: Implement valor() method.
    }
}