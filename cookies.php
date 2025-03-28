<div id="cookie-banner"
     class="fixed bottom-4 left-4 w-11/12 sm:w-[500px] bg-purple-800 text-white px-4 py-2 z-50 shadow-lg rounded flex items-center justify-between text-sm opacity-0 translate-y-2 transition-all duration-500">
  <span><?= htmlspecialchars($content['cookies']['message']) ?></span>
  <button id="accept-cookies"
          class="bg-white text-purple-800 hover:bg-gray-100 font-medium px-3 py-1 rounded ml-4 whitespace-nowrap">
    <?= htmlspecialchars($content['cookies']['button']) ?>
  </button>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookie-banner");
    const accepted = localStorage.getItem("cookies_accepted");

    if (!accepted) {
      setTimeout(() => {
        banner.classList.remove("opacity-0", "translate-y-2");
        banner.classList.add("opacity-100", "translate-y-0");
      }, 500); // 👈 délai avant affichage (en ms)
    }

    document.getElementById("accept-cookies").addEventListener("click", function () {
      localStorage.setItem("cookies_accepted", "true");
      banner.classList.add("hidden");
    });
  });
</script>
