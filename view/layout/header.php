<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Frère RT</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Gugi&family=Mountains+of+Christmas&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="public/css/main.css">

  <meta name="theme-color" content="#fafafa">
  <script src="https://kit.fontawesome.com/7e579ade86.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <?php include ("nav.php") ?>
        <section class="top py-3">
          <div class="offset-1">
          <h1>Les freres rape-tout</h1>
          <p>L'argent est un problème, on vous en débarasse</p>
          </div>
        </section>
        <?php 
  if(isset($_SESSION["user"])):
?>
  <a class="btn btn-dark mx-3" href="logout.php">Déconnexion</a>
<?php
  endif;
?>
  </header>

  <!-- <body onload="cookies()"> -->
  <!-- <div class="layer" id="layerId">
    <p id="ajaxCookies"></p>
    <button  class="btn btn-blue btnLayer offset-5" onclick="hideLayer()"> Compris</button>
  </div> -->

  <main>

