<?php

/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-09-26
 * Time: 17:51
 */
class Company {

    public $id;
    public $name;

    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getInfo() {
        return "Company: $this->id | $this->name";
    }

}