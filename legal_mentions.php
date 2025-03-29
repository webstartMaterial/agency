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
                <i class="bi bi-lightbulb-fill mr-1"></i> Mentions légales
            </span>
        </nav>
    </div>

</div>

<section class="max-w-4xl mx-auto px-4 py-20">
    <h1 class="text-3xl md:text-4xl font-bold text-purple-400 mb-8 border-b border-purple-600 pb-4">Mentions légales
    </h1>

    <div class="space-y-6 text-gray-300 text-sm leading-relaxed">
        <h2 class="text-lg font-semibold text-purple-300">1. Éditeur du site</h2>
        <p>
            Le site <strong>https://votre-site.com</strong> est édité par :<br>
            <strong>Nom de l’entreprise / auto-entrepreneur</strong><br>
            SIRET : 123 456 789 00012<br>
            Adresse : 12 rue de la République, 06000 Nice<br>
            Email : <a href="mailto:mail@mail.com" class="text-purple-400 hover:underline">mail@mail.com</a><br>
            Téléphone : 07 82 14 81 41
        </p>

        <h2 class="text-lg font-semibold text-purple-300">2. Directeur de la publication</h2>
        <p>
            Samih Habbani – Gérant / Responsable légal de l’entreprise
        </p>

        <h2 class="text-lg font-semibold text-purple-300">3. Hébergeur</h2>
        <p>
            OVH<br>
            2 rue Kellermann – 59100 Roubaix – France<br>
            www.ovh.com
        </p>

        <h2 class="text-lg font-semibold text-purple-300">4. Propriété intellectuelle</h2>
        <p>
            L’ensemble du site (contenu, visuels, textes, logo, design) est protégé par le droit d’auteur. Toute
            reproduction sans autorisation est interdite.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">5. Responsabilité</h2>
        <p>
            Nous nous efforçons de fournir des informations fiables et à jour. Cependant, la responsabilité du site ne
            peut être engagée en cas d’erreur ou d’omission.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">6. Données personnelles</h2>
        <p>
            Les données collectées via notre formulaire de contact et notre chat sont traitées dans le respect du RGPD.
            Pour en savoir plus, consultez notre <a href="confidentialite.php"
                class="text-purple-400 hover:underline">politique de confidentialité</a>.
        </p>

        <h2 class="text-lg font-semibold text-purple-300">7. Cookies</h2>
        <p>
            Ce site utilise des cookies à des fins de mesure d’audience et d’amélioration de l’expérience utilisateur.
        </p>
    </div>

    <p class="text-xs text-gray-500 mt-10">Dernière mise à jour : <?= date('d/m/Y') ?></p>
</section>

<?php require_once("./footer.php"); ?>
<?php require_once("./bas_site.php"); ?>