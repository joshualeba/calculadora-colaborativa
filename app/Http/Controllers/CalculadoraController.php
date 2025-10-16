<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CalculadoraController extends Controller
{
    public function suma($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return "El resultado de la suma es: " . $resultado;
    }

    public function multiplicacion($num1, $num2)
    {
        $resultado = $num1 * $num2;
        return "El resultado de la multiplicación es: " . $resultado;
    }

}
    public function resta($num1, $num2)
    {
        $resultado = $num1 - $num2;
        return "El resultado de la resta es: " . $resultado;
    }


}
