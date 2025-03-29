<?php
require_once '../connexion.php';

$conversationId = $_POST['conversation_id'] ?? null;
$message = trim($_POST['message'] ?? '');
$email = $_SESSION['chat_email'] ?? $_POST['email'] ?? null;
$name  = $_SESSION['chat_name']  ?? $_POST['name']  ?? null;
$name  = $_SESSION['chat_phone']  ?? $_POST['phone']  ?? null;


if (!$conversationId || !$message) {
  http_response_code(400);
  exit('Conversation ou message manquant.');
}

// 🔍 Vérifie le nombre de messages existants dans cette conversation
$stmt = $pdo->prepare("SELECT COUNT(*) FROM messages WHERE conversation_id = ?");
$stmt->execute([$conversationId]);
$existingCount = $stmt->fetchColumn();

try {
  // Enregistre le message
  $stmt = $pdo->prepare("INSERT INTO messages (conversation_id, sender, message, created_at) VALUES (?, 'client', ?, NOW())");
  $stmt->execute([$conversationId, $message]);

  echo json_encode(['status' => 'success']);
} catch (PDOException $e) {
  http_response_code(500);
  echo 'Erreur SQL : ' . $e->getMessage();
}

// 🤖 Envoie automatique si c'est le premier message du client
if ($existingCount == 0) {
  $autoReply = "Un de nos conseillers va vous répondre.\nNous sommes également joignables par email à l'adresse suivante : mail@mail.com ou au 07 82 14 81 41 en cas de besoin.";
  $stmt = $pdo->prepare("INSERT INTO messages (conversation_id, sender, message, `read`, created_at) VALUES (?, 'admin', ?, 0, NOW())");
  $stmt->execute([$conversationId, $autoReply]);
}