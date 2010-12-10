<?php
//Recieve Data from html
$kg = 1;
$times = $_POST["Rice_amount"];
$foodType = $_POST["foodType"];

//Select Food Type to calculate 
switch ($foodType){	
	case "rice":
	//rice from CFP_Guideline
		$factor = 5.0900;
		$emission = $kg*($factor/1000)*$times;
		break;
	case "pineapple":
	//pineapple from CFP_Guideline
		$factor = 0.1000;
		$emission = $km*($factor/1000)*$times;
		break;
	case "garlice":
	//garlice from CFP_Guideline
		$factor = 0.1670;
		$emission = $km*($factor/1000)*$times;
		break;
	case "onion":
	//onion from CFP_Guideline
		$factor = 0.1722;
		$emission = $km*($factor/1000)*$times;
		break;
	case "chicken":
	//chicken from CFP_Guideline
		$factor = 0.703132;
		$emission = $kg*($factor/1000)*$times;		
		break;	
}
//Return result
echo round($emission,5);
?>
