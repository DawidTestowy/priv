<?php

/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-10-19
 * Time: 16:45
 *
 */

include_once('ActivityGenerator.php');
class XmlActivityGenerator extends ActivityGenerator
{
    private $type = 'xml';

    public function generate($activitys)
    {
        $xml = "<activities>";

        foreach ($activitys as $activity) {
            $xml .= $activity->asXml();
            $xml .= "<br><br>";
        }
        $xml .= "</activities>";

        return $xml;
    }

    public function getType()
    {
        return $this->type;
    }
}