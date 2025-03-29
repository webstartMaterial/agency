<?php require_once("./haut_site.php"); ?>
<?php require_once("./nav.php"); ?>

<div class="container px-5 mx-auto flex flex-col">

  <div class="flex mt-10">
    <nav class="flex text-sm text-gray-500 dark:text-gray-300 space-x-2 items-center" aria-label="Breadcrumb">
      <a href="index.php" class="inline-flex items-center hover:text-purple-600 transition">
        <i class="bi bi-house-door-fill mr-1"></i> Accueil
      </a>
      <span>/</span>
      <span class="inline-flex items-center text-purple-600 font-semibold">
        <i class="bi bi-lightbulb-fill mr-1"></i> Conditions Générales d’Utilisation
      </span>
    </nav>
  </div>

</div>

<section class="max-w-4xl mx-auto px-4 py-20">
    <h1 class="text-3xl md:text-4xl font-bold text-purple-400 mb-8 border-b border-purple-600 pb-4">
        Conditions Générales d’Utilisation (CGU)
    </h1>

    <div class="space-y-6 text-gray-300 text-sm leading-relaxed">
        <h2 class="text-lg font-semibold text-purple-300">1. Objet</h2>
        <p>
            Les présentes Conditions Générales d’Utilisation régissent l’accès et l’usage du site par tout utilisateur. En naviguant sur ce site, vous acceptez pleinement et entièrement ces CGU.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">2. Accès au site</h2>
        <p>
            Le site est accessible 7j/7 et 24h/24 sauf interruption pour maintenance ou cas de force majeure. L’éditeur ne peut être tenu responsable des éventuelles interruptions.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">3. Utilisation du site</h2>
        <p>
            L’utilisateur s’engage à ne pas perturber le bon fonctionnement du site et à ne pas utiliser les services de manière frauduleuse ou illégale.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">4. Propriété intellectuelle</h2>
        <p>
            Tous les contenus présents sur le site (textes, images, vidéos, graphismes, logos…) sont protégés par les lois sur la propriété intellectuelle. Toute reproduction non autorisée est strictement interdite.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">5. Données personnelles</h2>
        <p>
            Les informations collectées via le formulaire de contact ou le chat sont traitées conformément au RGPD. Consultez notre <a href="confidentialite.php" class="text-purple-400 hover:underline">politique de confidentialité</a> pour plus d’informations.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">6. Responsabilité</h2>
        <p>
            L’éditeur ne saurait être tenu responsable en cas d’inexactitude ou d’erreur dans les contenus ou services proposés. L’utilisateur reste seul responsable de l’usage qu’il fait du site.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">7. Modification des CGU</h2>
        <p>
            Les présentes CGU peuvent être modifiées à tout moment. Il appartient à l’utilisateur de les consulter régulièrement.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">8. Loi applicable</h2>
        <p>
            Les présentes CGU sont régies par la loi française. En cas de litige, les tribunaux compétents seront ceux du ressort du siège social de l’éditeur.
        </p>
    </div>

    <p class="text-xs text-gray-500 mt-10">Dernière mise à jour : <?= date('d/m/Y') ?></p>
</section>

<?php require_once("./footer.php"); ?>
<?php require_once("./bas_site.php"); ?>