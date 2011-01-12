<?php
//Recieve Data from html
$kg = 1;
$kg = $_POST["_amount"];
$times = $_POST["_amount"];
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
		$emission = $kg*($factor/1000)*$times;
		break;
	case "garlice":
	//garlice from CFP_Guideline
		$factor = 0.1670;
		$emission = $kg*($factor/1000)*$times;
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
        case "carot":
	//carot from xls
		$factor = 0.09859;
		$emission = $kg*($factor/1000)*$times;
		break;
        case "corn":
	//corn from xls
		$factor = 0.0753;
		$emission = $kg*($factor/1000)*$times;
		break;
        case "corn":
	//corn from xls
		$factor = 0.0753;
		$emission = $kg*($factor/1000)*$times;
		break;
         case "brinjaul_group":
	//brinjaul_group from xls
		$factor = 0.3496;
		$emission = $kg*($factor/1000)*$times;
		break;
         case "hamberger":
	//brinjaul_group from xls
		$factor = 5.18;
		$emission = $kg*($factor/1000)*$times;
		break;
}
//Return result
echo round($emission,5);
?>
