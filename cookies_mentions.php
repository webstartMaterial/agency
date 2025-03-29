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
        <i class="bi bi-lightbulb-fill mr-1"></i> Politique de cookies
      </span>
    </nav>
  </div>
</div>

<section class="max-w-4xl mx-auto px-4 py-20">
    <h1 class="text-3xl md:text-4xl font-bold text-purple-400 mb-8 border-b border-purple-600 pb-4">Politique de cookies</h1>

    <div class="space-y-6 text-gray-300 text-sm leading-relaxed">
        <h2 class="text-lg font-semibold text-purple-300">1. Qu’est-ce qu’un cookie ?</h2>
        <p>
            Un cookie est un petit fichier texte déposé sur votre appareil lors de votre visite sur notre site. Il permet notamment de mémoriser certaines de vos préférences et d’améliorer votre expérience utilisateur.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">2. Cookies utilisés</h2>
        <p>
            Nous utilisons différents types de cookies :
        </p>
        <ul class="list-disc list-inside ml-4 text-gray-400">
            <li><strong>Cookies nécessaires :</strong> pour assurer le bon fonctionnement du site.</li>
            <li><strong>Cookies analytiques :</strong> pour mesurer l’audience et améliorer nos contenus.</li>
            <li><strong>Cookies de personnalisation :</strong> pour adapter le contenu à vos préférences.</li>
        </ul>

        <h2 class="text-lg font-semibold text-purple-300">3. Consentement</h2>
        <p>
            Lors de votre première visite, une bannière vous permet d’accepter ou de refuser les cookies non essentiels. Vous pouvez modifier votre choix à tout moment.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">4. Gestion des cookies</h2>
        <p>
            Vous pouvez configurer votre navigateur pour refuser tout ou partie des cookies, ou pour être averti lorsqu’un cookie est installé. Cependant, certaines fonctionnalités du site pourraient ne plus fonctionner correctement.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">5. Durée de conservation</h2>
        <p>
            Les cookies sont conservés pour une durée maximale de 13 mois à compter de leur dépôt sur votre appareil.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">6. Contact</h2>
        <p>
            Pour toute question relative à notre politique de cookies, vous pouvez nous contacter à l’adresse suivante :
            <a href="mailto:mail@mail.com" class="text-purple-400 hover:underline">mail@mail.com</a>
        </p>
    </div>

    <p class="text-xs text-gray-500 mt-10">Dernière mise à jour : <?= date('d/m/Y') ?></p>
</section>

<?php require_once("./footer.php"); ?>
<?php require_once("./bas_site.php"); ?>