<section class="text-gray-600 dark:text-gray-300 bg-gray-100 dark:bg-gray-900 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex w-full mb-20 flex-wrap">
      <h1 data-aos="fade-right" class="sm:text-3xl text-2xl font-medium title-font text-gray-900 dark:text-white lg:w-1/3 lg:mb-0 mb-4">
        <?= htmlspecialchars($content['portfolio']['title']) ?>
      </h1>
      <p data-aos="fade-left" class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base text-gray-600 dark:text-gray-400">
        <?= htmlspecialchars($content['portfolio']['description']) ?>
      </p>
    </div>

    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <?php for ($i = 0; $i < 3; $i++): ?>
          <div class="md:p-2 p-1 <?= $i === 2 ? 'w-full' : 'w-1/2' ?>" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
            <div class="relative group overflow-hidden rounded-md shadow">
              <img
                alt="<?= htmlspecialchars($content['portfolio']['projects'][$i]['title']) ?>"
                title="<?= htmlspecialchars($content['portfolio']['projects'][$i]['title']) ?>"
                class="w-full object-cover h-full object-center block transition duration-300 ease-in-out"
                src="<?= htmlspecialchars($content['portfolio']['projects'][$i]['image']) ?>">

              <!-- Overlay -->
              <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out flex flex-col justify-center items-center text-center px-4">
                <h2 class="text-white text-lg font-semibold">
                  <?= htmlspecialchars($content['portfolio']['projects'][$i]['title']) ?>
                </h2>
                <p class="text-sm text-gray-300 mt-1">
                  <?= htmlspecialchars($content['portfolio']['projects'][$i]['client']) ?> — <?= htmlspecialchars($content['portfolio']['projects'][$i]['type']) ?>
                </p>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>

      <div class="flex flex-wrap w-1/2">
        <?php for ($i = 3; $i < 6; $i++): ?>
          <div class="md:p-2 p-1 <?= $i === 3 ? 'w-full' : 'w-1/2' ?>" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
            <div class="relative group overflow-hidden rounded-md shadow">
              <img
                alt="<?= htmlspecialchars($content['portfolio']['projects'][$i]['title']) ?>"
                title="<?= htmlspecialchars($content['portfolio']['projects'][$i]['title']) ?>"
                class="w-full object-cover h-full object-center block transition duration-300 ease-in-out"
                src="<?= htmlspecialchars($content['portfolio']['projects'][$i]['image']) ?>">

              <!-- Overlay -->
              <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out flex flex-col justify-center items-center text-center px-4">
                <h2 class="text-white text-lg font-semibold">
                  <?= htmlspecialchars($content['portfolio']['projects'][$i]['title']) ?>
                </h2>
                <p class="text-sm text-gray-300 mt-1">
                  <?= htmlspecialchars($content['portfolio']['projects'][$i]['client']) ?> — <?= htmlspecialchars($content['portfolio']['projects'][$i]['type']) ?>
                </p>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
