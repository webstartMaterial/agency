<section class="text-gray-600 dark:text-gray-300 body-font bg-gray-100 dark:bg-gray-900" data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">

      <!-- Titre + description -->
      <div class="w-full mb-20 text-center" data-aos="fade-down">
      <h2 class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font text-gray-900 dark:text-white mb-4">
        <?= htmlspecialchars($content['process']['title']) ?>
      </h2>
      <p class="lg:w-1/2 w-full mx-auto leading-relaxed text-gray-500 dark:text-gray-400">
        <?= htmlspecialchars($content['process']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-purple-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap w-full">

      <!-- Étapes texte -->
      <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
        <?php foreach ($content['process']['steps'] as $index => $step): ?>
          <div class="flex relative pb-12" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
            <?php if ($index < count($content['process']['steps']) - 1): ?>
              <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                <div class="h-full w-1 bg-gray-300 dark:bg-gray-700 pointer-events-none"></div>
              </div>
            <?php endif; ?>

            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-500 inline-flex items-center justify-center text-white relative z-10 text-lg">
              <i class="<?= htmlspecialchars($step['icon']) ?>"></i>
            </div>

            <div class="flex-grow pl-4">
              <h2 class="font-bold title-font text-sm text-gray-900 dark:text-white mb-1 tracking-wider">
                <?= htmlspecialchars($step['title']) ?>
              </h2>
              <p class="leading-relaxed text-gray-600 dark:text-gray-400">
                <?= htmlspecialchars($step['description']) ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>

        <!-- CTA -->
        <div class="mt-8" data-aos="fade-up" data-aos-delay="500">
          <a href="estimate.php" class="inline-flex items-center text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg">
            <i class="ti-comments mr-2 text-xl leading-none"></i>
            <?= htmlspecialchars($content['process']['button']) ?>
          </a>
        </div>
      </div>

      <!-- Images steps plus petites -->
      <div class="lg:w-3/5 md:w-1/2 md:mt-0 mt-12 grid grid-cols-2 gap-4">
        <?php foreach ($content['process']['steps'] as $index => $step): ?>
          <?php if (!empty($step['image'])): ?>
            <div class="w-full h-40 rounded-lg overflow-hidden shadow-md" data-aos="zoom-in-left" data-aos-delay="<?= $index * 100 ?>">
              <img src="<?= htmlspecialchars($step['image']) ?>" alt="Étape <?= $index + 1 ?>"
                   class="w-full h-full object-cover object-center">
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>
