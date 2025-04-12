<section class="bg-gray-100 dark:<?= $bgSecondary; ?> pb-20">
  <div class="container mx-auto px-5">
    <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4 text-center">
      <?php foreach ($content['banner_services'] as $service): ?>
        <div class="p-6 <?= $bgPrimary; ?> dark:<?= $bgSecondaryLight ;?> rounded-lg shadow transition transform hover:-translate-y-2 hover:shadow-2xl duration-300 ease-in-out">
          <div class="w-16 h-16 mx-auto mb-4 <?= $textPrimary ;?>">
            <i class="<?= htmlspecialchars($service['icon']) ?> text-5xl leading-none"></i>
          </div>
          <h3 class="text-lg font-semibold <?= $textTitle;?> mb-2">
            <?= htmlspecialchars($service['title']) ?>
          </h3>
          <p class="<?= $textParagraph; ?> text-sm">
            <?= htmlspecialchars($service['description']) ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>