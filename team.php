<section id="team" class="<?= $textParagraphLightMode; ?> dark:text-gray-300 body-font bg-gray-100 dark:<?= $bgSecondary; ?>" data-aos="fade-up">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h2
        class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font <?= $textTitleLightMode;?> dark:<?= $textTitle;?> mb-4">
        <?= htmlspecialchars($content['team']['title']) ?>
      </h2>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
        <?= htmlspecialchars($content['team']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full <?= $bgTernary;?> inline-flex"></div>
      </div>
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <?php foreach ($content['team']['members'] as $index => $member): ?>
        <div
          class="<?= $bgSecondaryLight ;?> rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex flex-col items-center text-center p-6"
          data-aos="zoom-in" data-aos-delay="<?= $index * 150 ?>">
          <img alt="<?= htmlspecialchars($member['name']) ?>"
            class="w-32 h-32 rounded-full object-cover object-center mb-4 border-4 <?= $border;?> shadow"
            src="<?= htmlspecialchars($member['image']) ?>">

          <div class="w-full">
            <h2 class="title-font font-medium text-lg <?= $textTitle;?>">
              <?= htmlspecialchars($member['name']) ?>
            </h2>
            <h3 class="<?= $textParagraph; ?> mb-2 text-sm">
              <?= htmlspecialchars($member['role']) ?>
            </h3>
            <p class="mb-4 text-sm <?= $textParagraph; ?>">
              <?= htmlspecialchars($member['bio']) ?>
            </p>

            <span class="inline-flex">
              <!-- Facebook -->
              <a class="text-[#1877F2] hover:text-[#0e63d6]">
                <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                </svg>
              </a>

              <!-- Twitter (X) -->
              <a class="ml-2 text-[#1DA1F2] hover:text-[#0d8ae5]">
                <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                  <path
                    d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012 8v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" />
                </svg>
              </a>

              <!-- WhatsApp -->
              <a class="ml-2 text-[#25D366] hover:text-[#1abb5a]">
                <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.5 8.5 0 01-12.4 7.4L3 21l2.1-6.2a8.5 8.5 0 1115.9-3.3z" />
                </svg>
              </a>
            </span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>