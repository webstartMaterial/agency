<section class="text-gray-600 dark:text-gray-300 body-font bg-gray-100 dark:bg-gray-900" data-aos="zoom-in-up">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h2
        class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font text-gray-900 dark:text-white mb-4">
        <?= htmlspecialchars($content['services']['title']) ?>
      </h2>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500 dark:text-gray-400">
        <?= htmlspecialchars($content['services']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-purple-500 inline-flex"></div>
      </div>
    </div>

    <div class="grid md:grid-cols-3 gap-10">
      <?php foreach ($content['services']['items'] as $index => $item): ?>
        <div
          class="hover:ring-2 hover:ring-purple-500 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg text-center transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl"
          data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
          <img src="<?= $item['img'] ?>" alt="<?= htmlspecialchars($item['title']) ?>"
            class="rounded w-full h-48 object-cover mb-4">
          <h2 class="text-lg text-gray-900 dark:text-white font-medium title-font mb-2">
            <?= htmlspecialchars($item['title']) ?>
          </h2>
          <p class="leading-relaxed text-base text-gray-600 dark:text-gray-400 mb-4">
            <?= htmlspecialchars($item['description']) ?>
          </p>
          <a href="#" class="text-purple-500 inline-flex items-center hover:underline">
            <?= htmlspecialchars($item['link_label']) ?>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center">

      <a href="?#pricing"
        class="inline-flex items-center justify-center mx-auto mt-16 text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg"
        data-aos="fade-up">
        <?= htmlspecialchars($content['services']['button']) ?>
        <i class="ti-arrow-right ml-2 text-xl leading-none"></i>
      </a>

    </div>
  </div>
</section>