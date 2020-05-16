<?php

namespace Numeros;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function test_suma_de_enteros() {
        $uno = new Entero(1);
        $dos = new Entero(2);

        $tres = $uno->sumar($dos);

        $this->assertEquals("3", $tres->valor());
    }

    public function test_suma_de_fracciones() {
        $unMedio = new Fraccion(1, 2);
        $tresCuartos = new Fraccion(3, 4);

        $cincoCuartos = $unMedio->sumar($tresCuartos);

        $this->assertEquals("5/4", $cincoCuartos->valor());
    }

    public function test_suma_mixta_1() {
        $uno = new Entero(1);
        $cincoQuintos = new Fraccion(5, 5);

        $dos = $uno->sumar($cincoQuintos);

        $this->assertEquals("2", $dos);
    }


    public function test_suma_mixta_2() {
        $cincoQuintos = new Fraccion(5, 5);
        $uno = new Entero(1);

        $dos = $cincoQuintos->sumar($uno);

        $this->assertEquals("2", $dos);
    }

}