<footer class="text-gray-600 dark:text-gray-300 body-font bg-white dark:bg-gray-900 transition-colors duration-300">
  <div class="container px-5 py-24 mx-auto">
    <!-- Les 4 colonnes -->
    <div class="flex flex-wrap md:text-left text-center order-first">
      <?php foreach ($content['footer']['columns'] as $column): ?>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 dark:text-white tracking-widest text-sm mb-3">
            <?= htmlspecialchars($column['title']) ?>
          </h2>
          <nav class="list-none mb-10">
            <?php foreach ($column['links'] as $link): ?>
              <li>
                <a class="text-gray-600 dark:text-gray-400 hover:text-purple-500"
                  href="<?= htmlspecialchars($link['url']) ?>">
                  <?= htmlspecialchars($link['label']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          </nav>
        </div>
      <?php endforeach; ?>

      <!-- Colonne 4 : Contact -->
      <div class="lg:w-1/4 md:w-1/2 w-full px-4 text-center md:text-left">
        <h2 class="title-font font-medium text-gray-900 dark:text-white tracking-widest text-sm mb-3">
          <?= htmlspecialchars($content['footer']['contact']['title']) ?>
        </h2>
        <nav class="list-none mb-10 space-y-5">

          <!-- Email -->
          <li class="flex flex-col md:flex-row items-center md:items-start gap-2 md:gap-3">
            <div class="flex items-center justify-center md:justify-start">
              <i data-lucide="mail" class="text-purple-500 w-5 h-5"></i>
            </div>
            <div class="md:text-left text-center">
              <span class="text-gray-600 dark:text-gray-400 block">
                <?= htmlspecialchars($content['footer']['contact']['email_label']) ?> :
              </span>
              <a href="mailto:<?= $content['footer']['contact']['email_value'] ?>"
                class="text-purple-500 hover:underline inline-block">
                <?= htmlspecialchars($content['footer']['contact']['email_value']) ?>
              </a>
            </div>
          </li>

          <!-- Téléphone -->
          <li class="flex flex-col md:flex-row items-center md:items-start gap-2 md:gap-3">
            <div class="flex items-center justify-center md:justify-start">
              <i data-lucide="phone" class="text-purple-500 w-5 h-5"></i>
            </div>
            <div class="md:text-left text-center">
              <span class="text-gray-600 dark:text-gray-400 block">
                <?= htmlspecialchars($content['footer']['contact']['phone_label']) ?> :
              </span>
              <a href="tel:<?= preg_replace('/\s+/', '', $content['footer']['contact']['phone_value']) ?>"
                class="text-purple-500 hover:underline inline-block">
                <?= htmlspecialchars($content['footer']['contact']['phone_value']) ?>
              </a>
            </div>
          </li>

        </nav>
      </div>

      <script>
        lucide.createIcons(); // Active les icônes Lucide
      </script>

    </div>

    <!-- Newsletter centrée en dessous -->
    <div class="w-full mt-10 px-4">
      <div class="max-w-3xl mx-auto text-center">
        <h2 class="title-font font-medium text-gray-900 dark:text-white tracking-widest text-sm mb-3">
          NEWSLETTER
        </h2>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
          <input type="text" id="footer-field" name="footer-field"
            placeholder="<?= htmlspecialchars($content['footer']['subscribe']['label']) ?>"
            class="w-full sm:w-auto flex-1 bg-gray-100 dark:bg-gray-800 dark:text-white bg-opacity-50 rounded border border-gray-300 dark:border-gray-600 focus:bg-white dark:focus:bg-gray-700 focus:ring-2 focus:ring-purple-200 focus:border-purple-500 text-base outline-none text-gray-700 dark:text-white py-2 px-4 leading-8 transition duration-200 ease-in-out">
          <button
            class="inline-flex text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded">
            <?= htmlspecialchars($content['footer']['subscribe']['button']) ?>
          </button>
        </div>
        <p class="text-gray-500 dark:text-gray-400 text-sm mt-4">
          <?= htmlspecialchars($content['footer']['subscribe']['message']) ?>
        </p>
      </div>
    </div>
  </div>


  <div class="bg-gray-100 dark:bg-gray-800 transition-colors duration-300">
    <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900 dark:text-white">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full"
          viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl"><?= htmlspecialchars($content['footer']['bottom']['brand']) ?></span> -->
        <img style="width:100px" src="./imgs/logo.webp" alt="Click & Visible">

      </a>
      <p class="text-sm text-gray-500 dark:text-gray-400 sm:ml-6 sm:mt-0 mt-4">
        <?= htmlspecialchars($content['footer']['bottom']['copyright']) ?> —
        <a href="https://twitter.com/<?= ltrim($content['footer']['bottom']['twitter'], '@') ?>"
          class="text-gray-600 dark:text-gray-300 ml-1 hover:text-purple-500" target="_blank">
          <?= htmlspecialchars($content['footer']['bottom']['twitter']) ?>
        </a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <!-- Facebook -->
        <a class="text-[#1877F2] hover:text-[#0e63d6]"
          href="<?= htmlspecialchars($content['footer']['bottom']['socials']['facebook']) ?>" target="_blank">
          <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>

        <!-- Twitter -->
        <a class="ml-3 text-[#1DA1F2] hover:text-[#0d8ae5]"
          href="<?= htmlspecialchars($content['footer']['bottom']['socials']['twitter']) ?>" target="_blank">
          <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
            <path
              d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012 8v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
            </path>
          </svg>
        </a>

        <!-- Instagram -->
        <a class="ml-3 text-[#E1306C] hover:text-[#c01a56]"
          href="<?= htmlspecialchars($content['footer']['bottom']['socials']['instagram']) ?>" target="_blank">
          <svg fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>

        <!-- LinkedIn -->
        <a class="ml-3 text-[#0A66C2] hover:text-[#004182]"
          href="<?= htmlspecialchars($content['footer']['bottom']['socials']['linkedin']) ?>" target="_blank">
          <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2"></circle>
          </svg>
        </a>
      </span>

    </div>
  </div>
</footer>