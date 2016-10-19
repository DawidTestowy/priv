<?php

/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-10-19
 * Time: 16:37
 */
include_once('ActivityGenerator.php');
class HtmlActivityGenerator extends ActivityGenerator
{
    private $type = 'html';

    public function generate($activities)
    {
        echo '<table border="1"><thead><th>DATA</th><th>TEMAT</th><th>FIRMA</th><th>TYP SPOTKANIA</th><th>STATUS</th><th>BISNESMAN</th></thead><tbody>';

        foreach ($activities as $tab) {
            echo $tab->asHtmlTableRow();
        }

        echo '</tbody></table>';
    }

    public function getType()
    {
        return $this->type;
    }

}