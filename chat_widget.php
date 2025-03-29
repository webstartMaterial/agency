<!-- Chat Container (positionné en bas à droite) -->
<div id="chat-widget" class="fixed bottom-4 right-4 z-50 flex flex-col items-end">

    <!-- Chat Toggle Button -->
    <button id="chat-toggle"
        class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-full shadow-lg flex items-center gap-2">
        <i class="ti-comment-alt text-lg"></i>
        <span><?= htmlspecialchars($content['chat']['toggle_label']) ?></span>
    </button>

    <!-- Chat Window -->
    <div id="chat-box"
        class="hidden w-80 bg-white dark:bg-gray-800 rounded-lg shadow-xl mt-4 overflow-hidden flex flex-col">

        <!-- Header -->
        <div class="bg-purple-600 text-white px-4 py-3 text-sm font-semibold">
            <?= htmlspecialchars($content['chat']['header_title']) ?>
        </div>

        <!-- Start Form -->
        <div id="chat-start" class="p-4 flex flex-col gap-3">
            <input id="chat-name" type="text"
                placeholder="<?= htmlspecialchars($content['chat']['placeholder_name']) ?>"
                class="px-3 py-2 rounded border bg-gray-100 dark:bg-gray-700 text-sm placeholder-white text-white dark:placeholder-white">

            <input id="chat-email" type="email"
                placeholder="<?= htmlspecialchars($content['chat']['placeholder_email']) ?>"
                class="px-3 py-2 rounded border bg-gray-100 dark:bg-gray-700 text-sm placeholder-white text-white dark:placeholder-white">

            <button id="start-chat" class="bg-purple-500 hover:bg-purple-600 text-white text-sm py-2 px-4 rounded">
                <?= htmlspecialchars($content['chat']['start_button']) ?>
            </button>
        </div>

        <!-- Messages -->
        <div id="chat-messages" class="flex-1 p-4 overflow-y-auto text-sm space-y-2 max-h-64 hidden">
            <div class="text-gray-500 text-center"><?= htmlspecialchars($content['chat']['start_message']) ?></div>
        </div>

        <!-- Message Input -->
        <form id="chat-form" class="border-t border-gray-200 dark:border-gray-700 p-3 flex items-center gap-2 hidden">
            <input type="text" id="chat-input"
                placeholder="<?= htmlspecialchars($content['chat']['placeholder_message']) ?>"
                class="flex-1 px-3 py-2 border rounded text-sm bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white placeholder-white dark:placeholder-white">

            <button type="submit" class="bg-purple-500 hover:bg-purple-600 text-white text-sm px-4 py-2 rounded">
                <?= htmlspecialchars($content['chat']['send_button']) ?>
            </button>
        </form>

        <div class="p-2 text-center text-xs">
            <button onclick="localStorage.clear(); location.reload();"
                class="text-gray-400 hover:text-gray-700 dark:hover:text-white underline">
                <?= htmlspecialchars($content['chat']['reset_button']) ?>
            </button>
        </div>
    </div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const chatBox = document.getElementById("chat-box");
        const chatToggle = document.getElementById("chat-toggle");
        const chatStart = document.getElementById("chat-start");
        const chatMessages = document.getElementById("chat-messages");
        const chatForm = document.getElementById("chat-form");
        const chatInput = document.getElementById("chat-input");

        const savedName = localStorage.getItem("chat_name");
        const savedEmail = localStorage.getItem("chat_email");
        const savedConvId = localStorage.getItem("conversation_id");
        const startedAt = localStorage.getItem("chat_started_at");
        const now = Date.now();
        const duration = 24 * 60 * 60 * 1000;

        // 👉 Si session existante et toujours valide, on restaure automatiquement
        if (savedName && savedEmail && savedConvId && startedAt && (now - startedAt < duration)) {
            sessionStorage.setItem("conversation_id", savedConvId);
            chatStart.classList.add("hidden");
            chatMessages.classList.remove("hidden");
            chatForm.classList.remove("hidden");

            // On force la réouverture du chat
            setTimeout(() => chatBox.classList.remove("hidden"), 300);

            // Rafraîchissement des messages
            startPolling();
        }

        // Affiche/masque le chat
        chatToggle.addEventListener("click", () => {
            chatBox.classList.toggle("hidden");
        });

        // Démarrer une nouvelle conversation
        document.getElementById("start-chat").addEventListener("click", function () {
            const name = document.getElementById("chat-name").value.trim();
            const email = document.getElementById("chat-email").value.trim();

            if (!name || !email) {
                alert("Merci de renseigner votre nom et votre email.");
                return;
            }

            fetch("chat/init.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ name, email })
            })
                .then(res => res.json())
                .then(data => {
                    if (data.conversation_id) {
                        sessionStorage.setItem("conversation_id", data.conversation_id);
                        localStorage.setItem("chat_name", name);
                        localStorage.setItem("chat_email", email);
                        localStorage.setItem("conversation_id", data.conversation_id);
                        localStorage.setItem("chat_started_at", Date.now());

                        chatStart.classList.add("hidden");
                        chatMessages.classList.remove("hidden");
                        chatForm.classList.remove("hidden");

                        startPolling();
                    }
                });
        });

        // Envoi de message
        chatForm.addEventListener("submit", async function (e) {
            e.preventDefault();
            const message = chatInput.value.trim();
            if (!message) return;

            const messagesDiv = chatMessages;
            messagesDiv.innerHTML += `<div class="mb-2 text-right"><span class="bg-purple-100 dark:bg-purple-600 px-2 py-1 rounded">${message}</span></div>`;
            chatInput.value = "";

            const formData = new FormData();
            formData.append("message", message);
            formData.append("conversation_id", sessionStorage.getItem("conversation_id"));
            formData.append("email", localStorage.getItem("chat_email"));
            formData.append("name", localStorage.getItem("chat_name"));

            await fetch("chat/send.php", { method: "POST", body: formData });
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        });

        // 🔄 Rafraîchissement régulier des messages
        // 🔄 Rafraîchissement régulier des messages avec détection de nouveaux messages admin
        function startPolling() {
            let lastCount = 0;

            setInterval(async function () {
                const convId = sessionStorage.getItem("conversation_id");
                if (!convId) return;

                const res = await fetch("chat/fetch.php?conversation_id=" + convId);
                const data = await res.json();

                const messagesDiv = chatMessages;
                messagesDiv.innerHTML = "";

                data.forEach(msg => {
                    const align = msg.sender === "admin" ? "text-left" : "text-right";
                    const bg = msg.sender === "admin" ? "bg-gray-200" : "bg-purple-100 dark:bg-purple-600 text-white";

                    const date = new Date(msg.created_at);
                    const time = `${date.getHours().toString().padStart(2, "0")}:${date.getMinutes().toString().padStart(2, "0")}`;
                    const fullDate = `${date.getDate().toString().padStart(2, "0")}/${(date.getMonth() + 1).toString().padStart(2, "0")}/${date.getFullYear()}`;

                    messagesDiv.innerHTML += `
                <div class="mb-2 ${align}">
                    <span class="${bg} px-2 py-1 rounded inline-block">${msg.message}</span><br>
                    <small class="text-xs text-gray-400">${time} - ${fullDate}</small>
                </div>`;
                });

                // 🔊 Joue le son si un nouveau message a été reçu de l'admin
                if (data.length > lastCount && lastCount !== 0) {
                    const lastMsg = data[data.length - 1];
                    if (lastMsg.sender === "admin") {
                        document.getElementById("client-sound").play().catch(() => { });
                    }
                }

                lastCount = data.length;
                messagesDiv.scrollTop = messagesDiv.scrollHeight;
            }, 3000);
        }

        // Débloque le son dès que l'utilisateur interagit (obligatoire sur Chrome/Safari)
        document.addEventListener("click", function enableAudioOnce() {
            const sound = document.getElementById("client-sound");
            if (sound) {
                sound.play().catch(() => { }); // Play + ignore si blocage
                sound.pause();                // On arrête direct
                sound.currentTime = 0;
                document.removeEventListener("click", enableAudioOnce);
            }
        });

    });
</script>