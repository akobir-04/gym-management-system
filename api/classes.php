<?php
// REST API Endpoint for Gym Classes (Supports GET list & GET single item details by id)
header("Content-Type: application/json; charset=UTF-8");

$dataFile = __DIR__ . "/../data/classes.json";
$classes = file_exists($dataFile) ? (json_decode(file_get_contents($dataFile), true) ?? []) : [];
$id = $_GET["id"] ?? null;

if ($id !== null) {
    foreach ($classes as $gymClass) {
        if ((string)$gymClass["id"] === (string)$id) {
            echo json_encode($gymClass);
            exit;
        }
    }
    http_response_code(404);
    echo json_encode(["error" => "Class not found"]);
    exit;
}

echo json_encode($classes);
