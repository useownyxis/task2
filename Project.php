<?php

require_once "FixedPaymentPeople.php";
require_once "HourlyPaymentPeople.php";

$projectX = array();

$designer = new FixedPaymentPeople("first", "designer", 3000);
$senior = new HourlyPaymentPeople("second", "senior", 10, 60);
$firstMiddle = new HourlyPaymentPeople("third", "middle", 1000, 3*180);
$secondMiddle = new HourlyPaymentPeople("forth", "middle", 1000, 3*180);
$typesetter = new HourlyPaymentPeople("fifth", "typesetter", 5, 120);

array_push($projectX, $designer, $senior, $firstMiddle, $secondMiddle, $typesetter);

$costOfProject = 0;

/**
 * @var AbstractPeople $person
 */

foreach ($projectX as $person){
    $costOfProject += $person->getPayment();
}
echo "Cost is ".$costOfProject;