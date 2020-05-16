<?php

namespace Numeros;

class Fraccion implements Numero {

    private $numerador;
    private $denominador;

    public function __construct($numerador, $denominador) {
        $this->numerador = $numerador;
        $this->denominador = $denominador;
    }

    public function sumar($otro)
    {
        // TODO: Implement sumar() method.
    }

    public function valor(): String
    {
        // TODO: Implement valor() method.
    }
}
