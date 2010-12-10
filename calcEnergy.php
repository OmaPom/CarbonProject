<?php
//Recieve Data from html
$watt = $_POST["watt"];
$amount = $_POST["amount"];
$times = $_POST["times"];

//Calculate Carbon emission
$emission = (($watt/1000)*3651*($amount/24)*$times*1.486)/2204.6;

//Return result
echo round($emission,5);
?>
