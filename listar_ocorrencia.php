<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

try {
    $pdo = new PDO("mysql:host=localhost;dbname=gestaofix;charset=utf8", "root", "");
    $stmt = $pdo->query("SELECT data_hora, local FROM ocorrencia ORDER BY id DESC");
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultados);
} catch (PDOException $e) {
    echo json_encode([]);
}