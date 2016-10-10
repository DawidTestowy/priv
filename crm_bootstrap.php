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
$salesmanThre = new Salesman(3,"Zdzisław Pakman");


$company = new Company(1, "Borsukowo Z.O.O");
$companyTwo = new Company(2, "Kurkowo Z.O.O");
$companyThree = new Company(3, "Zukowo Z.O.O");

$activitys = array(
    new Activity(1,'jajka','2016-09-26',$salesman->getInfo(),$company->getInfo(),ActivityType::PHONE,ActivityStatus::IN_PROGRESS,null),
    new Activity(2,'koszyki','2016-10-22',$salesmanTwo->getInfo(),$companyTwo->getInfo(),ActivityType::EMAIL,ActivityStatus::CLOSED,'fajny misio'),
    new Activity(3,'owce','2016-10-09',$salesmanThre->getInfo(),$companyThree->getInfo(),ActivityType::EMAIL,ActivityStatus::CLOSED,null),
    new Activity(4,'makaron','2016-10-12',$salesmanTwo->getInfo(),$companyTwo->getInfo(),ActivityType::MEETING,ActivityStatus::OPEN,'fajny misio')
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
    <?php

    foreach($activitys as $tab) {
        $tab->getInfo();
    }
    ?>

    </tbody>
</table>
