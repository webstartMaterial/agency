<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon site avec Tailblocks</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- head -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="pt-24">

  <?php

  // Déterminer la langue depuis l'URL
  $lang = $_GET['lang'] ?? 'fr';

  // Construire le nom du fichier JSON
  $jsonFile = "text_$lang.json";

  // Si le fichier n'existe pas, fallback sur le français
  if (!file_exists($jsonFile)) {
    $jsonFile = "text_fr.json";
  }

  // Charger le contenu JSON dans $content
  $content = json_decode(file_get_contents($jsonFile), true);

  ?>


  <?php require_once("./nav.php"); ?>
  <?php require_once("./header.php"); ?>
  <?php require_once("./presentation.php"); ?>
  <?php require_once("./numbers.php"); ?>
  <?php require_once("./services.php"); ?>
  <?php require_once("./process.php"); ?>
  <?php require_once("./team.php"); ?>
  <!-- <?php require_once("./numbers2.php"); ?> -->
  <?php require_once("./pricing.php"); ?>
  <?php require_once("./testimonials.php"); ?>
  <?php require_once("./contact.php"); ?>
   <!--<?php require_once("./newsletter.php"); ?>-->
  <?php require_once("./footer.php"); ?>


  <!-- just before </body> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

  <!-- Ici tu colles ton bloc Tailblocks -->
</body>

</html>