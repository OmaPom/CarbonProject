<?php
//Recieve Data from html
$km = $_POST["Km"];
$times = $_POST["times"];
$vehicleType = $_POST["vehicleType"];
//$vehicleType = "Bus";

//Select Vehicle Type to calculate 
switch ($vehicleType){
	case "Bus":
	//Bus from thailand green house gas management
		$emission = $km*(0.02/1000)*$times*30;		
		break;
	case "PCar":
	//Private Car from thailand green house gas management
		$emission = $km*(0.13/1000)*$times*30;
		break;
	case "Taxi":
	//Taxi from thailand green house gas management
		$emission = $km*(0.11/1000)*$times*30;
		break;
	case "Moto":
	//Motocycle from thailand green house gas management
		$emission = $km*(0.05/1000)*$times*30;
		break;
	case "Van":
		$emission = $km*(0.30/1000)*$times;
		break;
	case "Rail":
		$emission = (($km/41.986)*20.88*2.7)/2204.6*$times;
		break;
	case "Train":
	//Train from www.carbonfootprint.com
		$emission = $km*(0.02/1000)*$times*30;
		break;
	case "Subway":
	//Subway from www.carbonfootprint.com
		$emission = $km*(0.08/1000)*$times*30;
		break;
	case "Plane":
	//Airplane 
		$emission = (($km/41.986)*20.88*2.7)/2204.6*$times;
		break;
}
//Return result
echo round($emission,5);
?>
