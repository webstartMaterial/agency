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
                <i class="bi bi-lightbulb-fill mr-1"></i> Conditions Générales d’Utilisation
            </span>
        </nav>
    </div>

</div>

<section class="max-w-4xl mx-auto px-4 py-20">
    <h1 class="text-3xl md:text-4xl font-bold <?= $textPrimary; ?> mb-8 border-b border-purple-600 pb-4">
        <?= htmlspecialchars($content['cgu']['title']) ?>
    </h1>

    <div class="space-y-6 text-gray-300 text-sm leading-relaxed">
        <?php foreach ($content['cgu']['sections'] as $section): ?>
            <h2 class="text-lg font-semibold <?= $textParagraphLightMode ?> dark:<?= $textParagraph ?>"><?= htmlspecialchars($section['title']) ?></h2>
            <p class="<?= $textParagraphLightMode ?> dark:<?= $textParagraph ?>">
                <?= $section['title'] === "5. Données personnelles"
                    ? $section['content'] // contient un lien HTML
                    : htmlspecialchars($section['content']) ?>
            </p>
        <?php endforeach; ?>
    </div>

    <p class="text-xs <?= $textParagraphLightMode ?> dark:<?= $textParagraph ?> mt-10">Dernière mise à jour :
        <?= date('d/m/Y', strtotime($content['cgu']['last_update'])) ?></p>
</section>

<?php require_once("./footer.php"); ?>
<?php require_once("./bas_site.php"); ?>