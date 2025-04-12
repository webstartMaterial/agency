<?php
  $title1 = str_replace('CLASS_PHOTOBOOTH', $textTernary, $content['header']['title_line1']);
  $title2 = str_replace('CLASS_PHOTOBOOTH', $textPrimary, $content['header']['title_line2']);
?>

<section class="bg-gray-100 <?= $textParagraphLightMode; ?> dark:text-gray-300 body-font  dark:<?= $bgSecondary; ?> transition-colors duration-300">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div data-aos="fade-right"
      class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">

      <h1 class="sm:text-4xl lg:text-4xl text-4xl font-extrabold tracking-tight title-font <?= $textTitleLightMode;?> dark:<?= $textTitle;?> mb-6">
        <?= $title1 ?>
        <br class="hidden lg:inline-block">
        <?= $title2 ?>
      </h1>


      <p class="mb-8 leading-relaxed <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
        <?= htmlspecialchars($content['header']['paragraph']) ?>
      </p>

      <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
        <a href="?/#offers"
          class="inline-flex items-center h-12 px-6 <?= $textWhiteLightMode ?> <?= $bgPrimary;?> hover:<?= $bgPrimaryHover; ?> dark:<?= $textTitle; ?> text-lg font-semibold rounded-2xl shadow-lg transition duration-300 ease-in-out">
          <i class="ti-bag mr-2 text-xl leading-none"></i>
          <?= htmlspecialchars($content['header']['button1']) ?>
        </a>

        <a href="?/#contact"
          class="inline-flex items-center h-12 px-6 <?= $textWhiteLightMode ?> <?= $bgQuartenary;?> hover:<?= $bgQuartenaryHover; ?> dark:<?= $textTitle; ?> text-lg font-semibold rounded-2xl shadow-lg transition duration-300 ease-in-out">
          <i class="ti-write mr-2 text-xl leading-none"></i>
          <?= htmlspecialchars($content['header']['button2']) ?>
        </a>
      </div>

      <!-- Localisation -->
      <div class="mt-6 flex flex-wrap items-center justify-center gap-6 text-lg font-medium <?= $textParagraphLightMode ?> dark:<?= $textParagraph; ?>">
        <?php foreach ($content['header']['cities'] as $city): ?>
          <div class="flex items-center gap-2">
            <i class="ti-location-pin text-xl <?= $textTernary; ?>"></i>
            <span><?= htmlspecialchars($city) ?></span>
          </div>
        <?php endforeach; ?>
      </div>

    </div>

    <div data-aos="fade-left" class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded shadow-lg dark:shadow-purple-800/20" alt="hero"
        src="<?= htmlspecialchars($content['header']['image']) ?>">
    </div>
  </div>
</section>