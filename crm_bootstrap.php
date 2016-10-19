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

include_once('logic/HtmlHtmlActivityGenerator.php');
include_once('logic/XmlActivityGenerator.php');

$salesman = new Salesman(1,"Brunon Nosek");
$salesmanTwo = new Salesman(2,"Zenek Kowalski");
$salesmanThree = new Salesman(3,"Zdzisław Pakman");

$company = new Company(1, "Borsukowo Z.O.O");
$companyTwo = new Company(2, "Kurkowo Z.O.O");
$companyThree = new Company(3, "Zukowo Z.O.O");

$activities = array(
    new Activity(1,'jajka','2016-09-26',$salesman,$company,ActivityType::PHONE,ActivityStatus::IN_PROGRESS,null),
    new Activity(2,'koszyki','2016-10-22',$salesmanTwo,$companyTwo,ActivityType::EMAIL,ActivityStatus::CLOSED,'fajny misio'),
    new Activity(3,'owce','2016-10-09',$salesmanThree,$companyThree,ActivityType::EMAIL,ActivityStatus::CLOSED,null),
    new Activity(4,'makaron','2016-10-12',$salesmanTwo,$companyTwo,ActivityType::MEETING,ActivityStatus::OPEN,'fajny misio')
);



$activityGeneratorXML = new XmlHtmlActivityGenerator();

echo $activityGeneratorXML->generate($activities);

