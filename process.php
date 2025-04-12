<section class="<?= $textParagraphLightMode; ?> dark:text-gray-300 body-font dark:<?= $bgSecondary; ?>" data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">

      <!-- Titre + description -->
      <div class="w-full mb-20 text-center" data-aos="fade-down">
      <h2 class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font <?= $textTitleLightMode;?> dark:<?= $textTitle;?> mb-4">
        <?= htmlspecialchars($content['process']['title']) ?>
      </h2>
      <p class="lg:w-1/2 w-full mx-auto leading-relaxed <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
        <?= htmlspecialchars($content['process']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full <?= $bgTernary;?> inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap w-full">

      <!-- Étapes texte -->
      <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
        <?php foreach ($content['process']['steps'] as $index => $step): ?>
          <div class="flex relative pb-12" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
            <?php if ($index < count($content['process']['steps']) - 1): ?>
              <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                <div class="h-full w-1 bg-gray-300 dark:<?= $bgQuartenary; ?> pointer-events-none"></div>
              </div>
            <?php endif; ?>

            <div class="flex-shrink-0 w-10 h-10 rounded-full <?= $textWhiteLightMode;?> <?= $bgPrimary;?> inline-flex items-center justify-center dark:<?= $textTitle; ?> relative z-10 text-lg">
              <i class="<?= htmlspecialchars($step['icon']) ?>"></i>
            </div>

            <div class="flex-grow pl-4">
              <h2 class="font-bold title-font text-sm <?= $textTitleLightMode;?> <?= $textTitle;?> mb-1 tracking-wider">
                <?= htmlspecialchars($step['title']) ?>
              </h2>
              <p class="leading-relaxed <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
                <?= htmlspecialchars($step['description']) ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>

        <!-- CTA -->
        <div class="mt-8" data-aos="fade-up" data-aos-delay="500">
          <a href="/?#contact" 
          class="inline-flex items-center px-6 py-3 <?= $bgPrimary;?> hover:<?= $bgPrimaryHover; ?> <?= $textWhiteLightMode;?> dark:<?= $textTitle; ?> text-lg font-semibold rounded-2xl shadow-lg transition duration-300 ease-in-out">
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
