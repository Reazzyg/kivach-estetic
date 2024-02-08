<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = file_get_contents('php://input');
    $decodedData = json_decode($postData, true);

    if ($decodedData) {
        $jsonFilePath = 'json/new.json'; // Укажите путь к вашему JSON-файлу
    }
}


    