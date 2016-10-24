<?php
/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-10-23
 * Time: 14:40
 */

$indexFile = new SplFileObject('index.php');

echo "<pre>";
foreach($indexFile AS $row) {
    echo htmlspecialchars($row);
}

echo "</pre>";
