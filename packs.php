<!-- NOS PACK -->

<section id="offers" class="bg-gray-100 dark:bg-gray-900 text-gray-700 dark:text-gray-300 py-20">
  <div class="container mx-auto px-5">

  <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center" data-aos="fade-down">
      <h2
        class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font text-gray-900 dark:text-white mb-4">
        <?= htmlspecialchars($content['offer_details']['title']) ?>
      </h2>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500 dark:text-gray-400">
        <?= htmlspecialchars($content['offer_details']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-purple-500 inline-flex"></div>
      </div>
    </div>

    <?php foreach ($content['offer_details']['items'] as $index => $offer): ?>
      <div class="flex flex-col <?= $index % 2 === 0 ? 'lg:flex-row' : 'lg:flex-row-reverse' ?> items-center gap-10 mb-20"
        data-aos="fade-up">

        <!-- Texte -->
        <div class="lg:w-1/2 w-full <?= $index % 2 === 0 ? 'lg:pr-10' : 'lg:pl-10' ?>">
          <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-900 dark:text-white mb-4">
            <?= htmlspecialchars($offer['title']) ?>
          </h2>
          <p class="text-gray-600 dark:text-gray-400 mb-6">
            <?= htmlspecialchars($offer['description']) ?>
          </p>
          <ul class="space-y-4 border-t border-gray-300 dark:border-gray-700 pt-6">
            <?php foreach ($offer['features'] as $feature): ?>
              <li class="flex items-start">
                <i class="ti-check text-purple-500 text-lg mr-3 mt-1"></i>
                <span><?= htmlspecialchars($feature) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>

          <div class="mt-8">
            <a href="#pricing"
              class="inline-flex items-center px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white text-lg font-semibold rounded-2xl shadow-lg transition duration-300 ease-in-out">
              Découvrir nos offres
              <svg class="w-5 h-5 ml-2 animate-pulse" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
            </a>
          </div>
        </div>

        <!-- Images -->
        <div class="lg:w-1/2 w-full grid grid-cols-2 gap-4" data-aos="zoom-in">
          <?php foreach ($offer['images'] as $image): ?>
            <img src="<?= htmlspecialchars($image) ?>" alt="feature" class="rounded-lg shadow w-full h-auto object-cover">
          <?php endforeach; ?>
        </div>

      </div>
    <?php endforeach; ?>


  </div>
</section>