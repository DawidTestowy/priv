<?php
/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-10-21
 * Time: 17:43
 */

include_once('logic/Calculator.php');

function exceptionHandler($exception) {
// log into $file $exception->getTraceAsString

    ob_end_clean();
    header("Location: error.php");
    exit();
}

set_exception_handler("exceptionHandler");

$calculator = new Calculator();

    echo $calculator->divide(400,2);
    echo $calculator->divide(33,2);


