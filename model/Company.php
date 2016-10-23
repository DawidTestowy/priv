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
    public $activities;

    function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->activities = new ArrayObject(array());
    }

    public function add(Activity $activity) {
        $this->activities->append($activity);
        $activity->setCompany($this);
    }

    public function getInfo() {
        return $this->name;
    }

    public function findActivities() {
        $result = $this->activities->getIterator();
        return $result;
    }

}