<section id="why"
  class="<?= $textParagraphLightMode; ?> dark:text-gray-300 body-font overflow-hidden bg-white dark:<?= $bgSecondary; ?>">
  <div class="container px-5 py-24 mx-auto">

    <!-- Titre et paragraphe avec animation -->
    <div class="flex flex-wrap w-full mb-20" data-aos="fade-up" data-aos-delay="100">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h2
          class="sm:text-3xl text-2xl font-extrabold title-font <?= $textTitleLightMode; ?> dark:<?= $textTitle; ?> mb-2">
          <?= htmlspecialchars($content['presentation']['title']) ?>
        </h2>
        <div class="h-1 w-20 <?= $bgTernary; ?> rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
        <?= htmlspecialchars($content['presentation']['description']) ?>
      </p>
    </div>

    <!-- Cartes avec animation -->
    <div class="flex flex-wrap -m-4">
      <?php foreach ($content['presentation']['highlights'] as $i => $highlight): ?>
        <div class="xl:w-1/4 md:w-1/2 p-4" data-aos="zoom-in" data-aos-delay="<?= $i * 100 ?>">
          <div class="bg-gray-100 <?= $bgSecondaryLight; ?> p-6 rounded-lg h-full">
            <img class="h-40 rounded w-full object-cover object-center mb-6"
              src="<?= htmlspecialchars($highlight['image']) ?>" alt="highlight">
            <h3 class="tracking-widest <?= $textPrimary; ?> text-xs font-medium title-font uppercase">
              <?= htmlspecialchars($highlight['subtitle']) ?>
            </h3>
            <h2 class="text-lg <?= $textTitleLightMode; ?> <?= $textTitle; ?> font-medium title-font mb-2">
              <?= htmlspecialchars($highlight['title']) ?>
            </h2>
            <p class="leading-relaxed text-base <?= $textParagraph; ?>">
              <?= htmlspecialchars($highlight['description']) ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>