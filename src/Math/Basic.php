<?php
namespace Projetux\Math;

class Basic
{
    /**
     * @return int|float
     */
    public function somar(int|float $numero, int|float $numero2)
    {
        return $numero + $numero2;
    }

    /**
     * @return int|float
     */

    public function subtrair(int|float $numero, int|float $numero2)
    {
        return $numero - $numero2;
    }
    
    public function multiplicar(int|float $numero, int|float $numero2)
    {
        return $numero * $numero2;
    }

    public function dividir(int|float $numero, int|float $numero2)
    {
        return $numero / $numero2;
    }

    public function raiz(int|float $numero, int|float $numero2)
    {
        return sqrt($numero);
    }

    public function potencia(int|float $numero, int|float $numero2)
    {
        return $numero * $numero;
    }

}