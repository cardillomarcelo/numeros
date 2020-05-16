<?php

namespace Numeros;

use phpDocumentor\Reflection\Types\String_;

interface Numero {
  public function sumar($otro);
  public function valor(): String;
}