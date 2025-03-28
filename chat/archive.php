<?php
require_once('../connexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conversationId = $_POST['conversation_id'] ?? null;

    if ($conversationId) {
        $stmt = $pdo->prepare("UPDATE conversations SET status = 'archived' WHERE id = ?");
        $stmt->execute([$conversationId]);
    }

    header("Location: ../admin.php");
    exit;
}
