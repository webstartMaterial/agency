<?php
require_once '../connexion.php';

// Récupère les données JSON du front
$data = json_decode(file_get_contents('php://input'), true);
$name = trim($data['name'] ?? '');
$email = trim($data['email'] ?? '');
$phone = trim($data['phone'] ?? '');

if (!$email || !$name || !$phone) {
    http_response_code(400);
    echo json_encode(['error' => 'Nom, email et téléphone requis']);
    exit;
}

// Cherche une conversation existante
$stmt = $pdo->prepare("SELECT id FROM conversations WHERE email = ?");
$stmt->execute([$email]);
$conversation = $stmt->fetch();

if ($conversation) {
    $conversationId = $conversation['id'];
    // Si la conversation existe et est archivée, on la remet en active
    $pdo->prepare("UPDATE conversations SET archived = 0 WHERE id = ?")->execute([$conversationId]);

} else {
    // Crée une nouvelle conversation
    $stmt = $pdo->prepare("INSERT INTO conversations (name, email, phone, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->execute([$name, $email, $phone]);
    $conversationId = $pdo->lastInsertId();
}

echo json_encode(['conversation_id' => $conversationId]);
