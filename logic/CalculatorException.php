<?php

/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-10-21
 * Time: 18:01
 */
class CalculatorException extends Exception {

    function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}

class DivisionException extends CalculatorException {

    function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}