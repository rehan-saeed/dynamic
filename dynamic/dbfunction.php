<?php

function getDynamiccontent(){
    global $conn;
$query= "SELECT * FROM services";
$result=mysqli_query($conn,$query);

$services = mysqli_fetch_all($result, MYSQLI_ASSOC);

$final_services = array();
foreach ($services as $service) {
    array_push($final_services, $service);
}
return $final_services;
}


function getnav(){
    global $conn;
$query= "SELECT * FROM navbar";
$result=mysqli_query($conn,$query);

$navbars = mysqli_fetch_all($result, MYSQLI_ASSOC);

$final_navbars = array();
foreach ($navbars as $navbar) {
    array_push($final_navbars, $navbar);
}
return $final_navbars;
}


?>