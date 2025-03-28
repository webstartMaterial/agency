<section id="why" class="text-gray-600 dark:text-gray-300 body-font overflow-hidden bg-white dark:bg-gray-900">
  <div class="container px-5 py-24 mx-auto">
    
    <!-- Titre et paragraphe avec animation -->
    <div class="flex flex-wrap w-full mb-20" data-aos="fade-up" data-aos-delay="100">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h2 class="sm:text-3xl text-2xl font-extrabold title-font text-gray-900 dark:text-white mb-2">
          Pourquoi choisir notre agence ?
        </h2>
        <div class="h-1 w-20 bg-purple-500 rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500 dark:text-gray-400">
        Nous mettons tout en œuvre pour proposer des solutions fiables, personnalisées et rapides à mettre en place.
      </p>
    </div>

    <!-- Cartes avec animation -->
    <div class="flex flex-wrap -m-4">
      <?php foreach ($content['presentation']['highlights'] as $i => $highlight): ?>
        <div class="xl:w-1/4 md:w-1/2 p-4" data-aos="zoom-in" data-aos-delay="<?= $i * 100 ?>">
          <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg h-full">
            <img class="h-40 rounded w-full object-cover object-center mb-6"
              src="<?= htmlspecialchars($highlight['image']) ?>" alt="highlight">
            <h3 class="tracking-widest text-purple-500 text-xs font-medium title-font uppercase">
              <?= htmlspecialchars($highlight['subtitle']) ?>
            </h3>
            <h2 class="text-lg text-gray-900 dark:text-white font-medium title-font mb-2">
              <?= htmlspecialchars($highlight['title']) ?>
            </h2>
            <p class="leading-relaxed text-base text-gray-600 dark:text-gray-300">
              <?= htmlspecialchars($highlight['description']) ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>