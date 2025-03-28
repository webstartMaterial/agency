<div id="cookie-banner"
     class="fixed bottom-4 left-4 w-11/12 sm:w-[500px] bg-purple-800 text-white px-4 py-2 z-50 shadow-lg rounded flex items-center justify-between text-sm hidden"
     data-aos="fade-down">
  <span><?= htmlspecialchars($content['cookies']['message']) ?></span>
  <button id="accept-cookies"
          class="bg-white text-purple-800 hover:bg-gray-100 font-medium px-3 py-1 rounded ml-4 whitespace-nowrap">
    <?= htmlspecialchars($content['cookies']['button']) ?>
  </button>
</div>
