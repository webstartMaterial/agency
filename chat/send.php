<?php
require_once '../connexion.php';

$conversationId = $_POST['conversation_id'] ?? null;
$message = trim($_POST['message'] ?? '');
$email = $_SESSION['chat_email'] ?? $_POST['email'] ?? null;
$name  = $_SESSION['chat_name']  ?? $_POST['name']  ?? null;


if (!$conversationId || !$message) {
  http_response_code(400);
  exit('Conversation ou message manquant.');
}

try {
  // Enregistre le message
  $stmt = $pdo->prepare("INSERT INTO messages (conversation_id, sender, message, created_at) VALUES (?, 'client', ?, NOW())");
  $stmt->execute([$conversationId, $message]);

  echo json_encode(['status' => 'success']);
} catch (PDOException $e) {
  http_response_code(500);
  echo 'Erreur SQL : ' . $e->getMessage();
}
