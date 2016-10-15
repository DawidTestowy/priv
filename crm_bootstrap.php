<?php
/**
 * Created by PhpStorm.
 * User: dlange
 * Date: 2016-09-26
 * Time: 16:27
 */

function __autoload($classname) {
    $filename = "model/". $classname .".php";
    include_once($filename);
}

$salesman = new Salesman(1,"Brunon Nosek");
$salesmanTwo = new Salesman(2,"Zenek Kowalski");
$salesmanThree = new Salesman(3,"Zdzisław Pakman");


$company = new Company(1, "Borsukowo Z.O.O");
$companyTwo = new Company(2, "Kurkowo Z.O.O");
$companyThree = new Company(3, "Zukowo Z.O.O");

$activitys = array(
    new Activity(1,'jajka','2016-09-26',$salesman,$company,ActivityType::PHONE,ActivityStatus::IN_PROGRESS,null),
    new Activity(2,'koszyki','2016-10-22',$salesmanTwo,$companyTwo,ActivityType::EMAIL,ActivityStatus::CLOSED,'fajny misio'),
    new Activity(3,'owce','2016-10-09',$salesmanThree,$companyThree,ActivityType::EMAIL,ActivityStatus::CLOSED,null),
    new Activity(4,'makaron','2016-10-12',$salesmanTwo,$companyTwo,ActivityType::MEETING,ActivityStatus::OPEN,'fajny misio')
);


echo '<table border="1"><thead><th>DATA</th><th>TEMAT</th><th>FIRMA</th><th>TYP SPOTKANIA</th><th>STATUS</th><th>BISNESMAN</th></thead><tbody>';

foreach ($activitys as $tab) {
    echo $tab->asHtmlTableRow();
}

echo '</tbody></table>';

var_dump($activitys[0]);

$activity = clone $activitys[0];

var_dump($activity);
