<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon site avec Tailblocks</title>
  <link rel="stylesheet" href="./themify-icons/css/themify-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script>
    // Empêche le flash blanc en appliquant le thème au plus tôt
    if (
      localStorage.getItem('theme') === 'dark' ||
      (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)
    ) {
      document.documentElement.classList.add('dark');
    } else {
      document.documentElement.classList.remove('dark');
    }
  </script>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class', // très important
    }
  </script>
  <!-- head -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/alpinejs" defer></script>

</head>

<body class="overflow-x-hidden max-w-full dark:bg-gray-900"></body>

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