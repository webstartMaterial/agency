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
        <i class="bi bi-lightbulb-fill mr-1"></i> Politique de confidentialité
      </span>
    </nav>
  </div>
</div>

<section class="max-w-4xl mx-auto px-4 py-20">
  <h1 class="text-3xl md:text-4xl font-bold text-purple-400 mb-8 border-b border-purple-600 pb-4">Politique de
    confidentialité</h1>

  <div class="space-y-6 text-gray-300 text-sm leading-relaxed">
    <p>
      Cette politique de confidentialité explique comment nous collectons, utilisons et protégeons vos données
      personnelles lorsque vous utilisez notre site.
    </p>

    <h2 class="text-lg font-semibold text-purple-300">1. Responsable du traitement</h2>
    <p>
      Le responsable du traitement est la société <strong>Nom de l'agence</strong>, joignable à l'adresse email suivante
      : <a href="mailto:mail@mail.com" class="text-purple-400 hover:underline">mail@mail.com</a>.
    </p>

    <h2 class="text-lg font-semibold text-purple-300">2. Données collectées</h2>
    <ul class="list-disc ml-6">
      <li>Nom et prénom</li>
      <li>Adresse e-mail</li>
      <li>Numéro de téléphone</li>
      <li>Messages envoyés via le chat</li>
    </ul>

    <h2 class="text-lg font-semibold text-purple-300">3. Finalité du traitement</h2>
    <p>
      Vos données sont collectées pour :
    <ul class="list-disc ml-6 mt-2">
      <li>Vous répondre dans le cadre d'une demande de contact</li>
      <li>Assurer le suivi client</li>
      <li>Améliorer notre service</li>
    </ul>
    </p>

    <h2 class="text-lg font-semibold text-purple-300">4. Durée de conservation</h2>
    <p>
      Les données de conversation sont conservées pendant une durée maximale de <strong>12 mois</strong>, sauf demande
      contraire de votre part.
    </p>

    <h2 class="text-lg font-semibold text-purple-300">5. Partage des données</h2>
    <p>
      Vos données ne sont <strong>jamais revendues</strong>. Elles ne sont partagées qu'en interne ou avec des
      prestataires techniques (hébergement, sécurité).
    </p>

    <h2 class="text-lg font-semibold text-purple-300">6. Vos droits</h2>
    <p>
      Conformément à la loi « Informatique et Libertés » et au RGPD, vous disposez des droits suivants :
    <ul class="list-disc ml-6 mt-2">
      <li>Droit d'accès à vos données</li>
      <li>Droit de rectification</li>
      <li>Droit d'opposition</li>
      <li>Droit à l’effacement (droit à l’oubli)</li>
    </ul>
    Pour exercer vos droits, contactez-nous à : <a href="mailto:mail@mail.com"
      class="text-purple-400 hover:underline">mail@mail.com</a>
    </p>

    <h2 class="text-lg font-semibold text-purple-300">7. Cookies</h2>
    <p>
      Le site utilise des cookies à des fins fonctionnelles. Vous pouvez les accepter ou les refuser à tout moment.
    </p>

    <h2 class="text-lg font-semibold text-purple-300">8. Sécurité</h2>
    <p>
      Vos données sont stockées sur des serveurs sécurisés et ne sont accessibles qu’aux personnes autorisées.
    </p>
  </div>

  <p class="text-xs text-gray-500 mt-10">Dernière mise à jour : <?= date('d/m/Y') ?></p>
</section>

<?php require_once("./footer.php"); ?>
<?php require_once("./bas_site.php"); ?>