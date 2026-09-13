<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = json_decode(file_get_contents("php://input"), true);
    $data_hora = $dados['data_hora'] ?? '';
    $local = $dados['local'] ?? '';

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=gestaofix;charset=utf8", "root", "");
        $stmt = $pdo->prepare("INSERT INTO ocorrencia (data_hora, local, id_categoria) VALUES (?, ?, 1)");
        $stmt->execute([$data_hora, $local]);
        echo json_encode(["status" => "sucesso"]);
    } catch (PDOException $e) {
        echo json_encode(["status" => "erro", "mensagem" => $e->getMessage()]);
    }
}