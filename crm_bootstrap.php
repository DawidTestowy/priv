<?php
/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-09-26
 * Time: 16:27
 */

include_once 'model/Activity.php';
include_once 'model/Company.php';
include_once 'model/Salesman.php';

$salesman = new Salesman(1,"Brunon Nosek");
$salesmanTwo = new Salesman(2,"Zenek Kowalski");


$company = new Company(1, "Borsukowo Z.O.O");
$companyTwo = new Company(2, "Kurkowo Z.O.O");
$companyThree = new Company(3, "Zukowo Z.O.O");

$activitys = array(
    new Activity(1,'jajka','2016-09-26',$salesman->getInfo(),$company->getInfo(),ActivityType::PHONE,ActivityStatus::IN_PROGRESS,null),
    new Activity(2,'koszyki','2016-10-22',$salesmanTwo->getInfo(),$companyTwo->getInfo(),ActivityType::EMAIL,ActivityStatus::CLOSED,'fajny misio')
);

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
    <?php

    foreach($activitys as $tab) {
        $tab->getInfo();
    }
    ?>

    </tr>
    </tbody>
</table>
