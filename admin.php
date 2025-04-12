<?php
require_once('./connexion.php');
require_once('./variables.php');
session_start();

// Récupère toutes les conversations actives avec le nombre de messages non lus
$conversations = $pdo->query("SELECT c.*, (
    SELECT COUNT(*) FROM messages m WHERE m.conversation_id = c.id AND m.sender = 'client' AND m.read = 0
) as unread
FROM conversations c
WHERE c.status != 'archived'
ORDER BY updated_at IS NULL, updated_at DESC, created_at DESC")->fetchAll(PDO::FETCH_ASSOC);

$selectedId = $_GET['id'] ?? null;
$messages = [];

if ($selectedId) {
    $stmt = $pdo->prepare("SELECT * FROM messages WHERE conversation_id = ? ORDER BY created_at ASC");
    $stmt->execute([$selectedId]);
    $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Marquer les messages comme lus
    $pdo->prepare("UPDATE messages SET `read` = 1 WHERE conversation_id = ? AND sender = 'client'")->execute([$selectedId]);
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Admin Chat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="<?= $bgSecondary; ?> dark:<?= $textTitle; ?>">
    <div class="flex h-screen">

        <!-- Liste des conversations -->
        <aside class="w-1/4 <?= $bgSecondary ;?> border-r border-gray-700 overflow-y-auto">
            <h2 class="p-4 font-bold text-lg border-b border-gray-700">Conversations</h2>
            <ul id="conversation-list">
                <?php foreach ($conversations as $conv): ?>
                    <li>
                        <a href="?id=<?= $conv['id'] ?>"
                            class="block px-4 py-2 <?= $selectedId == $conv['id'] ? $bgPrimary : ($conv['unread'] > 0 ? 'bg-purple-800' : "hover:$bgPrimary") ?>">
                            <div class="font-semibold dark:<?= $textTitle; ?>">
                                <?= htmlspecialchars($conv['name'] ?? 'Utilisateur inconnu') ?>
                                <?php if ($conv['unread'] > 0 && $selectedId != $conv['id']): ?>
                                    <span class="ml-2 text-xs bg-red-600 dark:<?= $textTitle; ?> px-2 py-0.5 rounded-full">New</span>
                                <?php endif; ?>
                            </div>
                            <div class="text-sm text-gray-300">
                                ✉️ <?= htmlspecialchars($conv['email'] ?? '—') ?>
                            </div>
                            <div class="text-sm text-gray-300">
                                📞 <?= htmlspecialchars($conv['phone'] ?? '—') ?>
                            </div>
                            <small class="<?= $textParagraph; ?> text-xs">Créée le
                                <?= date('d/m/Y H:i', strtotime($conv['created_at'])) ?></small>
                        </a>
                        <form action="chat/archive.php" method="POST" class="text-right mb-2 px-4">
                            <input type="hidden" name="conversation_id" value="<?= $conv['id'] ?>">
                            <button type="submit" class="text-xs <?= $bgQuartenary; ?> hover:bg-red-600 dark:<?= $textTitle; ?> px-3 py-1 rounded">
                                Archiver la conversation
                            </button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>

        <!-- Zone de chat -->
        <main class="flex-1 flex flex-col">
            <?php if ($selectedId): ?>
                <div class="flex-1 overflow-y-auto p-6 space-y-4 <?= $bgSecondary ;?>" id="chat-container">
                    <?php foreach ($messages as $msg): ?>
                        <div class="<?= $msg['sender'] === 'admin' ? 'text-right' : 'text-left' ?>">
                            <span
                                class="inline-block px-4 py-2 rounded <?= $msg['sender'] === 'admin' ? "$bgPrimary dark:<?= $textTitle; ?>" : "bg-gray-200 $textTitleLightMode" ?>">
                                <?= nl2br(htmlspecialchars($msg['message'])) ?>
                            </span>
                            <br>
                            <small class="text-xs <?= $textParagraph; ?>">
                                <?= date('H:i d/m', strtotime($msg['created_at'])) ?> - <?= $msg['sender'] ?>
                            </small>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Formulaire de réponse -->
                <form action="./chat/send_admin.php" method="POST" class="p-4 border-t border-gray-700 <?= $bgSecondary; ?>">
                    <input type="hidden" name="conversation_id" value="<?= $selectedId ?>">
                    <div class="flex">
                        <textarea name="message" rows="2" placeholder="Votre réponse..."
                            class="flex-1 border border-gray-600 <?= $bgSecondary ;?> dark:<?= $textTitle; ?> rounded px-3 py-2 mr-2 focus:outline-none focus:ring focus:ring-purple-500"></textarea>
                        <button type="submit" class="<?= $bgPrimary;?> dark:<?= $textTitle; ?> px-4 py-2 rounded hover:<?= $bgPrimaryHover; ?>">
                            Envoyer
                        </button>
                    </div>
                </form>
            <?php else: ?>
                <div class="p-6 text-center <?= $textParagraph; ?>">Sélectionnez une conversation pour commencer</div>
            <?php endif; ?>
        </main>
    </div>

    <!-- 🔊 Notification sonore -->
    <audio id="notification-sound" src="./sounds/notification.mp3" preload="auto"></audio>

    <script>
        let currentConv = "<?= $selectedId ?>";
        let lastMessageCount = 0;
        const notificationAudio = document.getElementById("notification-sound");

        async function refreshConversations() {
            const res = await fetch("./chat/check_conversations.php");
            const html = await res.text();
            document.getElementById("conversation-list").innerHTML = html;
        }

        async function refreshChat() {
            if (!currentConv) return;

            const res = await fetch("./chat/fetch.php?conversation_id=" + currentConv);
            const messages = await res.json();
            const container = document.getElementById("chat-container");

            // ▶️ Si nouveau message client
            if (messages.length > lastMessageCount) {
                const lastMsg = messages[messages.length - 1];
                if (lastMsg.sender === 'client') {
                    notificationAudio.play().catch(() => { });
                }
            }
            lastMessageCount = messages.length;

            container.innerHTML = "";
            messages.forEach(msg => {
                const align = msg.sender === 'admin' ? 'text-right' : 'text-left';
                const bg = msg.sender === 'admin' ? "<?= $bgPrimary; ?>" + "dark:<?= $textTitle; ?>" : "bg-gray-200 <?= $textTitleLightMode;?>";
                const date = msg.created_at ? new Date(msg.created_at) : null;
                const time = date ? new Intl.DateTimeFormat('fr-FR', {
                    hour: '2-digit', minute: '2-digit', day: '2-digit', month: '2-digit'
                }).format(date) : '';
                container.innerHTML += `<div class="${align}">
                <span class="inline-block px-4 py-2 rounded ${bg}">${msg.message}</span>
                <br><small class="text-xs <?= $textParagraph; ?>">${time} - ${msg.sender}</small>
            </div>`;
            });

            container.scrollTop = container.scrollHeight;
        }

        // 🔁 Rafraîchissement auto
        setInterval(() => {
            refreshConversations();
            if (currentConv) refreshChat();
        }, 4000);
    </script>
</body>

</html>