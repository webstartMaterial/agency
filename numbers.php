<section class="text-white body-font bg-purple-500" data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 text-center">
      <?php foreach ($content['stats']['items'] as $index => $item): ?>
        <div class="p-4 sm:w-1/4 w-1/2" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
          <div class="bg-white bg-opacity-10 rounded-lg p-6 hover:shadow-lg transition duration-300">
            <div class="w-12 h-12 mx-auto mb-4 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
              <?php
              // Icônes différentes selon l’index
              $icons = [
                '<path d="M13 16h-1v-4h-1m1-4h.01M21 12A9 9 0 113 12a9 9 0 0118 0z"/>', // Info
                '<path d="M9 17v-2a4 4 0 014-4h1a4 4 0 014 4v2"/><circle cx="12" cy="7" r="4"/>', // Users
                '<path d="M3 10h18M3 6h18M3 14h18M3 18h18"/>', // Layers
                '<path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/>', // Avatar
              ];
              ?>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                   stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                   class="w-6 h-6 text-white" viewBox="0 0 24 24">
                <?= $icons[$index % count($icons)] ?>
              </svg>
            </div>
            <h2 class="title-font font-bold sm:text-4xl text-3xl text-white">
              <?= htmlspecialchars($item['number']) ?>
            </h2>
            <p class="leading-relaxed text-purple-100 mt-2">
              <?= htmlspecialchars($item['label']) ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
