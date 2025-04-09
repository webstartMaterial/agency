<section class="bg-white dark:<?= $bgSecondary; ?>">

  <div class="container px-5 py-24 mx-auto">

    <div class="text-center mb-20">
      <h2
        class="sm:text-3xl lg:text-3xl text-3xl font-extrabold tracking-tight title-font <?= $textTitleLightMode;?> dark:<?= $textTitle;?> mb-4">
        <?= htmlspecialchars($content['faq']['title']) ?>
      </h2>
      <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
        <?= htmlspecialchars($content['faq']['description']) ?>
      </p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full <?= $bgPrimary;?> inline-flex"></div>
      </div>
    </div>

        <div class="max-w-screen-md mx-auto">
            <div class="max-w-2xl mx-auto">
                <?php foreach ($content['faq']['items'] as $index => $item): ?>
                    <div class="border-b border-gray-200 dark:border-gray-700">
                        <button type="button"
                            class="w-full flex justify-between items-center py-4 text-left font-bold <?= $textTitleLightMode;?> dark:<?= $textTitle;?> focus:outline-none"
                            onclick="toggleFAQ(<?= $index ?>)">
                            <?= htmlspecialchars($item['question']) ?>
                            <svg class="w-5 h-5 transition-transform duration-300 <?= $index === 0 ? 'rotate-180' : '' ?>"
                                id="icon-<?= $index ?>" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="answer-<?= $index ?>"
                            class="<?= $index === 0 ? '' : 'hidden' ?> pb-4 <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>">
                            <?php foreach ($item['answer'] as $p): ?>
                                <p class="mb-2 <?= $textParagraphLightMode; ?> dark:<?= $textParagraph; ?>"><?= htmlspecialchars($p) ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>

<script>
    function toggleFAQ(index) {
        const content = document.getElementById('answer-' + index);
        const icon = document.getElementById('icon-' + index);
        content.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }
</script>