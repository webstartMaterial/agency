<section class="text-gray-600 dark:text-gray-300 body-font bg-gray-100 dark:bg-gray-900" data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center" data-aos="fade-down">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900 dark:text-white">
        <?= htmlspecialchars($content['skills']['title']) ?>
      </h1>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500 dark:text-gray-400">
        <?= htmlspecialchars($content['skills']['description']) ?>
      </p>
    </div>

    <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
      <?php
        $icons = ['ti-world', 'ti-mobile', 'ti-announcement', 'ti-thought', 'ti-loop', 'ti-stats-up', 'ti-camera', 'ti-paint-bucket'];
      ?>
      <?php foreach ($content['skills']['items'] as $index => $item): ?>
        <div class="p-6 rounded-lg bg-white dark:bg-gray-800 shadow-md hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900 flex items-center justify-center">
              <i class="<?= $icons[$index % count($icons)] ?> text-purple-600 dark:text-purple-400 text-3xl"></i>
            </div>
            <h2 class="ml-4 text-xl font-semibold text-gray-900 dark:text-white">
              <?= htmlspecialchars($item['title']) ?>
            </h2>
          </div>
          <p class="text-gray-600 dark:text-gray-400 mb-4">
            <?= htmlspecialchars($item['description']) ?>
          </p>
          <a href="#" class="inline-flex items-center text-purple-600 dark:text-purple-400 hover:underline font-medium">
            En savoir plus
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <button class="flex mx-auto mt-16 text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg" data-aos="zoom-in" data-aos-delay="400">
      <?= htmlspecialchars($content['skills']['button']) ?>
    </button>
  </div>
</section>
