<section class="text-gray-600 dark:text-gray-300 body-font bg-white dark:bg-gray-900 transition-colors duration-300">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div data-aos="fade-right" class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">
        <?= htmlspecialchars($content['header']['title_line1']) ?>
        <br class="hidden lg:inline-block">
        <?= htmlspecialchars($content['header']['title_line2']) ?>
      </h1>
      
      <p class="mb-8 leading-relaxed">
        <?= htmlspecialchars($content['header']['paragraph']) ?>
      </p>
      
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg">
          <?= htmlspecialchars($content['header']['button1']) ?>
        </button>
        <button class="ml-4 inline-flex text-gray-700 dark:text-gray-200 bg-gray-100 dark:bg-gray-700 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 dark:hover:bg-gray-600 rounded text-lg">
          <?= htmlspecialchars($content['header']['button2']) ?>
        </button>
      </div>
      
    </div>
    
    <div data-aos="fade-left" class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded shadow-lg dark:shadow-purple-800/20" alt="hero" src="<?= htmlspecialchars($content['header']['image']) ?>">
    </div>
  </div>
</section>
