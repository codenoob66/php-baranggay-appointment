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

echo json_encode(array_keys($service_map, $arrFromDb["Service_id"]));