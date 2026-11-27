<?php
header('Content-Type: application/json; charset=utf-8');

$dataFile = __DIR__ . '/../data/classes.json';

if (!file_exists($dataFile)) {
    http_response_code(404);
    echo json_encode(['error' => 'Classes data file not found']);
    exit;
}

$raw = file_get_contents($dataFile);
$classes = json_decode($raw, true);

if (!is_array($classes)) {
    http_response_code(500);
    echo json_encode(['error' => 'Invalid JSON in classes data']);
    exit;
}

if (isset($_GET['id']) && $_GET['id'] !== '') {
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

    if ($id === false || $id <= 0) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid class ID']);
        exit;
    }

    foreach ($classes as $gymClass) {
        if ((int)($gymClass['id'] ?? 0) === $id) {
            echo json_encode($gymClass);
            exit;
        }
    }

    http_response_code(404);
    echo json_encode(['error' => 'Class not found']);
    exit;
}

echo json_encode($classes);