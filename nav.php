<header class="fixed top-0 left-0 w-full z-50 bg-purple-500 shadow text-white body-font" x-data="{ openMenu: false, darkMode: false }" x-init="
  darkMode = localStorage.getItem('theme') === 'dark';
  if(darkMode) document.documentElement.classList.add('dark');
">
  <div class="container mx-auto flex items-center justify-between px-5 py-4">
    <!-- Logo + Marque -->
    <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0" href="index.php">
      <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
           stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
           class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>-->
      <img style="width:100px" src="./imgs/logo.webp" alt="Click & Visible">
      <!-- <span class="ml-3 text-xl"><?= htmlspecialchars($content['header']['brand']) ?></span> -->
    </a>

    <!-- Burger Menu Button -->
    <button @click="openMenu = !openMenu" class="ml-auto md:hidden text-white focus:outline-none">
      <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-8 h-8">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Menu Desktop -->
    <nav class="md:ml-auto hidden md:flex flex-wrap items-center text-base justify-center">
      <?php foreach ($content['header']['nav'] as $link): ?>
        <a href="<?= htmlspecialchars($link['href']) ?>" class="text-white mr-5 hover:text-gray-200">
          <?= htmlspecialchars($link['label']) ?>
        </a>
      <?php endforeach; ?>
    </nav>

    <!-- Langue + DarkMode Desktop -->
    <div class="hidden md:flex items-center space-x-4">

      <!-- Sélecteur de langue -->
      <div class="relative" x-data="{ open: false }">
            <?php $flags = ['fr' => '🇫🇷', 'en' => '🇬🇧', 'es' => '🇪🇸', 'ar' => '🇸🇦'];?>
        <button @click="open = !open" class="flex items-center border border-gray-300 text-white py-1 px-3 rounded focus:outline-none">
          <span class="mr-2"><?= $flags[$lang] ?? '🌐' ?></span>
          <?= $content['header']['languages'][$lang] ?>
          <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <form method="GET" action="" id="langForm">
          <ul x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded shadow-lg z-50">
            <?php foreach ($content['header']['languages'] as $code => $label): ?>
              <li>
                <button type="submit" name="lang" value="<?= $code ?>"
                        class="w-full text-left px-4 py-2 hover:bg-purple-100 flex items-center gap-2 <?= $code === $lang ? 'font-semibold text-purple-600' : 'text-gray-700' ?>">
                  <span><?= $flags[$code] ?? '🌐' ?></span>
                  <span><?= $label ?></span>
                </button>
              </li>
            <?php endforeach; ?>
          </ul>
        </form>
      </div>

      <!-- Dark mode desktop -->
      <button @click="
        darkMode = !darkMode;
        if(darkMode) {
          document.documentElement.classList.add('dark');
          localStorage.setItem('theme', 'dark');
        } else {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('theme', 'light');
        }
      " class="w-10 h-10 rounded-full flex items-center justify-center bg-white text-yellow-500 hover:bg-gray-200 transition">
        <template x-if="!darkMode">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 3v1m0 16v1m8.66-13.66l-.707.707M4.34 19.66l-.707.707M21 12h-1M4 12H3m16.66 4.66l-.707-.707M4.34 4.34l-.707-.707M12 5a7 7 0 100 14 7 7 0 000-14z"/>
          </svg>
        </template>
        <template x-if="darkMode">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
          </svg>
        </template>
      </button>
    </div>
  </div>

  <!-- Menu Mobile -->
  <div x-show="openMenu" class="md:hidden bg-purple-600 text-white">
    <div class="p-4 space-y-4">

      <!-- Liens de navigation -->
      <?php foreach ($content['header']['nav'] as $link): ?>
        <a href="<?= htmlspecialchars($link['href']) ?>" class="block hover:text-gray-200">
          <?= htmlspecialchars($link['label']) ?>
        </a>
      <?php endforeach; ?>

      <!-- Sélecteur de langue -->
      <div class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="w-full bg-white text-gray-800 py-2 px-4 rounded flex items-center justify-between">
          <span><?= $flags[$lang] ?? '🌐' ?> <?= $content['header']['languages'][$lang] ?></span>
          <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
        <form method="GET" action="">
          <ul x-show="open" @click.away="open = false" class="mt-2 bg-white text-gray-800 border rounded shadow z-50">
            <?php foreach ($content['header']['languages'] as $code => $label): ?>
                <li>
                <button type="submit" name="lang" value="<?= $code ?>" class="w-full text-left px-4 py-2 hover:bg-purple-100 flex items-center gap-2 <?= $code === $lang ? 'font-semibold text-purple-600' : 'text-gray-700' ?>">
                  <span><?= $flags[$code] ?></span>
                  <span><?= $label ?></span>
                </button>
              </li>
            <?php endforeach; ?>
          </ul>
        </form>
      </div>

      <!-- Dark Mode Toggle -->
      <div class="flex items-center justify-between">
        <span>🌙 Mode sombre</span>
        <button @click="
          darkMode = !darkMode;
          if(darkMode) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
          } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
          }
        " class="w-10 h-10 rounded-full flex items-center justify-center bg-white text-yellow-500 hover:bg-gray-200 transition">
          <template x-if="!darkMode">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 3v1m0 16v1m8.66-13.66l-.707.707M4.34 19.66l-.707.707M21 12h-1M4 12H3m16.66 4.66l-.707-.707M4.34 4.34l-.707-.707M12 5a7 7 0 100 14 7 7 0 000-14z"/>
            </svg>
          </template>
          <template x-if="darkMode">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
            </svg>
          </template>
        </button>
      </div>

    </div>
  </div>
</header>
