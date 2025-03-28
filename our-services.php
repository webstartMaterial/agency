<?php require_once("./haut_site.php"); ?>
<?php require_once("./nav.php"); ?>

<div class="container px-5 py-24 mx-auto flex flex-col">

  <div class="flex">
    <nav class="flex text-sm text-gray-500 dark:text-gray-300 space-x-2 items-center" aria-label="Breadcrumb">
      <a href="/" class="inline-flex items-center hover:text-purple-600 transition">
        <i class="bi bi-house-door-fill mr-1"></i> Accueil
      </a>
      <span>/</span>
      <span class="inline-flex items-center text-purple-600 font-semibold">
        <i class="bi bi-lightbulb-fill mr-1"></i> Nos Offres
      </span>
    </nav>
  </div>
</div>


<section class="text-gray-600 dark:text-gray-300 body-font overflow-hidden bg-white dark:bg-gray-900">
  <div class="container px-5 mx-auto flex flex-col">
    <div class="lg:w-6/6 mx-auto">
      <div class="rounded-lg h-64 overflow-hidden">
        <img alt="cover" class="object-cover object-center h-full w-full"
          src="<?= htmlspecialchars($content['presentation']['intro']['image']) ?>">
      </div>
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
          <div
            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400 dark:bg-gray-700 dark:text-gray-300">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 dark:text-white text-lg">
              <?= htmlspecialchars($content['presentation']['intro']['name']) ?>
            </h2>
            <div class="w-12 h-1 bg-purple-500 rounded mt-2 mb-4"></div>
            <p class="text-base"><?= htmlspecialchars($content['presentation']['intro']['role']) ?></p>
          </div>
        </div>
        <div
          class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
          <p class="leading-relaxed text-lg mb-4">
            <?= htmlspecialchars($content['presentation']['intro']['description']) ?>
          </p>

          <div class="mt-8">
            <a href="#packs"
              class="inline-flex items-center px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white text-lg font-semibold rounded-2xl shadow-lg transition duration-300 ease-in-out">
              Découvrir nos offres
              <svg class="w-5 h-5 ml-2 animate-pulse" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
            </a>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>






<!-- PRICING -->

<section id="pricing" class="text-gray-600 dark:text-gray-300 body-font overflow-hidden bg-white dark:bg-gray-900">
  <div class="container px-5 py-24 mx-auto">
    <div class="text-center mb-20">
      <h2
        class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font text-gray-900 dark:text-white mb-4">
        <?= htmlspecialchars($content['pricing']['title']) ?>
      </h2>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500 dark:text-gray-400">
        <?= htmlspecialchars($content['pricing']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-purple-500 inline-flex"></div>
      </div>
    </div>


    <div class="flex flex-wrap -m-4">
      <?php foreach ($content['pricing']['packs'] as $index => $pack): ?>
        <div class="p-4 xl:w-1/4 md:w-1/2 w-full" data-aos="flip-up" data-aos-delay="<?= $index * 150 ?>">
          <div
            class="h-full p-6 rounded-lg border-2 <?= $pack['highlight'] ? 'border-purple-500' : 'border-gray-300 dark:border-gray-700' ?> bg-white dark:bg-gray-800 flex flex-col relative overflow-hidden transition-all duration-300">

            <?php if ($pack['highlight']): ?>
              <span
                class="bg-purple-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
            <?php endif; ?>

            <h2 class="text-sm tracking-widest title-font mb-1 font-medium uppercase text-gray-900 dark:text-white">
              <?= htmlspecialchars($pack['name']) ?>
            </h2>

            <h1
              class="text-5xl text-gray-900 dark:text-white leading-none flex items-center pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
              <span><?= htmlspecialchars($pack['price']) ?></span>
            </h1>

            <?php foreach ($pack['features'] as $feature): ?>
              <p class="flex items-center text-gray-600 dark:text-gray-300 mb-2">
                <span
                  class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 dark:bg-purple-500 text-white rounded-full flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                    class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                  </svg>
                </span>
                <?= htmlspecialchars($feature) ?>
              </p>
            <?php endforeach; ?>

            <div class="mt-auto">
              <button
                class="mt-4 flex items-center w-full text-white <?= $pack['highlight'] ? 'bg-purple-500 hover:bg-purple-600' : 'bg-gray-400 dark:bg-gray-600 hover:bg-gray-500 dark:hover:bg-gray-500' ?> border-0 py-2 px-4 focus:outline-none rounded transition">
                <?= htmlspecialchars($pack['button']) ?>
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </button>

              <p class="text-sm italic text-center text-purple-600 dark:text-purple-400 font-medium mt-4 mb-4">
                <?= htmlspecialchars($pack['note']) ?>
              </p>
            </div>

            <?php if (!empty($pack['options'])): ?>
              <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                <p class="text-xs text-gray-500 dark:text-gray-400 font-semibold mb-2 uppercase tracking-wide">Options
                  disponibles</p>
                <?php foreach ($pack['options'] as $option): ?>
                  <p class="text-sm text-gray-600 dark:text-gray-300 mb-1">• <?= htmlspecialchars($option) ?></p>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once("./estimate.php"); ?>


<?php require_once("./footer.php"); ?>
<?php require_once("./bas_site.php"); ?>