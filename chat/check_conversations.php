<?php
require_once('../connexion.php');

// Récupère toutes les conversations avec le nombre de messages non lus
$conversations = $pdo->query("
  SELECT c.*, (
    SELECT COUNT(*) FROM messages m
    WHERE m.conversation_id = c.id
    AND m.sender = 'client'
    AND m.read = 0
  ) as unread
  FROM conversations c
  WHERE c.status != 'archived'
  ORDER BY updated_at IS NULL, updated_at DESC, created_at DESC
")->fetchAll(PDO::FETCH_ASSOC);

$selectedId = $_GET['id'] ?? null;

foreach ($conversations as $conv): ?>
    <li>
        <a href="?id=<?= $conv['id'] ?>" class="block px-4 py-2 
         <?= $selectedId == $conv['id']
             ? 'bg-purple-600'
             : ($conv['unread'] > 0 ? 'bg-purple-800' : 'hover:bg-purple-700') ?>">
            <div class="font-semibold text-white">
                <?= htmlspecialchars($conv['name'] ?? 'Utilisateur inconnu') ?>
                <?php if ($conv['unread'] > 0 && $selectedId != $conv['id']): ?>
                    <span class="ml-2 text-xs bg-red-600 text-white px-2 py-0.5 rounded-full">New</span>
                <?php endif; ?>
            </div>
            <div class="text-sm text-gray-300">
                ✉️ <?= htmlspecialchars($conv['email'] ?? '—') ?>
            </div>
            <div class="text-sm text-gray-300">
                📞 <?= htmlspecialchars($conv['phone'] ?? '—') ?>
            </div>
            <small class="text-gray-400 text-xs">Créée le <?= date('d/m/Y H:i', strtotime($conv['created_at'])) ?></small>
        </a>
        <form action="chat/archive.php" method="POST" class="text-right mb-2 px-4">
            <input type="hidden" name="conversation_id" value="<?= $conv['id'] ?>">
            <button type="submit" class="text-xs bg-gray-700 hover:bg-red-600 text-white px-3 py-1 rounded">
                Archiver la conversation
            </button>
        </form>


    </li>
<?php endforeach; ?>