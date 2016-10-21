<?php
/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-10-21
 * Time: 17:43
 */

include_once('logic/Calculator.php');

$calculator = new Calculator();

try {
    echo $calculator->divide(400,2);
    echo $calculator->divide(400,0);
} catch (DivisionException $e) {
    echo "<h1 style='color: red'>{$e->getMessage()}</h1>";
} catch (Exception $generalException) {
    echo "<h2>Ogólny błąd systemu</h2>";
}
