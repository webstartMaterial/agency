<section id="contact" class="text-gray-600 dark:text-gray-300 body-font relative bg-gray-100 dark:bg-gray-900" id="contact">

  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h2
        class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font text-gray-900 dark:text-white mb-4">
        <?= htmlspecialchars($content['contact']['title']) ?>
      </h2>
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

      <div class="lg:w-1/2 md:w-full w-full mx-auto" data-aos="fade-left">
        <!-- Tabs -->
        <div class="mb-6 border-b border-gray-300 dark:border-gray-700 flex space-x-4" role="tablist">
          <button id="tab-contact"
            class="tab-btn text-sm font-medium text-gray-900 dark:text-white py-2 px-4 border-b-2 border-purple-500 focus:outline-none active"
            data-target="contact-form">
            Contact simple
          </button>
          <button id="tab-devis"
            class="tab-btn text-sm font-medium text-gray-600 dark:text-gray-300 py-2 px-4 hover:text-gray-900 dark:hover:text-white"
            data-target="devis-form">
            Demande de devis
          </button>
        </div>

        <!-- Formulaires -->
        <div id="contact-form" class="tab-content block">
          <form action="#" method="POST" class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Contactez-nous</h2>
            <p class="text-gray-600 dark:text-gray-400 mb-4"><?= htmlspecialchars($content['contact']['form_intro']) ?>
            </p>

            <div class="mb-4">
              <label class="block text-sm text-gray-600 dark:text-gray-300">Nom</label>
              <input type="text" name="name" placeholder="Votre nom"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div class="mb-4">
              <label class="block text-sm text-gray-600 dark:text-gray-300">Email</label>
              <input type="email" name="email" placeholder="votre@email.com"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div class="mb-6">
              <label class="block text-sm text-gray-600 dark:text-gray-300">Message</label>
              <textarea name="message" rows="4" placeholder="Votre message ici..."
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500 resize-none"></textarea>
            </div>

            <button type="submit"
              class="w-full bg-purple-500 hover:bg-purple-600 text-white font-semibold py-2 px-4 rounded transition">Envoyer</button>

            <p class="text-xs text-gray-500 dark:text-gray-400 mt-3">Nous répondons sous 24h, du lundi au vendredi.</p>
          </form>
        </div>

        <div id="devis-form" class="tab-content hidden">
          <form action="#" method="POST" class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4"><?= htmlspecialchars($content['estimate']['title']) ?></h2>
            <p class="text-gray-600 dark:text-gray-400 mb-4"><?= htmlspecialchars($content['estimate']['description']) ?>

            <div class="mb-4">
              <label class="block text-sm text-gray-600 dark:text-gray-300">Nom</label>
              <input type="text" name="name" placeholder="Votre nom"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div class="mb-4">
              <label class="block text-sm text-gray-600 dark:text-gray-300">Email</label>
              <input type="email" name="email" placeholder="votre@email.com"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500" />
            </div>

            <div class="mb-4">
              <label class="block text-sm text-gray-600 dark:text-gray-300">Offre choisie</label>
              <select name="offer"
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500">
                <?php foreach ($content['pricing']['packs'] as $pack): ?>
                  <option value="<?= htmlspecialchars($pack['name']) ?>">
                    <?= htmlspecialchars($pack['name']) ?> – <?= htmlspecialchars($pack['price']) ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="mb-6">
              <label class="block text-sm text-gray-600 dark:text-gray-300">Vos besoins</label>
              <textarea name="message" rows="5" placeholder="Fonctionnalités, attentes, budget, délais..."
                class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-purple-500 resize-none"></textarea>
            </div>

            <button type="submit"
              class="w-full bg-purple-500 hover:bg-purple-600 text-white font-semibold py-2 px-4 rounded transition">
              Envoyer la demande
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
        b.classList.remove("border-b-2", "border-purple-500", "text-gray-900", "dark:text-white");
        b.classList.add("text-gray-600", "dark:text-gray-300");
      });

      // Cache tous les contenus
      document.querySelectorAll(".tab-content").forEach((tab) => tab.classList.add("hidden"));

      // Active le bon
      btn.classList.add("border-b-2", "border-purple-500", "text-gray-900", "dark:text-white");
      btn.classList.remove("text-gray-600", "dark:text-gray-300");

      const target = btn.getAttribute("data-target");
      document.getElementById(target).classList.remove("hidden");
    });
  });
</script>

