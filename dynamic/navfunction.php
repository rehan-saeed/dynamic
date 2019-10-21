<?php

function getnav(){
    global $conn;
$query= "SELECT * FROM navbar";
$result=mysqli_query($conn,$query);

$services = mysqli_fetch_all($result, MYSQLI_ASSOC);

$final_services = array();
foreach ($services as $service) {
    array_push($final_services, $service);
}
return $final_services;
}



?>