<?php require_once("./haut_site.php"); ?>
<?php require_once("./nav.php"); ?>

<div class="container mt-10 px-5 mx-auto flex flex-col">

  <div class="flex mt-10">
    <nav class="flex text-sm <?= $textParagraphLightMode; ?> dark:text-gray-300 space-x-2 items-center"
      aria-label="Breadcrumb">
      <a href="index.php" class="inline-flex items-center hover:<?= $textPrimaryHover; ?> transition">
        <i class="bi bi-house-door-fill mr-1"></i> Accueil
      </a>
      <span>/</span>
      <span class="inline-flex items-center <?= $textPrimary; ?> font-semibold">
        <i class="bi bi-lightbulb-fill mr-1"></i> Politique de confidentialité
      </span>
    </nav>
  </div>
</div>

<section class="max-w-4xl mx-auto px-4 py-20">
  <h1 class="text-3xl md:text-4xl font-bold <?= $textPrimary; ?> mb-8 border-b border-purple-600 pb-4">
    <?= htmlspecialchars($content['confidential']['title']) ?>
  </h1>

  <div class="space-y-6 text-gray-300 text-sm leading-relaxed">
    <p class="<?= $textParagraphLightMode ?> dark:<?= $textParagraph ?>">
      <?= htmlspecialchars($content['confidential']['intro']) ?>
    </p>

    <?php foreach ($content['confidential']['sections'] as $section): ?>
      <h2 class="text-lg font-semibold <?= $textParagraphLightMode ?> dark:<?= $textParagraph ?>"><?= htmlspecialchars($section['title']) ?></h2>

      <?php if (isset($section['content'])): ?>
        <p class="<?= $textParagraphLightMode ?> dark:<?= $textParagraph ?>">
          <?= $section['content'] ?>
        </p>
      <?php endif; ?>

      <?php if (isset($section['list'])): ?>
        <ul class="list-disc ml-6 mt-2">
          <?php foreach ($section['list'] as $item): ?>
            <li class="<?= $textParagraphLightMode ?> dark:<?= $textParagraph ?>"><?= htmlspecialchars($item) ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <?php if (isset($section['footer'])): ?>
        <p class="<?= $textParagraphLightMode ?> dark:<?= $textParagraph ?> mt-2">
          <?= $section['footer'] ?>
        </p>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>

  <p class="text-xs <?= $textParagraphLightMode ?> dark:<?= $textParagraph ?> mt-10">
    Dernière mise à jour : <?= date('d/m/Y', strtotime($content['confidential']['last_update'])) ?>
  </p>
</section>

<?php require_once("./footer.php"); ?>
<?php require_once("./bas_site.php"); ?>