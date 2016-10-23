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

include_once('logic/HtmlActivityGenerator.php');
include_once('logic/XmlActivityGenerator.php');

$salesman = new Salesman(1,"Brunon Nosek");
$salesmanTwo = new Salesman(2,"Zenek Kowalski");
$salesmanThree = new Salesman(3,"Zdzisław Pakman");

$company = new Company(1, "Borsukowo Z.O.O");
$company->add(new Activity(1,'jajka','2016-09-26',$salesman,ActivityType::PHONE,ActivityStatus::IN_PROGRESS,null));
$companyTwo = new Company(2, "Kurkowo Z.O.O");
$companyTwo->add(new Activity(2,'koszyki','2016-10-22',$salesmanTwo,ActivityType::EMAIL,ActivityStatus::CLOSED,'fajny misio'));
$companyTwo->add(new Activity(4,'makaron','2016-10-12',$salesmanTwo,ActivityType::MEETING,ActivityStatus::OPEN,'fajny misio'));
$companyThree = new Company(3, "Zukowo Z.O.O");
$companyThree->add(new Activity(3,'owce','2016-10-09',$salesmanThree,ActivityType::EMAIL,ActivityStatus::CLOSED,null));

$activitiesIterator = new AppendIterator();

$activitiesIterator->append($company->findActivities());
$activitiesIterator->append($companyTwo->findActivities());
$activitiesIterator->append($companyThree->findActivities());

function sortActivitiesByCompanyName($activity1, $activity2) {
    return -strcmp($activity1->getCompany()->name,$activity2->getCompany()->name);
}

$active = new ArrayObject(iterator_to_array($activitiesIterator,false));


$active->uasort('sortActivitiesByCompanyName');

$activityGenerator = new HtmlActivityGenerator();


echo $activityGenerator->generate($active);

