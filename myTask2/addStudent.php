<?php

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] != "POST") {

    echo json_encode([
        "status" => false,
        "message" => "Only POST allowed"
    ]);

    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');

if (empty($name) || empty($email)) {

    echo json_encode([
        "status" => false,
        "message" => "Name and Email required"
    ]);

    exit;
}

$file = "../data/students.json";

$students = json_decode(
    file_get_contents($file),
    true
);

$newStudent = [
    "id" => count($students) + 1,
    "name" => $name,
    "email" => $email
];

$students[] = $newStudent;

file_put_contents(
    $file,
    json_encode($students, JSON_PRETTY_PRINT)
);

echo json_encode([
    "status" => true,
    "message" => "Student Added",
    "data" => $newStudent
]);

?>