<section id="pricing" class="<?= $textParagraphLightMode; ?> dark:text-gray-300 body-font overflow-hidden bg-white dark:<?= $bgSecondary; ?>"
  data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h2
        class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font <?= $textTitleLightMode;?> dark:<?= $textTitle;?> mb-4">
        <?= htmlspecialchars($content['pricing']['title']) ?>
      </h2>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
        <?= htmlspecialchars($content['pricing']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full <?= $bgTernary;?> inline-flex"></div>
      </div>
    </div>

    <div class="flex flex-wrap -m-4">
      <?php foreach ($content['pricing']['packs'] as $index => $pack): ?>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full" data-aos="flip-up" data-aos-delay="<?= $index * 150 ?>">
          <div
            class="h-full p-6 rounded-lg border-2 <?= $pack['highlight'] ? $border : 'border-gray-300 dark:border-gray-700' ?>  <?= $bgSecondaryLight ;?> flex flex-col relative overflow-hidden transition-all duration-300">

            <?php if ($pack['highlight']): ?>
              <span
                class="<?= $bgPrimary;?> dark:<?= $textTitle; ?> px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
            <?php endif; ?>

            <h2 class="text-sm tracking-widest title-font mb-1 font-medium uppercase <?= $textTitleLightMode;?> <?= $textTitle;?>">
              <?= htmlspecialchars($pack['name']) ?>
            </h2>

            <h3
              class="text-5xl <?= $textTitle;?> leading-none flex items-center pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
              <span class="dark:<?= $textTitle; ?>"><?= htmlspecialchars($pack['price']) ?></span>
            </h3>

            <?php foreach ($pack['features'] as $feature): ?>
              <p class="flex items-center <?= $textParagraph; ?> mb-2">
                <span
                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 dark:<?= $bgTernary;?> dark:<?= $textTitle; ?> rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                    class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>
                <?= htmlspecialchars($feature) ?>
              </p>
            <?php endforeach; ?>

            <div class="mt-auto">
              <a
                href="?/#contact"
                class="mt-4 flex items-center w-full <?= $textWhiteLightMode; ?> dark:<?= $textTitle; ?> <?= $pack['highlight'] ? "$bgPrimary dark:$bgPrimary dark:hover:$bgPrimaryHover hover:$bgPrimaryHover" : "bg-gray-400 dark:$bgQuartenary hover:$bgQuartenaryHover dark:hover:$bgQuartenaryHover" ?> border-0 py-2 px-4 focus:outline-none rounded transition">
                <?= htmlspecialchars($pack['button']) ?>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a> 

              <p class="text-sm italic text-center <?= $textPrimary; ?> dark:<?= $textPrimary;?> font-medium mt-4 mb-4">
                <?= htmlspecialchars($pack['note']) ?>
              </p>
            </div>

            <?php if (!empty($pack['options'])): ?>
              <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                <p class="text-xs <?= $textParagraph; ?> font-semibold mb-2 uppercase tracking-wide"><?= htmlspecialchars($content['pricing']['available_options_title']) ?></p>
                <?php foreach ($pack['options'] as $option): ?>
                  <p class="text-sm text-gray-300 mb-1">• <?= htmlspecialchars($option) ?></p>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Appel à la personnalisation -->
    <?php if (!empty($content['pricing']['custom_request_notice'])): ?>
      <div class="text-center mt-16 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
        <p class="text-base leading-relaxed <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
          <?= htmlspecialchars($content['pricing']['custom_request_notice']['text']) ?>
          <a href="<?= htmlspecialchars($content['pricing']['custom_request_notice']['link_href']) ?>"
            class="underline font-semibold <?= $textPrimary; ?> hover:<?= $textPrimaryHover; ?>">
            <?= htmlspecialchars($content['pricing']['custom_request_notice']['link_label']) ?>
          </a>
          <?= htmlspecialchars($content['pricing']['custom_request_notice']['after_text']) ?>
        </p>
      </div>
    <?php endif; ?>


  </div>


</section>