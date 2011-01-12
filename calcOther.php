<?php

$emission = 0;

//Recieve Data from html
$often = $_POST["often"];
$other = $_POST["other"];
//Select Food Type to calculate
if ($other == 1) {
    //Fashion
     switch ($often) {
        case "1":   //I regularly shop to have the lastest fashions
            $emission = 0.02;
            break;
        case "2":   //I buy new clothes when I need them
            $emission = 0.01;
            break;
        case "3":   //I only buy second hand clothes
            $emission = 0;
            break;
    }
} else if ($other == 2) {
    //Packaging
    switch ($often) {
        case "1":   //I don't buy anything which has packaging around it
            $emission = 0;
            break;
        case "2":   //I only buy things with very little packging
            $emission = 0.08;
            break;
        case "3":   //I try and buy things with little packging
            $emission = 0.16;
            break;
        case "4":   //I only buy things which are nicely packaged
            $emission = 0.32;
            break;
    }
} else {
    //Finance and other services
    switch ($often) {
        case "1":    //I don't even have a bank account
            $emission = 0;
            break;
        case "2":   //I use the standard range of financial services
            $emission = 0.40;
            break;          
    }
}
//Return result
echo round($emission, 5);
?>
