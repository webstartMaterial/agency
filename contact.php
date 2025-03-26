<section class="text-gray-600 dark:text-gray-300 body-font relative bg-gray-100 dark:bg-gray-900" id="contact">

  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 dark:text-white mb-4">
        <?= htmlspecialchars($content['contact']['title']) ?>
      </h1>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500 dark:text-gray-400">
        <?= htmlspecialchars($content['contact']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-purple-500 inline-flex"></div>
      </div>
    </div>

    <div class="container px-5 mx-auto flex sm:flex-nowrap flex-wrap">

      <!-- Carte + Coordonnées -->
      <div
        class="lg:w-2/3 md:w-1/2 bg-gray-300 dark:bg-gray-800 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative"
        data-aos="fade-right">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
          marginwidth="0" scrolling="no" src="<?= htmlspecialchars($content['contact']['map_embed_url']) ?>"
          style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>

        <div class="bg-white dark:bg-gray-800 relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 dark:text-white tracking-widest text-xs">ADDRESS</h2>
            <p class="mt-1"><?= htmlspecialchars($content['contact']['address']) ?></p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 dark:text-white tracking-widest text-xs">EMAIL</h2>
            <a class="text-purple-500 leading-relaxed hover:underline"
              href="mailto:<?= htmlspecialchars($content['contact']['email']) ?>">
              <?= htmlspecialchars($content['contact']['email']) ?>
            </a>
            <h2 class="title-font font-semibold text-gray-900 dark:text-white tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed"><?= htmlspecialchars($content['contact']['phone']) ?></p>
          </div>
        </div>
      </div>

      <!-- Formulaire -->
      <div class="lg:w-1/3 md:w-1/2 bg-white dark:bg-gray-800 p-4 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0"
        data-aos="fade-left">
        <h2 class="text-gray-900 dark:text-white text-lg mb-1 font-medium title-font">Contactez-nous</h2>
        <p class="leading-relaxed mb-5 text-gray-600 dark:text-gray-400">
          <?= htmlspecialchars($content['contact']['form_intro']) ?>
        </p>

        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600 dark:text-gray-300">Nom</label>
          <input type="text" id="name" name="name"
            class="w-full bg-white dark:bg-gray-700 rounded border border-gray-300 dark:border-gray-600 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-900 dark:text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>

        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600 dark:text-gray-300">Email</label>
          <input type="email" id="email" name="email"
            class="w-full bg-white dark:bg-gray-700 rounded border border-gray-300 dark:border-gray-600 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 text-base outline-none text-gray-900 dark:text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>

        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600 dark:text-gray-300">Message</label>
          <textarea id="message" name="message"
            class="w-full bg-white dark:bg-gray-700 rounded border border-gray-300 dark:border-gray-600 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 h-32 text-base outline-none text-gray-900 dark:text-white py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>

        <button
          class="text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg">Envoyer</button>

        <p class="text-xs text-gray-500 dark:text-gray-400 mt-3">Nous répondons sous 24h, du lundi au vendredi.</p>
      </div>
    </div>
  </div>
</section>