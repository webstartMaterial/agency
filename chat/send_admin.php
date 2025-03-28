<?php
require_once('../connexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conversationId = $_POST['conversation_id'] ?? null;
    $message = trim($_POST['message'] ?? '');

    if (!$conversationId || !$message) {
        die('Conversation ou message manquant.');
    }

    // Insère le message dans la table "messages"
    $stmt = $pdo->prepare("INSERT INTO messages (conversation_id, sender, message, `read`, created_at) VALUES (?, 'admin', ?, 0, NOW())");
    $stmt->execute([$conversationId, $message]);

    // Met à jour la date de mise à jour de la conversation
    $update = $pdo->prepare("UPDATE conversations SET updated_at = NOW() WHERE id = ?");
    $update->execute([$conversationId]);

    // Redirige vers la conversation courante
    header("Location: ../admin.php?id=" . $conversationId);
    exit;
} else {
    die('Méthode non autorisée.');
}
