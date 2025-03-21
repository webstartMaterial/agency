<header class="fixed top-0 left-0 w-full z-50 bg-purple-500 shadow text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="/">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl text-white"><?= htmlspecialchars($content['header']['brand']) ?></span>
    </a>

    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <?php foreach ($content['header']['nav'] as $link): ?>
        <a href="<?= htmlspecialchars($link['href']) ?>" class="text-white mr-5 hover:text-gray-900">
          <?= htmlspecialchars($link['label']) ?>
        </a>
      <?php endforeach; ?>
    </nav>

    <div class="relative ml-4">
      <form method="GET" action="" id="langForm">
        <select name="lang" onchange="document.getElementById('langForm').submit()" class="bg-gray-100 border border-gray-300 text-gray-700 py-1 px-3 rounded focus:outline-none focus:ring-2 focus:ring-purple-200">
          <?php foreach ($content['header']['languages'] as $code => $label): ?>
            <option value="<?= $code ?>" <?= $code === $lang ? 'selected' : '' ?>><?= $label ?></option>
          <?php endforeach; ?>
        </select>
      </form>
    </div>
  </div>
</header>
