<?php
/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-09-26
 * Time: 16:27
 */

include_once 'model/Activity.php';

$activity = new Activity(1,'jajka','2016-09-26','Pietrek','Kurak-Z.O.O',ActivityType::PHONE,ActivityStatus::IN_PROGRESS,null);

?>

<table border="1">
    <thead>
    <th>ID</th>
    <th>TEMAT</th>
    <th>CZAS</th>
    <th>BISNESMAN</th>
    <th>FIRMA</th>
    <th>TYP SPOTKANIA</th>
    <th>STATUS</th>
    <th>NOTATKA</th>
    </thead>
    <tbody>
    <tr>
    <?php $activity->getInfo() ;?>
    </tr>
    </tbody>
</table>
