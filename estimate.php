<section id="estimate" class="bg-gray-100 dark:<?= $bgSecondary; ?> text-gray-700 dark:text-gray-300 py-16">
  <div class="container px-5 mx-auto max-w-3xl">
    <div class="text-center mb-12">
      <h2 class="sm:text-3xl text-2xl font-extrabold title-font <?= $textTitleLightMode;?> dark:<?= $textTitle;?> mb-4">
        Demander un devis personnalisé
      </h2>
      <p class="text-base leading-relaxed <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
        Vous avez trouvé une offre qui vous intéresse ? Remplissez ce formulaire pour obtenir un devis adapté à vos besoins.
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 <?= $bgPrimary;?> rounded-full inline-flex"></div>
      </div>
    </div>

    <form action="#" method="POST" class="bg-white dark:<?= $bgSecondary ;?> rounded-lg p-8 shadow-md">
      <div class="mb-4">
        <label for="name" class="block text-sm mb-2">Nom</label>
        <input type="text" id="name" name="name" placeholder="Votre nom"
          class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode;?> <?= $textTitle;?> focus:outline-none focus:ring-2 focus:ring-purple-500">
      </div>

      <div class="mb-4">
        <label for="email" class="block text-sm mb-2">Email</label>
        <input type="email" id="email" name="email" placeholder="votre@email.com"
          class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode;?> <?= $textTitle;?> focus:outline-none focus:ring-2 focus:ring-purple-500">
      </div>

      <div class="mb-4">
        <label for="offer" class="block text-sm mb-2">Offre choisie</label>
        <select id="offer" name="offer"
          class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode;?> <?= $textTitle;?> focus:outline-none focus:ring-2 focus:ring-purple-500">
          <?php foreach ($content['pricing']['packs'] as $pack): ?>
            <option value="<?= htmlspecialchars($pack['name']) ?>">
              <?= htmlspecialchars($pack['name']) ?> – <?= htmlspecialchars($pack['price']) ?>
            </option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="mb-6">
        <label for="message" class="block text-sm mb-2">Vos besoins</label>
        <textarea id="message" name="message" rows="5" placeholder="Décrivez vos attentes, besoins spécifiques, fonctionnalités souhaitées..."
          class="w-full px-4 py-2 rounded border border-gray-300 dark:border-gray-600 bg-white dark:<?= $bgQuartenary; ?> <?= $textTitleLightMode;?> <?= $textTitle;?> focus:outline-none focus:ring-2 focus:ring-purple-500 resize-none"></textarea>
      </div>

      <button type="submit"
        class="w-full <?= $bgPrimary;?> hover:<?= $bgPrimaryHover;?> dark:<?= $textTitle; ?> font-semibold py-2 px-4 rounded focus:outline-none transition">
        Envoyer la demande de devis
        <i class="ti-arrow-right ml-2"></i>
      </button>
    </form>
  </div>
</section>
