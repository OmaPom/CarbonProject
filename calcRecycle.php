<?php
$emission = 0;

//Recieve Data from html
$often = $_POST["often"];
$recycle = $_POST["recycle"];
//Select Food Type to calculate
if ($reycle == 1) {
    //recycle
    switch ($often) {
        case "1":    //All materials locally recyclable
            $emission = -0.5;
            break;
        case "2":    //Some of our waste
            $emission = -0.2;
            break;
        case "3":    //Not much
            $emission = 0;
            break;
    }
} else {
    //compost food scraps and yard trimming
    switch ($often) {
       case "1":    //Whenever possible
            $emission = -0.2;
            break;
        case "2":   //Sometimes
            $emission = -0.1;
            break;
        case "3":   //Rarely
            $emission = 0;
            break;
    }
}
//Return result
echo round($emission, 5);
?>
