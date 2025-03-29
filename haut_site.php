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

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($content['head']['title']) ?></title>

  <!-- Meta SEO -->
  <meta name="description" content="<?= htmlspecialchars($content['head']['description']) ?>">
  <meta name="robots" content="index, follow">
  <meta name="author" content="<?= htmlspecialchars($content['head']['author']) ?>">
  <meta name="theme-color" content="<?= htmlspecialchars($content['head']['theme_color']) ?>"> <!-- violet foncé -->

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <!-- Preconnect pour Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Google Fonts optimisé -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" media="all" as="style" onload="this.onload=null;this.rel='stylesheet'">

  <!-- Icons -->
  <link rel="preload" href="./themify-icons/css/themify-icons.css" as="style">
  <link rel="stylesheet" href="./themify-icons/css/themify-icons.css" media="all">

  <!-- Encore d'autres icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- CSS principal -->
  <link rel="preload" href="css/style.css" as="style">
  <link rel="stylesheet" href="css/style.css" media="all">
  
  <!-- Ajoute ce player audio dans ton HTML -->
  <audio id="client-sound" src="./sounds/client_notification.mp3" preload="auto"></audio>

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

<?php require_once("./chat_widget.php"); ?>
