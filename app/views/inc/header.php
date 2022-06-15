<?php require APPROOT . '/helpers/title_helper.php';?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo APPNAME . ' | ' .
showTitle($view); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="actualités et mises à jour de l'étudiant comorien au Maroc"
    />
    <meta
      name="keywords"
      content="ACEM, ACEM TECH, ACEMTECH, association des comoriens etudiant au Maroc, acem fes, comoriens de fes, acemfes, etudiants comoriens, lauréats comoriens, licence, master, Comores, Maroc"
    />
    <meta name="author" content="ACEM TECH"/>
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="ACEM TECH - L'actualité de l'étudiant comorien au Maroc mais pas que" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo URLROOT; ?>/storage/<?php echo FILENAME; ?>" />
    <meta property="og:url" content="<?php echo URLROOT; ?>" />
    <meta property="og:site_name" content="ACEM TECH" />
    <meta property="og:description" content="Une solution innovante dans le simple but de garantir l’enrichissement et la valorisation des projets innovants, de cultiver l’esprit d’innovation, développer et faciliter l’esprit d’épanouissement." />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Exo -->
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <!-- Merriweather -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!--Staalish -->
    <link
      href="https://fonts.googleapis.com/css?family=Lato|Staatliches&display=swap" rel="stylesheet"/>
    <!--  Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
    <!-- Main style -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <!-- Favicon-->
    <link rel="icon" type="image/svg+xml" href="<?php echo URLROOT; ?>/public/images/favicon.png" sizes="any">
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php require APPROOT . '/views/inc/navbar.php';?>