<section class="text-gray-600 body-font bg-gray-100" data-aos="zoom-in-up">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">
        <?= htmlspecialchars($content['services']['title']) ?>
      </h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500">
        <?= htmlspecialchars($content['services']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-purple-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
      <?php foreach ($content['services']['items'] as $item): ?>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center" data-aos="zoom-in" data-aos-delay="<?= $index * 100 ?>">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-5 flex-shrink-0">
          <!-- Icône statique générique -->
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
               stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3"><?= htmlspecialchars($item['title']) ?></h2>
          <p class="leading-relaxed text-base"><?= htmlspecialchars($item['description']) ?></p>
          <a class="mt-3 text-purple-500 inline-flex items-center" href="#">
            <?= htmlspecialchars($item['link_label']) ?>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="flex mx-auto mt-16 text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg" data-aos="fade-up">
      <?= htmlspecialchars($content['services']['button']) ?>
    </button>
  </div>
</section>