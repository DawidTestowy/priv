<?php

/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-10-21
 * Time: 17:44
 */
include_once('logic/CalculatorException.php');

class Calculator
{
    function divide($firstNumber, $secondNumber)
    {
        if($secondNumber == 0) {
            throw new DivisionException('Debilu, nie dziel przez 0');
        }
        return $firstNumber / $secondNumber;

    }
}