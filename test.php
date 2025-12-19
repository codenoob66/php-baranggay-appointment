<?php

$service_map = [
    "Health" => 1,
    "Document-Services" => 2,
    "Public Affairs" => 3
];



$arrFromDb =  [
    "Client_id" => 19,
    "Service_id" => 1
];

$getServiceType = array_keys($service_map, $arrFromDb["Service_id"]);

unset($arrFromDb["Service_id"]);

$arrFromDb["Service_type"] = $getServiceType[0];
// var_dump($getServiceType);
// var_dump($arrFromDb);
print_r($arrFromDb);
echo json_encode($arrFromDb);
