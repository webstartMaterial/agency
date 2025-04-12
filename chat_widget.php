<!-- Chat Container (positionné en bas à droite) -->
<div id="chat-widget" class="fixed bottom-4 right-4 z-50 flex flex-col items-end">

    <!-- Chat Toggle Button -->
    <button id="chat-toggle"
        class="border <?= $border ;?> <?= $bgPrimary;?> hover:<?= $bgPrimaryHover; ?> <?= $textWhiteLightMode; ?> dark:<?= $textTitle; ?> px-4 py-2 rounded-full shadow-lg flex items-center gap-2">
        <i class="ti-comment-alt text-lg"></i>
        <span><?= htmlspecialchars($content['chat']['toggle_label']) ?></span>
    </button>

    <!-- Chat Window -->
    <div id="chat-box"
        class="hidden border <?= $border ;?> w-80 bg-white dark:<?= $bgSecondary ;?> rounded-lg shadow-xl mt-4 overflow-hidden flex flex-col">

        <!-- Header -->
        <div class="<?= $bgPrimary;?> <?= $textWhiteLightMode;?> dark:<?= $textTitle; ?> px-4 py-3 text-sm font-semibold">
            <?= htmlspecialchars($content['chat']['header_title']) ?>
        </div>

        <!-- Start Form -->
        <div id="chat-start" class="p-4 flex flex-col gap-3">
            <input id="chat-name" type="text"
                placeholder="<?= htmlspecialchars($content['chat']['placeholder_name']) ?>"
                class="px-3 py-2 rounded border bg-gray-100 dark:<?= $bgQuartenary; ?> text-sm placeholder-<?= $textParagraphLightMode; ?> dark:<?= $textTitle; ?> dark:placeholder-white">

            <input id="chat-email" type="email"
                placeholder="<?= htmlspecialchars($content['chat']['placeholder_email']) ?>"
                class="px-3 py-2 rounded border bg-gray-100 dark:<?= $bgQuartenary; ?> text-sm placeholder-<?= $textParagraphLightMode; ?> dark:<?= $textTitle; ?> dark:placeholder-white">

            <input id="chat-phone" type="text"
                placeholder="<?= htmlspecialchars($content['chat']['placeholder_phone']) ?>"
                class="px-3 py-2 rounded border bg-gray-100 dark:<?= $bgQuartenary; ?> text-sm placeholder-<?= $textParagraphLightMode; ?> dark:<?= $textTitle; ?> dark:placeholder-white">

            <button id="start-chat" class="<?= $bgPrimary;?> hover:<?= $bgPrimaryHover;?> <?= $textWhiteLightMode;?> dark:<?= $textTitle; ?> text-sm py-2 px-4 rounded">
                <?= htmlspecialchars($content['chat']['start_button']) ?>
            </button>
        </div>

        <!-- Messages -->
        <div id="chat-messages" class="flex-1 p-4 overflow-y-auto text-sm space-y-2 max-h-64 hidden">
            <div class="<?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?> text-center"><?= htmlspecialchars($content['chat']['start_message']) ?></div>
        </div>

        <!-- Message Input -->
        <form id="chat-form" class="border-t border-gray-200 dark:border-gray-700 p-3 flex flex-col sm:flex-row gap-2 hidden">
            <input type="text" id="chat-input"
                placeholder="<?= htmlspecialchars($content['chat']['placeholder_message']) ?>"
                class="flex-1 px-3 py-2 border rounded text-sm bg-gray-100 dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode;?> <?= $textTitle;?> placeholder-<?= $textParagraphLightMode;?> dark:placeholder-white">

            <button type="submit"
                class="<?= $bgPrimary;?> hover:<?= $bgPrimaryHover;?> <?= $textWhiteLightMode;?> dark:<?= $textTitle; ?> text-sm px-4 py-2 rounded w-full sm:w-auto">
                <?= htmlspecialchars($content['chat']['send_button']) ?>
            </button>
        </form>


        <div class="p-2 text-center text-xs">
            <button onclick="localStorage.clear(); location.reload();"
                class="<?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?> hover:text-gray-700 dark:hover:dark:<?= $textTitle; ?> underline">
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
        const savedPhone = localStorage.getItem("chat_phone");
        const savedConvId = localStorage.getItem("conversation_id");
        const startedAt = localStorage.getItem("chat_started_at");
        const now = Date.now();
        const duration = 24 * 60 * 60 * 1000;

        // 👉 Si session existante et toujours valide, on restaure automatiquement
        if (savedName && savedEmail && savedPhone && savedConvId && startedAt && (now - startedAt < duration)) {
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
            const phone = document.getElementById("chat-phone").value.trim();

            if (!name || !email || !phone) {
                alert("Merci de renseigner votre nom, votre email et votre numéro de téléphone.");
                return;
            }

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const phoneRegex = /^0[1-9][0-9]{8}$/;

            if (!name) {
                alert("Merci de renseigner votre prénom.");
                return;
            }

            if (!emailRegex.test(email)) {
                alert("Merci de saisir un email valide.");
                return;
            }

            if (!phoneRegex.test(phone)) {
                alert("Merci d’entrer un numéro de téléphone français valide à 10 chiffres (ex: 0782157181).");
                return;
            }

            fetch("chat/init.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ name, email, phone })
            })
                .then(res => res.json())
                .then(data => {
                    if (data.conversation_id) {
                        sessionStorage.setItem("conversation_id", data.conversation_id);
                        localStorage.setItem("chat_name", name);
                        localStorage.setItem("chat_email", email);
                        localStorage.setItem("chat_phone", phone);
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

            // Génère la date et l'heure actuelles
            const now = new Date();
            const time = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            const fullDate = now.toLocaleDateString();
            const align = "text-right";
            const bg = "bg-purple-100 dark:<?= $bgPrimary;?> dark:<?= $textTitle; ?>";
            messagesDiv.innerHTML += `
            <div class="mb-2 ${align}">
                <div class="text-xs <?= $textParagraph; ?> mb-1 font-semibold">
                    Vous -                 <span class="${bg} px-2 py-1 rounded inline-block">${message}</span><br>

                </div>
                <small class="text-xs <?= $textParagraph; ?>">${time} - ${fullDate}</small>
            </div>`;
            chatInput.value = "";

            const formData = new FormData();
            formData.append("message", message);
            formData.append("conversation_id", sessionStorage.getItem("conversation_id"));
            formData.append("email", localStorage.getItem("chat_email"));
            formData.append("name", localStorage.getItem("chat_name"));
            formData.append("phone", localStorage.getItem("chat_phone"));

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
                    const bg = msg.sender === "admin" ? "bg-green-100 dark:bg-green-600 <?= $textTitleLightMode; ?> dark:<?= $textTitle; ?>" : "bg-purple-100 dark:<?= $bgPrimary;?> dark:<?= $textTitle; ?>";

                    const date = new Date(msg.created_at);
                    const time = `${date.getHours().toString().padStart(2, "0")}:${date.getMinutes().toString().padStart(2, "0")}`;
                    const fullDate = `${date.getDate().toString().padStart(2, "0")}/${(date.getMonth() + 1).toString().padStart(2, "0")}/${date.getFullYear()}`;

                    messagesDiv.innerHTML += `
                    <div class="mb-2 ${align}">
                        <div class="text-xs <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?> mb-1 font-semibold">
                            ${msg.sender === "admin" ? "Votre conseiller Sam" : "Vous"} -
                                                    <span class="${bg} px-2 py-1 rounded inline-block">${msg.message}</span><br>

                        </div>
                        <small class="text-xs <?= $textParagraphLightMode ?> dark:<?= $textParagraph; ?>">${time} - ${fullDate}</small>
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