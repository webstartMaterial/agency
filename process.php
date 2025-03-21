<section class="text-gray-600 body-font" data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex flex-wrap w-full">
      <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">

      <?php foreach ($content['process']['steps'] as $index => $step): ?>
          <div class="flex relative pb-12" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
            <?php if ($index < count($content['process']['steps']) - 1): ?>
              <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
              </div>
            <?php endif; ?>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 inline-flex items-center justify-center text-white relative z-10">
              <!-- Tu peux ici faire varier les icônes selon l'étape -->
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                   stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </div>
            <div class="flex-grow pl-4">
              <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">
                <?= htmlspecialchars($step['title']) ?>
              </h2>
              <p class="leading-relaxed">
                <?= htmlspecialchars($step['description']) ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
      <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12"
           src="<?= htmlspecialchars($content['process']['image']) ?>" alt="step">
    </div>
  </div>
</section>