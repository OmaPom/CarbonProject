<?php
define('INCLUDE_CHECK', true);

require 'connect.php';
//require 'index.php';

session_name('cfLogin');
session_set_cookie_params(2 * 7 * 24 * 60 * 60);
session_start();

//get data from JS
$user_id = $_SESSION['id'];

//$user = "test";
$totalEmission = $_POST["totalEmission"];
$energyEmission = $_POST["energyEmission"];
$foodEmission = $_POST["foodEmission"];
$transportEmission = $_POST["transportEmission"];
$recycleEmission = $_POST["recycleEmission"];
$otherEmission = $_POST["otherEmission"];


// Those two files can be included only if INCLUDE_CHECK is defined
//$sql = "SELECT id FROM members WHERE usr = '$user_id'";
//$row = mysql_fetch_assoc(mysql_query($sql));
//echo $row['id'];
$addClient  = "INSERT INTO report(user_id,times,energy_c_emission,food_c_emission,transport_c_emission,recycle_c_emission,other_c_emission,total_c_emission) VALUES ('$user_id','4','$totalEmission','$energyEmission','$foodEmission','$energyEmission','$transportEmission','$recycleEmission','$otherEmission')";
    mysql_query($addClient) or die(mysql_error());
echo $user_id;
?>