<section id="contact"
  class="<?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?> body-font relative bg-gray-100 dark:<?= $bgSecondary; ?>"
  id="contact">

  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h2
        class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font <?= $textTitleLightMode; ?> dark:<?= $textTitle; ?> mb-4">
        <?= htmlspecialchars($content['contact']['contact']['title']) ?>
      </h2>
      <p
        class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
        <?= htmlspecialchars($content['contact']['contact']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full <?= $bgPrimary; ?> inline-flex"></div>
      </div>
    </div>

    <div class="container px-5 mx-auto flex sm:flex-nowrap flex-wrap">
      <div
        class="lg:w-2/3 md:w-1/2 bg-gray-300 dark:<?= $bgSecondary; ?> rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative"
        data-aos="fade-right">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
          marginwidth="0" scrolling="no" src="<?= htmlspecialchars($content['contact']['contact']['map_embed_url']) ?>"
          style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>

        <div class="bg-white dark:<?= $bgSecondary; ?> relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold <?= $textTitleLightMode; ?> <?= $textTitle; ?> tracking-widest text-xs">
              Adresse</h2>
            <p class="mt-1 <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
              <?= htmlspecialchars($content['contact']['contact']['address']) ?></p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold <?= $textTitleLightMode; ?> <?= $textTitle; ?> tracking-widest text-xs">
              Email</h2>
            <a class="<?= $textPrimary; ?> leading-relaxed hover:underline"
              href="mailto:<?= htmlspecialchars($content['contact']['contact']['email']) ?>">
              <?= htmlspecialchars($content['contact']['contact']['email']) ?>
            </a>
            <h2
              class="title-font font-semibold <?= $textTitleLightMode; ?> <?= $textTitle; ?> tracking-widest text-xs mt-4">
              Téléphone</h2>
            <p class="leading-relaxed <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
              <?= htmlspecialchars($content['contact']['contact']['phone']) ?></p>
          </div>
        </div>
      </div>

      <div class="lg:w-1/2 md:w-full w-full mx-auto" data-aos="fade-left">
        <div class="mb-6 border-b border-gray-300 dark:border-gray-700 flex space-x-4" role="tablist">
          <button id="tab-contact"
            class="tab-btn text-sm font-medium <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?> py-2 px-4 border-b-2 <?= $border; ?> focus:outline-none active"
            data-target="contact-form">
            <?= htmlspecialchars($content['contact']['contact']['form_tab_label']) ?>
          </button>
          <button id="tab-devis"
            class="tab-btn text-sm font-medium <?= $textParagraph; ?>py-2 px-4 hover:<?= $textTitleLightMode; ?> dark:hover:dark:<?= $textTitle; ?>"
            data-target="devis-form">
            <?= htmlspecialchars($content['contact']['estimate']['tab_label']) ?>
          </button>
        </div>

        <div id="contact-form" class="tab-content block">
          <form action="#" method="POST" class="bg-white <?= $bgSecondaryLight; ?> rounded-lg p-6 shadow-md">
            <h2 class="text-lg font-semibold <?= $textTitle; ?> mb-4">
              <?= htmlspecialchars($content['contact']['contact']['form_title']) ?></h2>
            <p class="<?= $textParagraph; ?> mb-4"><?= htmlspecialchars($content['contact']['contact']['form_intro']) ?></p>

            <div class="mb-4">
              <label
                class="block text-sm text-gray-300"><?= htmlspecialchars($content['contact']['contact']['form_fields']['name_label']) ?></label>
              <input type="text" name="name"
                placeholder="<?= htmlspecialchars($content['contact']['contact']['form_fields']['name_placeholder']) ?>"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode; ?> <?= $textTitle; ?> focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div class="mb-4">
              <label
                class="block text-sm text-gray-300"><?= htmlspecialchars($content['contact']['contact']['form_fields']['email_label']) ?></label>
              <input type="email" name="email"
                placeholder="<?= htmlspecialchars($content['contact']['contact']['form_fields']['email_placeholder']) ?>"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode; ?> <?= $textTitle; ?> focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div class="mb-6">
              <label
                class="block text-sm text-gray-300"><?= htmlspecialchars($content['contact']['contact']['form_fields']['message_label']) ?></label>
              <textarea name="message" rows="4"
                placeholder="<?= htmlspecialchars($content['contact']['contact']['form_fields']['message_placeholder']) ?>"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode; ?> <?= $textTitle; ?> focus:outline-none focus:ring-2 focus:ring-purple-500 resize-none"></textarea>
            </div>

            <button type="submit"
              class="w-full items-center px-6 py-3 <?= $bgPrimary; ?> hover:<?= $bgPrimaryHover; ?> <?= $textWhiteLightMode; ?> dark:<?= $textTitle; ?> text-lg font-semibold rounded-2xl shadow-lg transition duration-300 ease-in-out">
              <?= htmlspecialchars($content['contact']['contact']['form_button']) ?>
            </button>

            <p class="text-xs <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?> mt-3">
              <?= htmlspecialchars($content['contact']['contact']['form_note']) ?>
            </p>
          </form>
        </div>

        <div id="devis-form" class="tab-content hidden">
          <form action="#" method="POST" class="bg-white <?= $bgSecondaryLight; ?> rounded-lg p-6 shadow-md">
            <h2 class="text-lg font-semibold <?= $textTitle; ?> mb-4">
              <?= htmlspecialchars($content['contact']['estimate']['title']) ?></h2>
            <p class="<?= $textParagraph; ?> mb-4"><?= htmlspecialchars($content['contact']['estimate']['description']) ?></p>

            <div class="mb-4">
              <label
                class="block text-sm <?= $textParagraph; ?>"><?= htmlspecialchars($content['contact']['estimate']['fields']['name_label']) ?></label>
              <input type="text" name="name"
                placeholder="<?= htmlspecialchars($content['contact']['estimate']['fields']['name_placeholder']) ?>"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode; ?> <?= $textTitle; ?> focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div class="mb-4">
              <label
                class="block text-sm <?= $textParagraph; ?>"><?= htmlspecialchars($content['contact']['estimate']['fields']['email_label']) ?></label>
              <input type="email" name="email"
                placeholder="<?= htmlspecialchars($content['contact']['estimate']['fields']['email_placeholder']) ?>"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode; ?> <?= $textTitle; ?> focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div class="mb-4">
              <label
                class="block text-sm <?= $textParagraph; ?>"><?= htmlspecialchars($content['contact']['estimate']['fields']['offer_label']) ?></label>
              <select name="offer"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode; ?> <?= $textTitle; ?> focus:outline-none focus:ring-2 focus:ring-purple-500">
                <?php foreach ($content['contact']['pricing']['packs'] as $pack): ?>
                  <option value="<?= htmlspecialchars($pack['name']) ?>">
                    <?= htmlspecialchars($pack['name']) ?> – <?= htmlspecialchars($pack['price']) ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="mb-6">
              <label
                class="block text-sm <?= $textParagraph; ?>"><?= htmlspecialchars($content['contact']['estimate']['fields']['message_label']) ?></label>
              <textarea name="message" rows="5"
                placeholder="<?= htmlspecialchars($content['contact']['estimate']['fields']['message_placeholder']) ?>"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode; ?> <?= $textTitle; ?> focus:outline-none focus:ring-2 focus:ring-purple-500 resize-none"></textarea>
            </div>

            <button type="submit"
              class="w-full items-center px-6 py-3 <?= $bgPrimary; ?> hover:<?= $bgPrimaryHover; ?> dark:<?= $textTitle; ?> text-lg font-semibold rounded-2xl shadow-lg transition duration-300 ease-in-out">
              <?= htmlspecialchars($content['contact']['estimate']['button']) ?>
              <i class="ti-arrow-right ml-2"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll(".tab-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      // Enlève la classe active + bordure à tous
      document.querySelectorAll(".tab-btn").forEach((b) => {
        b.classList.remove(
          "border-b-2",
          "<?= $border ?>",
          "<?= $textTitleLightMode ?>",
          "<?= $textTitle ?>"
        );
        b.classList.add("<?= $textParagraphLightMode; ?>", "dark:text-gray-300");
      });


      // Cache tous les contenus
      document.querySelectorAll(".tab-content").forEach((tab) => tab.classList.add("hidden"));

      // Active le bon
      btn.classList.add(
        "border-b-2",
        "<?= $border; ?>",
        "<?= $textTitleLightMode; ?>",
        "dark:<?= $textTitle; ?>"
      );
      btn.classList.remove("<?= $textParagraphLightMode; ?>", "dark:text-gray-300");

      const target = btn.getAttribute("data-target");
      document.getElementById(target).classList.remove("hidden");
    });
  });
</script>