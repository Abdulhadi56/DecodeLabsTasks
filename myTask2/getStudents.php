<?php

header("Content-Type: application/json");

$file = "../data/students.json";

$data = file_get_contents($file);

echo $data;

?>