<section class="text-gray-600 dark:text-gray-300 body-font bg-gray-100 dark:bg-gray-900">
  <div class="container px-5 py-24 mx-auto">
    <h1 class="text-3xl font-medium title-font text-gray-900 dark:text-white mb-12 text-center" data-aos="fade-up">
      <?= htmlspecialchars($content['testimonials']['title']) ?>
    </h1>
    <div class="flex flex-wrap -m-4">
      <?php foreach ($content['testimonials']['items'] as $index => $testimonial): ?>
        <div class="p-4 md:w-1/2 w-full" data-aos="fade-up" data-aos-delay="<?= $index * 200 ?>">
          <div class="h-full bg-gray-100 dark:bg-gray-800 p-8 rounded shadow-md hover:shadow-xl transition-shadow duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              class="block w-5 h-5 text-purple-400 mb-4" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 
              22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 
              37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 
              67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 
              66.2-28.6 122.101-64.8 167.7-108.8 
              55.601-53.7 93.7-114.3 114.3-181.9 
              20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 
              913.497c65.4-28.5 121-64.699 166.9-108.6 
              56.1-53.7 94.4-114.1 115-181.2 
              20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 
              0-50 22.4-50 50v304c0 27.601 22.4 50 50 
              50h145.5c-1.9 79.601-20.4 143.3-55.4 
              191.2-27.6 37.8-69.4 69.1-125.3 
              93.8-25.7 11.3-36.8 41.7-24.8 
              67.101l35.9 75.8c11.601 24.399 
              40.501 35.2 65.301 24.399z">
              </path>
            </svg>
            <p class="leading-relaxed mb-6 italic text-gray-700 dark:text-gray-300">
              “<?= htmlspecialchars($testimonial['text']) ?>”
            </p>
            <a class="inline-flex items-center">
              <img alt="<?= htmlspecialchars($testimonial['name']) ?>"
                src="<?= htmlspecialchars($testimonial['image']) ?>"
                class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-4">
                <span class="title-font font-semibold text-gray-900 dark:text-white">
                  <?= htmlspecialchars($testimonial['name']) ?>
                </span>
                <span class="text-gray-500 dark:text-gray-400 text-sm">
                  <?= htmlspecialchars($testimonial['role']) ?>
                </span>
              </span>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
