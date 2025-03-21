<section class="text-gray-600 body-font overflow-hidden" data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">
        <?= htmlspecialchars($content['pricing']['title']) ?>
      </h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">
        <?= htmlspecialchars($content['pricing']['description']) ?>
      </p>
    </div>
    <div class="flex flex-wrap -m-4">
      <?php foreach ($content['pricing']['packs'] as $index => $pack): ?>
      <div class="p-4 xl:w-1/4 md:w-1/2 w-full" data-aos="flip-up" data-aos-delay="<?= $index * 150 ?>">
        <div class="h-full p-6 rounded-lg border-2 <?= $pack['highlight'] ? 'border-purple-500' : 'border-gray-300' ?> flex flex-col relative overflow-hidden">
          <?php if ($pack['highlight']): ?>
            <span class="bg-purple-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
          <?php endif; ?>
          <h2 class="text-sm tracking-widest title-font mb-1 font-medium">
            <?= htmlspecialchars($pack['name']) ?>
          </h2>
          <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
            <span><?= htmlspecialchars($pack['price']) ?></span>
          </h1>

          <?php foreach ($pack['features'] as $feature): ?>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                   stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span><?= htmlspecialchars($feature) ?>
          </p>
          <?php endforeach; ?>

          <button class="flex items-center mt-auto text-white <?= $pack['highlight'] ? 'bg-purple-500 hover:bg-purple-600' : 'bg-gray-400 hover:bg-gray-500' ?> border-0 py-2 px-4 w-full focus:outline-none rounded">
            <?= htmlspecialchars($pack['button']) ?>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                 stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
          <p class="text-xs text-gray-500 mt-3"><?= htmlspecialchars($pack['note']) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
