<section class="bg-gray-100 dark:bg-gray-900 pb-20">
  <div class="container mx-auto px-5">
    <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4 text-center">
      <?php foreach ($content['banner_services'] as $service): ?>
        <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow transition transform hover:-translate-y-2 hover:shadow-2xl duration-300 ease-in-out">
          <div class="w-16 h-16 mx-auto mb-4 text-purple-500">
            <i class="<?= htmlspecialchars($service['icon']) ?> text-5xl leading-none"></i>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
            <?= htmlspecialchars($service['title']) ?>
          </h3>
          <p class="text-gray-600 dark:text-gray-400 text-sm">
            <?= htmlspecialchars($service['description']) ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>