<section class="<?= $textParagraphLightMode; ?> dark:text-gray-300 body-font bg-gray-100 dark:<?= $bgSecondary; ?>" data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center" data-aos="fade-down">
      <h2
        class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font <?= $textTitleLightMode;?> dark:<?= $textTitle;?> mb-4">
        <?= htmlspecialchars($content['skills']['title']) ?>
      </h2>
      <p class="lg:w-1/2 w-full leading-relaxed <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
        <?= htmlspecialchars($content['skills']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full <?= $bgPrimary;?> inline-flex"></div>
      </div>
    </div>


    <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
      <?php
      $icons = ['ti-world', 'ti-mobile', 'ti-announcement', 'ti-thought', 'ti-loop', 'ti-stats-up', 'ti-camera', 'ti-paint-bucket'];
      ?>
      <?php foreach ($content['skills']['items'] as $index => $item): ?>
        <div class="p-6 rounded-lg bg-white dark:<?= $bgSecondary ;?> shadow-md hover:shadow-xl transition duration-300"
          data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 rounded-full bg-purple-100 dark:bg-purple-900 flex items-center justify-center">
              <i class="<?= $icons[$index % count($icons)] ?> <?= $textPrimary; ?> dark:<?= $textPrimary;?> text-3xl"></i>
            </div>
            <h2 class="ml-4 text-xl font-semibold <?= $textTitleLightMode;?> <?= $textTitle;?>">
              <?= htmlspecialchars($item['title']) ?>
            </h2>
          </div>
          <p class="<?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?> mb-4">
            <?= htmlspecialchars($item['description']) ?>
          </p>
          <a href="#" class="inline-flex items-center <?= $textPrimary; ?> dark:<?= $textPrimary;?> hover:underline font-medium">
            En savoir plus
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center">
      <a
        href="estimate.php"
        class="inline-flex items-center justify-center mx-auto mt-16 dark:<?= $textTitle; ?> <?= $bgPrimary;?> border-0 py-2 px-8 focus:outline-none hover:<?= $bgPrimaryHover;?> rounded text-lg"
        data-aos="zoom-in" data-aos-delay="400">
        <i class="ti-comments mr-2 text-xl leading-none"></i>
        <?= htmlspecialchars($content['skills']['button']) ?>
      </a>
    </div>
  </div>
</section>