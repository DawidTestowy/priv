<?php

/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-10-19
 * Time: 17:21
 */
abstract class ActivityGenerator
{
    abstract function generate($activities);

    abstract function getType();

}