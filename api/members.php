<?php
// REST API Endpoint for Gym Members (Supports GET list, GET single by id, POST, PUT, DELETE)
header("Content-Type: application/json; charset=UTF-8");

$dataFile = __DIR__ . "/../data/members.json";
if (!file_exists($dataFile)) {
    file_put_contents($dataFile, json_encode([], JSON_PRETTY_PRINT));
}

$members = json_decode(file_get_contents($dataFile), true) ?? [];
$method = $_SERVER["REQUEST_METHOD"];
$id = $_GET["id"] ?? null;

switch ($method) {
    case "GET":
        if ($id !== null) {
            foreach ($members as $member) {
                if ((string)$member["id"] === (string)$id) {
                    echo json_encode($member);
                    exit;
                }
            }
            http_response_code(404);
            echo json_encode(["error" => "Member not found"]);
            exit;
        }
        echo json_encode($members);
        break;

    case "POST":
        $input = json_decode(file_get_contents("php://input"), true);
        if (empty($input["name"]) || empty($input["email"]) || empty($input["plan"])) {
            http_response_code(400);
            echo json_encode(["error" => "Name, email, and plan are required."]);
            exit;
        }
        $newMember = [
            "id" => uniqid("mem_"),
            "name" => trim($input["name"]),
            "email" => trim($input["email"]),
            "plan" => $input["plan"],
            "status" => $input["status"] ?? "Active",
            "joinedDate" => date("Y-m-d")
        ];
        $members[] = $newMember;
        file_put_contents($dataFile, json_encode($members, JSON_PRETTY_PRINT));
        http_response_code(201);
        echo json_encode($newMember);
        break;

    case "PUT":
        if ($id === null) {
            http_response_code(400);
            echo json_encode(["error" => "Member ID is required for update."]);
            exit;
        }
        $input = json_decode(file_get_contents("php://input"), true);
        foreach ($members as &$member) {
            if ((string)$member["id"] === (string)$id) {
                $member["name"] = trim($input["name"] ?? $member["name"]);
                $member["email"] = trim($input["email"] ?? $member["email"]);
                $member["plan"] = $input["plan"] ?? $member["plan"];
                $member["status"] = $input["status"] ?? $member["status"];
                file_put_contents($dataFile, json_encode($members, JSON_PRETTY_PRINT));
                echo json_encode($member);
                exit;
            }
        }
        http_response_code(404);
        echo json_encode(["error" => "Member not found."]);
        break;

    case "DELETE":
        if ($id === null) {
            http_response_code(400);
            echo json_encode(["error" => "Member ID is required for deletion."]);
            exit;
        }
        $initialCount = count($members);
        $members = array_values(array_filter($members, fn($m) => (string)$m["id"] !== (string)$id));
        if (count($members) === $initialCount) {
            http_response_code(404);
            echo json_encode(["error" => "Member not found."]);
            exit;
        }
        file_put_contents($dataFile, json_encode($members, JSON_PRETTY_PRINT));
        echo json_encode(["message" => "Member deleted successfully."]);
        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Method not allowed."]);
}
