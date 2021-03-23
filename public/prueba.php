<?php 


$fecha = date("Y-m-d h:i:s");

$date = new DateTime();
$timeZone = $date->getTimezone();
echo $timeZone->getName();

echo $fecha;


?>