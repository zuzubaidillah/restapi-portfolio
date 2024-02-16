<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Izinkan permintaan dari semua sumber lintas asal
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE'); // Izinkan metode GET, POST, PUT, DELETE
header('Access-Control-Allow-Headers: Content-Type, Authorization'); // Izinkan header Content-Type dan Authorization

$response = [
    "data" => [
        "id" => 1,
        "name" => "Lorem sit amet dolor saja.",
        "class" => 12
    ],
];

header('Content-Type: application/json');
http_response_code(200);
echo json_encode($response);
?>
