<section class="text-gray-600 body-font bg-gray-100" data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center" data-aos="fade-down">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
        <?= htmlspecialchars($content['skills']['title']) ?>
      </h1>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">
        <?= htmlspecialchars($content['skills']['description']) ?>
      </p>
    </div>
    <div class="flex flex-wrap -m-4">
      <?php foreach ($content['skills']['items'] as $index => $item): ?>
        <div class="xl:w-1/3 md:w-1/2 p-4" data-aos="<?= $index % 2 === 0 ? 'fade-up' : 'fade-left' ?>" data-aos-delay="<?= $index * 100 ?>">
          <div class="border border-gray-200 p-6 rounded-lg">
            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-purple-100 text-purple-500 mb-4">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                   stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
              <?= htmlspecialchars($item['title']) ?>
            </h2>
            <p class="leading-relaxed text-base">
              <?= htmlspecialchars($item['description']) ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <button class="flex mx-auto mt-16 text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg" data-aos="zoom-in" data-aos-delay="400">
      <?= htmlspecialchars($content['skills']['button']) ?>
    </button>
  </div>
</section>
