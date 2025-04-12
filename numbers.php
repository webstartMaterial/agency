<section class="<?= $textParagraphLightMode; ?> dark:text-gray-300 body-font <?= $bgPrimary;?> dark:<?= $bgPrimary; ?>" data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap justify-center -m-4 text-left">

      <?php foreach ($content['stats']['items'] as $index => $item): ?>
        <div class="p-6 sm:w-1/2 lg:w-1/4 w-full" data-aos="fade-up" data-aos-delay="<?= $index * 150 ?>">
          <div class="flex items-center rounded-xl p-6 h-full transition duration-300">
            
            <!-- Icône à gauche -->
            <div class="flex-shrink-0">
              <div class="w-20 h-20 rounded-full bg-white bg-opacity-20 dark:bg-white/30 flex items-center justify-center">
              <i class="<?= htmlspecialchars($item['icon']) ?> <?= $textWhiteLightMode ?> dark:<?= $textTitle; ?> text-5xl"></i>
              </div>
            </div>

            <!-- Séparateur -->
            <div class="h-16 w-px bg-white/30 dark:bg-white/40 mx-4"></div>

            <!-- Texte à droite -->
            <div class="flex-grow">
              <h2 class="title-font font-bold text-3xl <?= $textWhiteLightMode ?> dark:<?= $textTitle; ?> mb-1">
                <?= htmlspecialchars($item['number']) ?>
              </h2>
              <p class="leading-relaxed <?= $textWhiteLightMode ?> dark:<?= $textTitle; ?> text-base">
                <?= htmlspecialchars($item['label']) ?>
              </p>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
