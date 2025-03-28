<?php
require_once '../connexion.php';

$convId = $_GET['conversation_id'] ?? null;
if (!$convId) {
    echo json_encode([]);
    exit;
}

$stmt = $pdo->prepare("SELECT sender, message, created_at FROM messages WHERE conversation_id = ? ORDER BY created_at ASC");
$stmt->execute([$convId]);
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));

